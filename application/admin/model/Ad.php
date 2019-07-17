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
                $ad['img_src'] = self::upload('img_src');
            }
        });

        //添加广告之后
        self::event('after_insert',function ( $ads ){
            //判断类型添加图片
            if( $ads['ad_type'] == 2 )
            {
                $files = request()->file('flash_img');

                foreach($files as $file)
                {
                    $info = $file->move( '../public/static/uploads/pictures/');
                    if($info)
                    {
                        print_r($file);
                    }
                    else
                        {
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }

                }

               print_r($ads);

            }

            die();
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
