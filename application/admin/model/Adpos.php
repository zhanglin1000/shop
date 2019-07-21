<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/21
 * Time: 14:15
 */
namespace app\admin\model;

use think\Model;

class Adpos extends Model
{
    //初始化事件
    public static function init()
    {
        //删除之前
        self::event('before_delete',function ( $adpos )
        {

            //调用其他模型删除广告位下所有文件
            Ad::destroy(['adpos_id'=>$adpos['id']]);

        });
    }
}
?>
