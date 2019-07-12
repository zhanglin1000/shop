<?php
namespace app\index\controller;

class Index extends Comment
{
    public function index()
    {
        //首页推荐
        $recPos = $this->getRec(4,0);

        foreach ( $recPos as $k => $v )
        {
            $recPos[$k]['subclass'] = $this->getRec(4,$v['id']);
        }

        return view('index/index',['recPos'=>$recPos]);
    }

    //首页推荐实现
    public function getRec($rec,$pid=0)
    {
       //查询推荐数据
       $where = [
           'rec_id' => $rec,
           'value_type' => 2
       ];

       $rec_pos = db('goods_rec')->where($where)->select();

       //定义一个数组
       $arr = [];

       foreach ( $rec_pos as $k => $v )
       {
           $_arr = db('category')->field('id,pid,cate_name')->where('pid','=',$pid)->where('id','=',$v['goods_id'])->find();;
           if( $_arr )
           {
               $arr[] = $_arr;
           }

       }

      return $arr;


    }


}
