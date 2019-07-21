<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Adpos extends Validate
{
    //商品类型验证
    protected $rule =   [
        'name'  => 'require|max:30|unique:adpos'
    ];

    //商品类型验证中文
    protected $message  =   [
        'name.require' => '广告位名称必填',
        'name.max'     => '广告位名称最多不能超过30个字符',
        'name.unique'   => '广告位名称已存在'
    ];

}
?>
