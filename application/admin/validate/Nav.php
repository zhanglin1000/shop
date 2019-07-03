<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/7
 * Time: 0:27
 */
namespace app\admin\validate;

use think\Validate;

class Nav extends Validate
{
    //导航验证
    protected $rule =   [
        'nav_name'  => 'require|unique:nav'
    ];

    //导航验证中文
    protected $message  =   [
        'nav_name.require' => '导航中文名称必填',
        'nav_name.unique'   => '导航中文名称已存在'
    ];

    //验证场景
    protected $scene = [
        'add' => ['nav_name'],
        'edit' => ['nav_name']
    ];
}
?>
