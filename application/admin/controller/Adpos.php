<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/17
 * Time: 10:06
 */
namespace app\admin\controller;

class Adpos extends Base
{

    //广告位列表
    public function lst()
    {
        //显示广告列表
        $adposRes = db('adpos')->paginate(10);

        return view('adpos/lst',['adposRes'=>$adposRes]);
    }

    //广告位添加
    public function add()
    {
        //判断是否POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //验证数据是否合法
            $validate = new \app\admin\validate\Adpos();

            if( !$validate->check($data) )
            {
                $this->error($validate->getError());
            }

            //执行添加数据
            $adposAdd = db('adpos')->insert($data);

            if( $adposAdd )
            {
                $this->success('添加广告位成功','lst');
            }
            else
            {
                $this->error('添加广告位失败');
            }

            return;
        }
        return view('adpos/add');
    }

    //广告位编辑
    public function edit( $id )
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //验证数据是否合法
            $validate = new \app\admin\validate\Adpos();

            if( !$validate->check($data) )
            {
                $this->error($validate->getError());
            }

            //执行添加数据
            $adposUpdate = db('adpos')->update($data);

            if( $adposUpdate !== false )
            {
                $this->success('编辑广告位成功','lst');
            }
            else
            {
                $this->error('编辑广告位失败');
            }

            return;
        }
        //根据ID获取一条记录
        $adposFind = db('adpos')->find($id);

        return view('adpos/edit',['adposFind'=>$adposFind]);
    }

    //广告位删除
    public function del( $id )
    {
        if( intval( $id ) )
        {
            //实例化模型
            $adposmodel = model('adpos');

            //执行删除
            $adposDel = $adposmodel::destroy( $id );

            if( $adposDel !== false )
            {
                $this->success('删除广告位成功','lst');
            }
            else
            {
                $this->error('删除广告位失败');
            }
        }
        else
        {
            $this->error('非法操作');
        }
    }

}
?>
