<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Attr extends Validate
{
    //商品属性验证
    protected $rule =   [
        'attr_name'  => 'require|max:30|unique:attr'
    ];

    //商品属性验证中文
    protected $message  =   [
        'attr_name.require' => '商品属性名称必填',
        'attr_name.max'     => '商品属性名称最多不能超过30个字符',
        'attr_name.unique'   => '商品属性名称已存在'
    ];

}
?>
