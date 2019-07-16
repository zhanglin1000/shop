<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/13
 * Time: 22:18
 */
namespace app\admin\controller;

use catetree\Catetree;


class Article extends Base
{
    //文章列表
    public function lst()
    {
        //读取文章列表数据
        $articleAll = db('article')->alias('a')->field('a.*,c.cate_name')->join('cate c','a.cate_id = c.id')->order('sort ASC')->paginate(10);

        //分配数据到模板
        $this->assign([
            'articlAll' => $articleAll
        ]);
        return view();
    }

    //文章添加
    public function add()
    {

        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //执行添加验证
            $validate = validate('Article');

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //处理文章缩略图
            if($_FILES['thumb']['tmp_name'] != '')
            {
                $data['thumb'] = $this->upload();
            }

            //文章时间添加
            $data['addtime'] = time();

            //判断文章外链网址是包含有HTTP
            if($data['link_url'] && stripos($data['link_url'],'http://') === false)
            {
                $data['link_url'] = 'http://'.$data['link_url'];
            }

            //执行添加文章
            $artileAdd = db('article')->insert($data);

            if($artileAdd)
            {
                $this->success('添加文章成功','lst');
            }
            else
            {
                $this->error('添加文章失败');
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

    //文章编辑
    public function edit()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //执行编辑验证
            $validate = validate('Article');

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //处理文章缩略图
            if($_FILES['thumb']['tmp_name'] != '')
            {
                //如果有图片删除先删除原图,在把新图上传
                $old_thumb = input('thumb');

                //组合删除图片路径
                $old_thumb = '../public/static/uploads/article/'.$old_thumb;

                //判断文件是否真实存在
                if(file_exists($old_thumb))
                {
                    @unlink($old_thumb);
                }

                $data['thumb'] = $this->upload();
            }

            //判断文章外链网址是包含有HTTP
            if($data['link_url'] && stripos($data['link_url'],'http://') === false)
            {
                $data['link_url'] = 'http://'.$data['link_url'];
            }

            //执行修改文章
            $artileUpdate = db('article')->update($data);

            if($artileUpdate !== false)
            {
                $this->success('编辑['.$data['title'].']文章成功','lst');
            }
            else
            {
                $this->error('编辑['.$data['title'].']文章失败');
            }

            return;
        }

        //实例化无限极分类
        $cateTree = new Catetree();

        //查询所有分类
        $cateAll = db('cate')->select();

        //调用无限极分类方法
        $cateRes = $cateTree->sort($cateAll);

        //获取文章ID
        $id = input('id');

        //根据文章ID获取一条记录
        $articleFild = db('article')->find($id);

        //查询的分类并分配到模板
        $this->assign([
            'cateRes' => $cateRes,
            'articleFild' => $articleFild
        ]);

        return view();
    }

    //文章删除(注:文章删除无页面)
    public function del()
    {
       //接收传入删除文章ID
       $id = input('id');

        //判断是否有图片,如果有先删除原有图片
        $old_thumb = db('article')->field('thumb')->find($id);

        //组合删除图片路径
        $old_thumb = '../public/static/uploads/article/'.$old_thumb['thumb'];

        //判断文件是否真实存在
        if(file_exists($old_thumb))
        {
            @unlink($old_thumb);
        }

       //执行删除操作
       $articleDel = db('article')->delete($id);

       if($articleDel !== false)
       {
           $this->success('删除文章成功','lst');
       }
       else
       {
           $this->error('删除文章失败s');
       }
    }

    //文章排序(注:文章排序无页面)
    public function sort()
    {
       //接收传入的排序值
       $data = input('post.');

       //循环遍历获取排序值和ID
       foreach ($data['sort'] as  $id => $sort)
       {
          db('article')->where('id','=',$id)->update(['sort'=>$sort]);
       }

       $this->success('文章排序成功','lst');
    }

    //显示文章置顶状态修改
    public function important()
    {
        //判断是否是AJAX提交
        if(request()->isAjax())
        {
            //获取要修改的文章置顶状态ID
            $id = input('id');

            //查询文章置顶状态
            $status = db('article')->field('important')->find($id);

            //判断文章置顶状态是否是显示如果是显示就普通,如果普通就置顶
            if($status['important'] == 1)
            {
                db('article')->where('id','=',$id)->setField('important',2);
                echo 1; //将普通状态改为置顶
            }
            else
            {
                db('article')->where('id','=',$id)->setField('important',1);
                echo 2; //将置顶状态改为普通
            }
        }
        else
        {
            $this->error('非法操作');
        }
    }

    //显示文章状态修改
    public function status()
    {
        //判断是否是AJAX提交
        if(request()->isAjax())
        {
            //获取要修改的文章状态ID
            $id = input('id');

            //查询文章状态
            $status = db('article')->field('status')->find($id);

            //判断文章状态是否是显示如果是显示就隐藏,如果是隐藏就显示
            if($status['status'] == 1)
            {
                db('article')->where('id','=',$id)->setField('status',0);
                echo 1; //将显示状态改为隐藏
            }
            else
            {
                db('article')->where('id','=',$id)->setField('status',1);
                echo 2; //将隐藏状态改为显示
            }
        }
        else
        {
            $this->error('非法操作');
        }
    }

    //文章分类是否允许设置上级检测
    public function article_status()
    {
        //判断是否是AJAX提交
        if(request()->isAjax())
        {
            //接收表单PID
            $pid= input('pid');

            //判断是否可以添加文章
            if(in_array($pid,['1']))
            {
                echo 1;
            }

            //判断帮助分类下子栏目不允许在添加子栏目
            $cateId = db('cate')->field('id')->find($pid);

            if($cateId['id'] == 3)
            {
                echo 1;
            }
        }
        else
        {
            $this->error('非法数据');
        }

    }

    //文章图片上传
    public function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('thumb');

        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move( '../public/static/uploads/article');

        if($info)
        {
            return $info->getSaveName();
        }
        else
        {
            // 上传失败获取错误信息
            die($file->getError());
        }
    }

    //ueditor图片管理列表
    public function img_list()
    {
        //获取所有图片列表
        $dir = my_scandir(UEDITOR_PATH);

        //存放图片数组
        $imgArr = [];

        //循环所有图片列表
        foreach ($dir as $k => $v)
        {

            if(is_array($v))
            {
                foreach ($v as $k1 => $v1)
                {
                    $v = str_replace(UEDITOR_PATH,NEWUEDITOR_PATH,$v1);
                    $imgArr[$k1] = $v;
                }
            }
            else
            {
                $v = str_replace(UEDITOR_PATH,NEWUEDITOR_PATH,$v);
                $imgArr[$k]= $v;
            }

        }

        //分配数据到模板 str_replace(UEDITOR_PATH,NEWUEDITOR_PATH,$v);
        $this->assign([
            'imgArr' => $imgArr
        ]);

       return view();
    }

    //ueditor图片删除方法
    public function delImg()
    {
       //获取图片路径
       $imgSrc = input('img_src');

       //判断图片是否真实存在
       if(file_exists(UEDITOR_DEL.$imgSrc))
       {
           @unlink(UEDITOR_DEL.$imgSrc);
           echo 1;
       }
       else
       {
           echo 2;
       }
    }
}
?>
