<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 0:07
 */

namespace app\admin\controller;

use catetree\Catetree;

use think\Controller;

class Cate extends Controller
{
     //文章分类列表
     public function lst()
     {
         //实例化无限极分类
         $cateTree = new Catetree();

         //查询所有分类
         $cateAll = db('cate')->order('sort ASC')->select();

         //调用无限极分类方法
         $cateRes = $cateTree->sort($cateAll);

         //将查询的结果分配到模板
         $this->assign([
             'cateRes' => $cateRes
         ]);
         return view();
     }

     //文章分类添加
     public function add()
     {
         //判断是否是POST提交
         if(request()->isPost())
         {
             //接收表单数据
             $data = input('post.');

             //判断帮助分类添加子栏目必须是帮助分类
             if($data['pid'] == 3)
             {
                 $data['cate_type'] = 3;
             }

             //验证表单数据
             $validate = new \app\admin\validate\Cate;

             if (!$validate->check($data))
             {
                 $this->error($validate->getError());
             }

             //执行文章分类添加操作
             $cateAdd = db('cate')->insert($data);

             //判断添加状态是否成功
             if($cateAdd)
             {
                 $this->success('添加文章分类成功','lst');
             }
             else
             {
                 $this->error('添加文章分类失败');
             }

             return;
         }

         //实例化无限极分类
         $cateTree = new Catetree();

         //查询所有分类
         $cateAll = db('cate')->select();

         //调用无限极分类方法
         $cateRes = $cateTree->sort($cateAll);

         //查询的分类并分配到模板
         $this->assign([
             'cateRes' => $cateRes
         ]);
         return view();
     }

     //文章分类编辑
     public function edit()
     {
         //判断是否是POST提交
         if(request()->isPost())
         {
             //接收表单数据
             $data = input('post.');

             //验证表单数据
             $validate = new \app\admin\validate\Cate;

             if (!$validate->check($data))
             {
                 $this->error($validate->getError());
             }


             //判断帮助分类添加子栏目必须是帮助分类
             if($data['pid'] == 3)
             {
                 $data['cate_type'] = 3;
             }

             //执行文章分类添加操作
             $cateUpdate = db('cate')->update($data);

             //判断添加状态是否成功
             if($cateUpdate !== false)
             {
                 $this->success('编辑文章'.$data['cate_name'].'分类成功','lst');
             }
             else
             {
                 $this->error('编辑文章'.$data['cate_name'].'分类失败');
             }

             return;
         }

         //实例化无限极分类
         $cateTree = new Catetree();

         //查询所有分类
         $cateAll = db('cate')->select();

         //调用无限极分类方法
         $cateRes = $cateTree->sort($cateAll);

         //根据分类ID查找一条数据
         $cateid = input('id');

         $cateFind = db('cate')->find($cateid);

         //查询的分类并分配到模板
         $this->assign([
             'cateRes' => $cateRes,
             'cateFind' => $cateFind
         ]);

         return view();
     }

     //文章分类删除(注:文章删除无页面)
     public function del()
     {
         //实例化无限极分类
         $cateTree = new Catetree();

         //查询所有分类
         $cateAll = db('cate')->select();

         //获取删除栏目ID
         $cateid = input('id');

         //调用无限极分类方法
         $cateId = $cateTree->childId($cateAll,$cateid);

         //把自身也加入到删除队列
         $cateId[] = $cateid;

         //判断删除是否是系统分类
         $arr = ['1','2','3'];

         if(in_array($cateid,$arr))
         {
            $this->error('系统保留分类,不允许删除');
         }

         //删除栏目前判断此栏目下是否有有文章,如果有文章请先删除文章后在删除此栏目
         $ids = implode(',',$cateId);

         //查询出所有子栏目文章数据
         $article = db('article');

         $articleAll = $article->where('cate_id','in',$ids)->select();

         //组合删除图片路径
         $old_thum = '../public/static/uploads/article/';

         //循环所有子栏目数据
         foreach ($articleAll as $k => $v)
         {
             //判断图片路径是否真实存在
             if(file_exists($old_thum.$v['thumb']))
             {
                 @unlink($old_thum.$v['thumb']);
             }

             //删除所有文章记录
             $article->delete($v['id']);
         }


         //执行删除

         $catedel = db('cate')->delete($cateId);


         if($catedel !== false)
         {
             $this->success('删除文章分类成功','lst');
         }
         else
         {
             $this->error('删除文章分类失败');
         }

     }

     //文章分类排序(注:文章分类排序无页面)
     public function sort()
     {
         //接收排序数据
         $data = input('post.');

         //执行循环排序数据
         foreach ($data['sort'] as $id => $sort)
         {
             //执行修改排序字段数据
             db('cate')->where('id','=',$id)->update(['sort'=>$sort]);
         }

         //如果排序成功则提示
         $this->success('文章分类排序成功','lst');
     }

     //显示导航状态修改
     public function status()
     {
        //判断是否是AJAX提交
        if(request()->isAjax())
        {
            //获取要修改的导航状态ID
            $id = input('id');

            //查询文章分类导航状态
            $status = db('cate')->field('show_nav')->find($id);

            //判断导航状态是否是显示如果是显示就隐藏,如果是隐藏就显示
            if($status['show_nav'] == 1)
            {
                db('cate')->where('id','=',$id)->setField('show_nav',0);
                echo 1; //将显示状态改为隐藏
            }
            else
            {
                db('cate')->where('id','=',$id)->setField('show_nav',1);
                echo 2; //将隐藏状态改为显示
            }
        }
        else
        {
            $this->error('非法操作');
        }
     }

     //文章分类是否允许设置上级检测
     public function cate_status()
     {
         //判断是否是AJAX提交
         if(request()->isAjax())
         {
             //接收表单PID
             $pid= input('pid');

             //判断是否可以添加子栏目
             if(in_array($pid,['1','2']))
             {
                 echo 1;
             }

             //判断帮助分类下子栏目不允许在添加子栏目
             $cateId = db('cate')->field('pid')->find($pid);

             if($cateId['pid'] == 3)
             {
                 echo 1;
             }
         }
         else
         {
             $this->error('非法数据');
         }

     }
}
?>
