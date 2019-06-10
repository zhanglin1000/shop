<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/7
 * Time: 0:27
 */
namespace app\admin\validate;

use think\Validate;

class Brand extends Validate
{
    //商品品牌验证
    protected $rule =   [
        'brand_cname'  => 'require|max:30|unique:brand',
        'brand_logo'   => 'require'
    ];

    //商品品牌验证中文
    protected $message  =   [
        'brand_cname.require' => '商品品牌中文名称必填',
        'brand_cname.max'     => '商品品牌中文名称最多不能超过30个字符',
        'brand_cname.unique'   => '商品品牌中文名称已存在',
        'brand_logo.require'   => '商品品牌LOGO必填'
    ];

    //验证场景
    protected $scene = [
        'add' => ['brand_cname','brand_logo'],
        'edit' => ['brand_cname']
    ];
}
?>
