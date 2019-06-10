<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/27
 * Time: 22:23
 */
namespace app\admin\controller;

use function PHPSTORM_META\type;
use think\Controller;

class Type extends Controller
{
    //商品属性类型列表
    public function lst()
    {
        //读取所有商品类型
        $typeAll = db('type')->paginate(10);

        //分配数据到模板
        $this->assign([
            'typeAll' => $typeAll
        ]);
        return view();
    }

    //商品属性类型添加
    public function add()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\Type();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加
            $typeAdd = db('type')->insert($data);

            if($typeAdd)
            {
                $this->success('添加商品类型成功','lst');
            }
            else
            {
                $this->error('添加商品类型失败');
            }
            return;
        }

        return view();
    }

    //商品属性类型编辑
    public function edit()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\Type();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行编辑
            $typeUpdate = db('type')->update($data);

            if($typeUpdate !== false)
            {
                $this->success('编辑商品类型成功','lst');
            }
            else
            {
                $this->error('编辑商品类型失败');
            }
            return;
        }

        //读取一条商品类型数据
        $id = input('id');

        $typeFind = db('type')->find($id);

        $this->assign([
            'typeFind' => $typeFind
        ]);
        return view();
    }

    //商品属性类型删除(注:商品类型无删除页面)
    public function del($id)
    {
        //执行删除
        if($id)
        {
             $typeDel = db('type')->delete($id);

             //判断是否删除成功
            if($typeDel !== false)
            {
                $this->success('删除商品类型成功','lst');
            }
            else
            {
                $this->error('删除商品类型失败');
            }
        }
        else
        {
            $this->error('非法操作');
        }
    }
}
?>
