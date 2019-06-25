<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/3
 * Time: 22:57
 */
namespace app\admin\model;

use think\Model;

class Goods extends Model
{
    //注册钩子函数初始化
    public static function init()
    {
        //添加商品之前上传缩略图
        self::beforeInsert(function ( $goods )
        {
             //判断是否有图片上传
             if( $_FILES['og_thumb']['tmp_name'] != '' )
             {
                 //获取到上传图片原文件名
                 $thumbName =  self::upload('og_thumb');

                 //拼装缩略图路径
                 $ogThumbPath = '../public/static/uploads/goods/';

                 //根据原图生成三张缩略图
                 $ogThumb = date('Ymd').'/'.$thumbName;

                 $bigThumb = date('Ymd').'/'.'big_'.$thumbName;

                 $midThumb = date('Ymd').'/'.'mid_'.$thumbName;

                 $smThumb = date('Ymd').'/'.'sm_'.$thumbName;

                 //执行生成缩略图
                 $image = \think\Image::open($ogThumbPath.'/'.$ogThumb);

                 $image->thumb(500, 500)->save( $ogThumbPath.'/'.$bigThumb);
                 $image->thumb(200, 200)->save( $ogThumbPath.'/'.$midThumb );
                 $image->thumb(80, 80)->save( $ogThumbPath.'/'.$smThumb );

                 //生成的缩略图写入到数据库
                 $goods->og_thumb = $ogThumb;
                 $goods->big_thumb = $bigThumb;
                 $goods->md_thumb = $midThumb;
                 $goods->sm_thumb = $smThumb;

             }

             //商品货品编号
             $goods->goods_code = time().rand(111111,999999);

        });

        //添加商品之后处理
        self::afterInsert(function ( $goods )
        {

            /******** 处理会员价格批量添加 **********/

            //获取到会员价格并添加到指定数据库
            $mpArr = $goods->mp;

            //获取添加后的商品ID
            $goods_id = $goods->id;

            //实例化会员价格表
            $member_price = db('member_price');

            //批量添加会员价到会员价格表
            if( $mpArr )
            {
                foreach ( $mpArr as $mlevel_id => $mprice )
                {
                    //判断是否为空,如果为空就跳过
                    if( empty( trim( $mprice ) ) )
                    {
                        continue;
                    }
                    else
                    {
                        //执行批量添加数据到会员表
                        $member_price->insert(['mprice'=>intval($mprice),'mlevel_id'=>$mlevel_id,'goods_id'=>$goods_id]);
                    }

                }
            }

            /********* 处理会员价格批量添加结束 ********/


            /******** 处理商品相册批量添加 **********/

            if(self::_hasImags($_FILES['goods_photo']['tmp_name']))
            {
                //实例化商品相册表
                $photo = db('photo');

                $files = request()->file( 'goods_photo' );

                foreach( $files as $file )
                {

                    $info = $file->validate(['ext'=>'jpg,gif,png,jpeg'])->move(  '../public/static/uploads/goods_photo' );

                    if( $info )
                    {
                        //原图路径
                        $photoName =  $info->getFilename();

                        //拼装缩略图路径
                        $ogPhotoPath = '../public/static/uploads/goods_photo/';

                        //根据原图生成三张缩略图
                        $ogPhoto = date('Ymd').'/'.$photoName;

                        $bigPhoto = date('Ymd').'/'.'big_'.$photoName;

                        $midPhoto = date('Ymd').'/'.'mid_'.$photoName;

                        $smPhoto = date('Ymd').'/'.'sm_'.$photoName;


                        //执行生成缩略图
                        $image = \think\Image::open($ogPhotoPath.'/'.$ogPhoto);

                        $image->thumb(500, 500)->save( $ogPhotoPath.'/'.$bigPhoto);
                        $image->thumb(200, 200)->save( $ogPhotoPath.'/'.$midPhoto );
                        $image->thumb(80, 80)->save( $ogPhotoPath.'/'.$smPhoto );

                        //生成好的缩略图批量写入数据库
                        $photo->insert(['id'=> '','goods_id'=>$goods_id,'og_photo'=>$ogPhoto,'sm_photo'=>$smPhoto,'mid_photo'=>$midPhoto,'big_photo'=>$bigPhoto]);

                    }
                    else
                    {

                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }

            /********* 处理商品相册批量添加结束 ********/

            /******** 处理商品属性批量添加 **********/
            //判断类型是否为空
            if(!empty($goods->type_id))
            {

                //接收商品属性
                $goods_attr = $goods->goods_attr;

                //接收商品价格
                $goods_price = $goods->goods_price;


                //实例化商品属性表
                $goodsAttr = db('goods_attr');

                //判断是否有商品属性
                if( $goods_attr )
                {
                    //循环商品属性
                    foreach ( $goods_attr as $k => $v )
                    {
                        foreach ( $v as $k1 => $v1 )
                        {

                            //判断是否为空,是空就跳过
                            if( empty($v1) )
                            {
                                continue;
                            }

                            //执行批量写入商品属性
                            $goodsAttr->insert([
                                'id' => '',
                                'attr_id' => $k,
                                'attr_value' => $v1,
                                'attr_price' => isset($goods_price[$k][$k1]) ? $goods_price[$k][$k1] : 0 ,
                                'goods_id' => $goods_id
                            ]);

                        }



            }}
                }

            /********* 处理商品属性批量添加结束 ********/

        });

        //删除商品之前处理
        self::beforeDelete(function ( $goods )
        {
            //获取删除商品ID
            $goods_id = $goods->id;

            /**************处理主图删除*******************/

             //拼装删除主图路径
             $ogThumbPath = '../public/static/uploads/goods/';

             //判断原图是否存在
             if( !empty($goods->og_thumb) )
             {
                 //获取删除图片
                 $goods_thumb = [];

                 //组合删除主图数组
                 $goods_thumb = [
                     'og_thumb' => $ogThumbPath.$goods->og_thumb,
                     'sm_thumb' => $ogThumbPath.$goods->sm_thumb,
                     'md_thumb' => $ogThumbPath.$goods->md_thumb,
                     'big_thumb' => $ogThumbPath.$goods->big_thumb
                 ];

                 //循环遍历组合的主图数组实现本地删除
                 foreach ($goods_thumb as  $k => $v)
                 {
                     if( file_exists($v) )
                     {
                         @unlink($v);
                     }
                 }

             }


            /**************END*******************/

            /**************处理关联商品价格删除*******************/

            $goodsPrice = db('member_price')->where('goods_id','=',$goods_id)->delete();


            /**************END*******************/

            /**************处理商品属性删除*******************/

            $goodsAttr = db('goods_attr')->where('goods_id','=',$goods_id)->delete();

            /**************END*******************/

            /**************处理商品相册删除*******************/

            //拼装删除主图路径
            $ogPhoto = '../public/static/uploads/goods_photo/';

            //查询指定商品相册
            $goodsPhoto = db('photo')->where('goods_id','=',$goods_id)->select();

            //判断是否存在相册
            if( $goodsPhoto )
            {
                //循环查询的指定相册
                foreach ( $goodsPhoto as $k => $v )
                {
                   @unlink($ogPhoto.$v['og_photo']);
                   @unlink($ogPhoto.$v['sm_photo']);
                   @unlink($ogPhoto.$v['mid_photo']);
                   @unlink($ogPhoto.$v['big_photo']);
                }
            }


            //删除相册数据库数据
            db('photo')->where('goods_id','=',$goods_id)->delete();


            /**************END*******************/

            //删除商品表数据
            db('goods')->where('id','=',$goods_id)->delete();

        });

        //修改之前处理
        self::beforeUpdate(function ( $goods )
        {
            //判断是否有图片上传
            if( $_FILES['og_thumb']['tmp_name'] != '' )
            {
                //拼装缩略图路径
                $ogThumbPath = '../public/static/uploads/goods/';

                //上传新图删除旧图
                if( file_exists($ogThumbPath.$goods->og_thumb) )
                {
                    @unlink($ogThumbPath.$goods->og_thumb);
                    @unlink($ogThumbPath.$goods->sm_thumb);
                    @unlink($ogThumbPath.$goods->md_thumb);
                    @unlink($ogThumbPath.$goods->big_thumb);
                }

                //获取到上传图片原文件名
                $thumbName =  self::upload('og_thumb');

                //根据原图生成三张缩略图
                $ogThumb = date('Ymd').'/'.$thumbName;

                $bigThumb = date('Ymd').'/'.'big_'.$thumbName;

                $midThumb = date('Ymd').'/'.'mid_'.$thumbName;

                $smThumb = date('Ymd').'/'.'sm_'.$thumbName;

                //执行生成缩略图
                $image = \think\Image::open($ogThumbPath.'/'.$ogThumb);

                $image->thumb(500, 500)->save( $ogThumbPath.'/'.$bigThumb);
                $image->thumb(200, 200)->save( $ogThumbPath.'/'.$midThumb );
                $image->thumb(80, 80)->save( $ogThumbPath.'/'.$smThumb );

                //生成的缩略图写入到数据库
                $goods->og_thumb = $ogThumb;
                $goods->big_thumb = $bigThumb;
                $goods->md_thumb = $midThumb;
                $goods->sm_thumb = $smThumb;

            }

            /******** 处理会员价格批量修改 **********/
             //获取商品ID
             $goodsId = $goods->id;

             //实例化会员价格
             $memberPrice = db('member_price');

             //删除原有会员价格,修改新的数据
             $memberPrice->where('goods_id','=',$goodsId)->delete();

             //获取会员价格
             $mp = $goods->mp;

             //判断是否存在会员价格,不存在就跳过
             if($mp)
             {
                foreach ( $mp as $k => $v )
                {
                    //为空就跳过
                    if(empty( $v ))
                    {
                        continue;
                    }

                    //写入会员价格
                    $memberPrice->insert([
                        'mprice' => $v,
                        'mlevel_id' => $k,
                        'goods_id'  => $goodsId
                    ]);

                }
             }
            /******** END **********/

            /******** 处理相册修改 **********/
            if(self::_hasImags($_FILES['goods_photo']['tmp_name']))
            {
                //实例化商品相册表
                $photo = db('photo');

                $files = request()->file( 'goods_photo' );

                foreach( $files as $file )
                {

                    $info = $file->validate(['ext'=>'jpg,gif,png,jpeg'])->move(  '../public/static/uploads/goods_photo' );

                    if( $info )
                    {
                        //原图路径
                        $photoName =  $info->getFilename();

                        //拼装缩略图路径
                        $ogPhotoPath = '../public/static/uploads/goods_photo/';

                        //根据原图生成三张缩略图
                        $ogPhoto = date('Ymd').'/'.$photoName;

                        $bigPhoto = date('Ymd').'/'.'big_'.$photoName;

                        $midPhoto = date('Ymd').'/'.'mid_'.$photoName;

                        $smPhoto = date('Ymd').'/'.'sm_'.$photoName;


                        //执行生成缩略图
                        $image = \think\Image::open($ogPhotoPath.'/'.$ogPhoto);

                        $image->thumb(500, 500)->save( $ogPhotoPath.'/'.$bigPhoto);
                        $image->thumb(200, 200)->save( $ogPhotoPath.'/'.$midPhoto );
                        $image->thumb(80, 80)->save( $ogPhotoPath.'/'.$smPhoto );

                        //生成好的缩略图批量写入数据库
                        $photo->insert(['id'=> '','goods_id'=>$goodsId,'og_photo'=>$ogPhoto,'sm_photo'=>$smPhoto,'mid_photo'=>$midPhoto,'big_photo'=>$bigPhoto]);

                    }
                    else
                    {

                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }
            /******** END **********/

            /*******处理商品属性**********/

            /**********END***************/
            print_r(input('post.'));
            die();

        });




    }

    //相册上传多图检测函数
    private static function _hasImags($tmpArr)
    {
        foreach ( $tmpArr as $k => $v )
        {
            if($v)
            {
                return true;
            }
        }

        return false ;
    }

    //单文件上传图片函数
    public static function upload( $imgName )
    {

        $file = request()->file( $imgName );

        $info = $file->validate(['ext'=>'jpg,gif,png,jpeg'])->move( '../public/static/uploads/goods');

        if($info)
        {
            return $info->getFilename();
        }
        else
        {
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }
}
?>
