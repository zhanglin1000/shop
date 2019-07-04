<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/4
 * Time: 8:49
 */

namespace app\admin\model;

use think\Model;

class Category extends Model
{
    //注册钩子函数初始化
    public static function init()
    {
         //添加栏目之后处理
        self::afterInsert(function ( $cate )
        {
            /******** 处理商品推荐位 **********/

            //获取推荐位数组
            $goods_rec = isset($cate->goods_rec) ? $cate->goods_rec : '';

            //实例化商品和推荐位公共表
            $goodsRec =  db('goods_rec');

            //判断是否存在
            if( $goods_rec )
            {
                //循环数组
                foreach ( $goods_rec as $k => $v )
                {
                    //执行添加到商品和推荐位公共表
                    $goodsRec->insert([
                        'rec_id' => $v,
                        'goods_id' => $cate->id,
                        'value_type' => 2
                    ]);
                }
            }


            /******** END **********/
        });

        //修改栏目之前
        self::beforeUpdate(function ( $cate ){
            /******** 处理商品推荐位 **********/

            //获取推荐位数组
            $goods_rec = isset($cate->goods_rec) ? $cate->goods_rec : '';

            //实例化商品和推荐位公共表
            $goodsRec =  db('goods_rec');

            //删除之前数据
            $goodsRec->where('goods_id','=',$cate->id)->where('value_type','=',2)->delete();

            //判断是否存在
            if( $goods_rec )
            {
                //循环数组
                foreach ( $goods_rec as $k => $v )
                {
                    //执行添加到商品和推荐位公共表
                    $goodsRec->insert([
                        'rec_id' => $v,
                        'goods_id' => $cate->id,
                        'value_type' => 2
                    ]);
                }
            }


            /******** END **********/
        });
    }
}
?>
