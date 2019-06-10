<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Goods extends Validate
{
    //商品验证
    protected $rule =   [
        'goods_name'  => 'require|max:80|unique:goods',
        'category_id' => 'require'
    ];

    //商品验证中文
    protected $message  =   [
        'goods_name.require' => '商品名称必填',
        'goods_name.max'     => '商品名称最多不能超过80个字符',
        'goods_name.unique'   => '商品名称已存在',
        'category_id.require' => '商品分类必须选择'
    ];

}
?>
