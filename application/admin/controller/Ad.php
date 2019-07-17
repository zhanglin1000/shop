<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/17
 * Time: 16:48
 */

namespace app\admin\controller;

class Ad extends Base
{
    //广告列表
    public function lst()
    {
        return view('ad/lst');
    }

    //广告添加
    public function add()
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //执行添加广告
            $adAdd = model('ad')->allowField(true)->save($data);

            if( $adAdd )
            {
                $this->success('添加广告成功','lst');
            }
            else
            {
                $this->error('添加广告失败');
            }
            return;
        }

        //查询所有广告类型
        $adposRes = db('ad_pos')->select();

        return view('ad/add',['adposRes'=>$adposRes]);
    }

    //广告编辑
    public function edit()
    {
        return view('ad/edit');
    }

    //广告删除
    public function del()
    {

    }

}
?>
