<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/17
 * Time: 18:11
 */
namespace app\admin\model;

use think\Model;

class Ad extends Model
{
    //初始化事件
    public static function init()
    {
        //添加广告之前
        self::event('before_insert', function ( $ad )
        {
            //判断类型添加图片
            if( $ad['ad_type'] == 1 )
            {
                if( $_FILES['img_src']['tmp_name'] != '' )
                {
                    $ad['img_src'] = self::upload('img_src');
                }

            }

            //判断广告是否启用状态
            if( $ad['statue'] == 1 )
            {
                db('ad')->where('ad_type','=',$ad['ad_type'])->update(['statue'=>0]);
            }
        });

        //添加广告之后
        self::event('after_insert',function ( $ads )
        {
            //判断类型添加图片
            if( $ads['ad_type'] == 2 )
            {
                //获取表单数据
                $data = input('post.');

                //判断上传地址是否为空
                foreach ( $_FILES['flash_img']['name'] as $k => $v)
                {
                    if(!$v)
                    {
                        unset($data['flash_link'][$k]);
                        unset($_FILES['flash_img']['name'][$k]);
                        unset($_FILES['flash_img']['type'][$k]);
                        unset($_FILES['flash_img']['tmp_name'][$k]);
                        unset($_FILES['flash_img']['error'][$k]);
                        unset($_FILES['flash_img']['size'][$k]);
                    }

                }

                //重新排序
                sort($_FILES['flash_img']['name']);
                sort($_FILES['flash_img']['type']);
                sort($_FILES['flash_img']['tmp_name']);
                sort($_FILES['flash_img']['error']);
                sort($_FILES['flash_img']['size']);
                sort($data['flash_link']);


                $files = request()->file('flash_img');

                foreach($files as $k =>$file)
                {
                    $info = $file->move( '../public/static/uploads/pictures/');

                    if($info)
                    {
                        //把上传的缩略图添加到指定表中
                        db('adflash')->insert(['flash_img'=>$info->getSaveName(),'flash_link'=>$data['flash_link'][$k],'ad_id'=>$ads['id']]);
                    }
                    else
                    {
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }

                }


            }

        });

        //删除之前
        self::event('before_delete',function ( $ad ){

            //根据类型删除图片
            if( $ad['ad_type'] == 1 )
            {
                //组合删除图片路径
                $delimg = '../public/static/uploads/picture/'.$ad['img_src'];

                //判断是否存在
                if ( file_exists( $delimg ) )
                {
                    @unlink($delimg);
                }
            }
            else
            {
                //查询轮播多张图片表
                $imgs = db('adflash')->where('ad_id','=',$ad['id'])->select();

                //声明图片删除变量
                $delimg = '';

                //循环删除所有图片
                foreach ( $imgs as $k => $v )
                {
                    $delimg = "../public/static/uploads/pictures/".$v['flash_img'];

                    if( file_exists( $delimg ) )
                    {
                        @unlink($delimg);
                    }

                    db('adflash')->where('ad_id','=',$ad['id'])->delete();
                }


            }

        });

        //修改之前
        self::event('before_update',function ( $ad )
        {
            //获取表单数据
            $data = input('post.');

            //判断类型修改图片
            if( $ad['ad_type'] == 1 )
            {
                if( $_FILES['img_src']['tmp_name'] != '' )
                {
                    //查询原图片数据
                    $oldImg = "../public/static/uploads/picture/".$ad['img_src'];

                    if ( file_exists( $oldImg ) )
                    {
                        @unlink($oldImg);
                    }

                    $ad['img_src'] = self::upload('img_src');
                }

            }
            else
            {
                if( isset($_FILES['flash_img']) )
                {

                    //判断上传地址是否为空
                    foreach ( $_FILES['flash_img']['name'] as $k => $v)
                    {
                        if(!$v)
                        {
                            unset($data['flash_link'][$k]);
                            unset($_FILES['flash_img']['name'][$k]);
                            unset($_FILES['flash_img']['type'][$k]);
                            unset($_FILES['flash_img']['tmp_name'][$k]);
                            unset($_FILES['flash_img']['error'][$k]);
                            unset($_FILES['flash_img']['size'][$k]);
                        }

                    }

                    //重新排序
                    sort($_FILES['flash_img']['name']);
                    sort($_FILES['flash_img']['type']);
                    sort($_FILES['flash_img']['tmp_name']);
                    sort($_FILES['flash_img']['error']);
                    sort($_FILES['flash_img']['size']);
                    sort($data['flash_link']);


                    $files = request()->file('flash_img');

                    foreach($files as $k =>$file)
                    {
                        $info = $file->move( '../public/static/uploads/pictures/');

                        if($info)
                        {
                            //把上传的缩略图添加到指定表中
                            db('adflash')->insert(['flash_img'=>$info->getSaveName(),'flash_link'=>$data['flash_link'][$k],'ad_id'=>$data['id']]);
                        }
                        else
                        {
                            // 上传失败获取错误信息
                            echo $file->getError();
                        }

                    }
                }

            }

            //修改链接
            if( isset( $data['old_flash_link'] ) )
            {
                //遍历数组
                foreach ( $data['old_flash_link'] as $id => $v )
                {
                   db('adflash')->where('id','=',$id)->setField('flash_link',$v);
                }
            }


            //判断广告是否启用状态
            if( $ad['statue'] == 1 )
            {
                db('ad')->where('adpos_id','=',$ad['adpos_id'])->update(['statue'=>0]);
            }


        });
    }

        //单上传文件
        public static function upload( $imgName )
        {

            $file = request()->file($imgName);

            $info = $file->validate(['ext'=>'jpg,gif,png,jpeg'])->move( '../public/static/uploads/picture/');

            if($info)
            {
                return  $info->getSaveName();
            }
            else
            {
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }



}
?>
