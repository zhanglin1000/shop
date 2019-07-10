<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Categorybrand extends Validate
{
    //栏目关联品牌验证
    protected $rule =   [
        'category_id'  => 'require',
        'brands' => 'require'
    ];

    //栏目关联品牌验证中文
    protected $message  =   [
        'category_id.require' => '栏目关联品牌名称必填',
        'brands.require' => '栏目关联品牌ID必填'
    ];

}
?>
