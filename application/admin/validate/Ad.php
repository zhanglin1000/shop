<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Ad extends Validate
{
    //广告类型验证
    protected $rule =   [
        'ad_name'  => 'require|max:30|unique:ad'
    ];

    //广告类型验证中文
    protected $message  =   [
        'ad_name.require' => '广告名称必填',
        'ad_name.max'     => '广告名称最多不能超过30个字符',
        'ad_name.unique'   => '广告名称已存在'
    ];

}
?>
