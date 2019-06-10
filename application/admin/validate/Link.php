<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/7
 * Time: 0:27
 */
namespace app\admin\validate;

use think\Validate;

class Link extends Validate
{
    //友情链接验证
    protected $rule =   [
        'link_name'  => 'require|unique:link'
    ];

    //友情链接验证中文
    protected $message  =   [
        'link_name.require' => '友情链接中文名称必填',
        'brand_cname.unique'   => '友情链接中文名称已存在'
    ];

    //验证场景
    protected $scene = [
        'add' => ['link_name'],
        'edit' => ['link_name']
    ];
}
?>
