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
        $adposRes = db('ad_pos')->paginate(10);

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
            $adposAdd = db('ad_pos')->insert($data);

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
            $adposUpdate = db('ad_pos')->update($data);

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
        $adposFind = db('ad_pos')->find($id);

        return view('adpos/edit',['adposFind'=>$adposFind]);
    }

    //广告位删除
    public function del( $id )
    {
        if( intval( $id ) )
        {
            $adposDel = db('ad_pos')->delete( $id );

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
