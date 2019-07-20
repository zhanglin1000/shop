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
        //查询条件
        $join = [
            ['ad_pos ap','a.adpos_id = ap.id']
        ];

        //查询所有广告
        $adres = db('ad')->alias('a')->field('a.*,ap.name')->join($join)->paginate(10);

        return view('ad/lst',['adres'=>$adres]);
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
