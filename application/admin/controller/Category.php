<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/23
 * Time: 22:32
 */
namespace app\admin\controller;

use catetree\Catetree;


class Category extends Base
{
    //商品分类列表
    public function lst()
    {
        //调用无限极分类
        $cateTree = new Catetree();

        //查询所有商品分类
        $category = db('category')->order('sort ASC')->select();

        //商品分类全部读取
        $categoryAll = $cateTree->sort($category);

        //分配数据到模板
        $this->assign([
            'categoryAll' => $categoryAll
        ]);
        return view();
    }

    //商品分类添加
    public function add()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\Category();

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //写入数据到数据表
            $categoryAdd = model('category')->save($data);

            //判断是否新增成功
            if($categoryAdd)
            {
                $this->success('新增商品分类成功','lst');
            }
            else
            {
                $this->error('新增商品分类失败');
            }
            return;
        }

        //调用无限极分类
        $cateTree = new Catetree();

        //查询所有商品分类
        $category = db('category')->select();

        //商品分类全部读取
        $categoryAll = $cateTree->sort($category);

        //栏目推荐位
        $goodsRec = db('rec_pos')->where('rec_type','=','2')->select();

        //分配数据到模板
        $this->assign([
            'categoryAll' => $categoryAll,
            'goodsRec' => $goodsRec
        ]);

        return view();
    }

    //商品分类编辑
    public function edit()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\Category();

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //编辑数据到数据表
            $categorySave = model('category')->update($data);

            //判断是否修改成功
            if($categorySave !== false)
            {
                $this->success('编辑商品分类成功','lst');
            }
            else
            {
                $this->error('编辑商品分类失败');
            }
            return;
        }

        //调用无限极分类
        $cateTree = new Catetree();

        //查询所有商品分类
        $category = db('category')->select();

        //商品分类全部读取
        $categoryAll = $cateTree->sort($category);

        //获取当前分类ID
        $id = input('id');

        //获取一条商品分类记录
        $categoryFind = db('category')->find($id);

        //栏目推荐位
        $goodsRec = db('rec_pos')->where('rec_type','=','2')->select();

        //查询指定栏目推荐位
        $where = [
            'goods_id'=>input('id'),
            'value_type' => 2
        ];
        $recPos = db('goods_rec')->where($where)->select();

        //更改二维数组位一位数组
        $myrecpos = [];

        foreach ( $recPos as $k => $v )
        {
            $myrecpos[] = $v['rec_id'];
        }

        //分配数据到模板
        $this->assign([
            'categoryAll' => $categoryAll,
            'categoryFind' => $categoryFind,
            'goodsRec' => $goodsRec,
            'myrecpos' => $myrecpos
        ]);
        return view();
    }

    //商品分类删除(注：删除无页面)
    public function del($id)
    {
        if($id)
        {
            //调用无限极分类删除方法
            $cateTree = new Catetree();

            //查询所有商品分类
            $category = db('category')->select();

            //商品分类全部子分类
            $category_child = $cateTree->childId($category,$id);

            //把当前分类加入到删除列表中
            $category_child[] = $id;

            //把当前查询的所有子分类组合成字符串
            $category_child = implode(',',$category_child);

            //删除栏目之前删除栏目推荐信息
            $goodsRec = db('goods_rec');

            //组合删除条件
            $where = [
                ['goods_id','IN',$category_child],
                ['value_type','=',2]
            ];

            //删除推荐信息
            $goodsRec->where($where)->delete();

            //执行删除方法
            $categoryDel = db('category')->delete($category_child);

            //判断是否删除成功
            if($categoryDel !== false)
            {
                $this->success('删除商品分类成功','lst');
            }
            else
            {
                $this->error('删除商品分类失败');
            }
        }
        else
        {
            $this->error('非法操作');
        }



    }

    //商品分类排序(注：排序共用列表页)
    public function sort()
    {
        //接收排序数据
        $data = input('post.');

        //执行循环排序数据
        foreach ($data['sort'] as $id => $sort)
        {
            //执行修改排序字段数据
            db('category')->where('id','=',$id)->update(['sort'=>$sort]);
        }

        //如果排序成功则提示
        $this->success('商品分类排序成功','lst');
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
            $status = db('category')->field('show_nav')->find($id);

            //判断导航状态是否是显示如果是显示就隐藏,如果是隐藏就显示
            if($status['show_nav'] == 1)
            {
                db('category')->where('id','=',$id)->setField('show_nav',0);
                echo 1; //将显示状态改为隐藏
            }
            else
            {
                db('category')->where('id','=',$id)->setField('show_nav',1);
                echo 2; //将隐藏状态改为显示
            }
        }
        else
        {
            $this->error('非法操作');
        }
    }
}
?>
