<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Type extends Validate
{
    //商品类型验证
    protected $rule =   [
        'type_name'  => 'require|max:30|unique:type'
    ];

    //商品类型验证中文
    protected $message  =   [
        'type_name.require' => '商品类型名称必填',
        'type_name.max'     => '商品类型名称最多不能超过30个字符',
        'type_name.unique'   => '商品类型名称已存在'
    ];

}
?>
