<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/19
 * Time: 19:34
 */
namespace app\index\controller;


class Goods extends Comment
{
    //商品详情页
    public function index($id)
    {
        //通过ID获取商品信息
        $where[] = ['id','=',$id];

        $goods_info = db('goods')->where($where)->find();

        //商品主图信息数组
        $goodsThumbArr = [];

        if( $goods_info['og_thumb'] )
        {
            $goodsThumbArr['og_photo'] = $goods_info['og_thumb'];
            $goodsThumbArr['sm_photo'] = $goods_info['sm_thumb'];
            $goodsThumbArr['mid_photo'] = $goods_info['md_thumb'];
            $goodsThumbArr['big_photo'] = $goods_info['big_thumb'];
        }

        //获取商品相册信息
        $goods_photo = db('photo')->field('id,goods_id',true)->where('goods_id','=',$id)->select();

        //把新添加的主图放在数组前面
        array_unshift($goods_photo,$goodsThumbArr);


        return view('index',['goods_info'=>$goods_info,'goods_photo'=>$goods_photo]);
    }
}
?>
