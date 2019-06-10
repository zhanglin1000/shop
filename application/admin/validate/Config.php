<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/7
 * Time: 0:27
 */
namespace app\admin\validate;

use think\Validate;

class Config extends Validate
{
    //配置验证
    protected $rule =   [
        'cname'  => 'require|max:30|unique:config',
        'ename'   => 'require|unique:config'
    ];

    //配置验证中文
    protected $message  =   [
        'cname.require' => '配置中文名称必填',
        'cname.max'     => '配置中文名称最多不能超过30个字符',
        'cname.unique'   => '配置中文名称已存在',
        'ename.require'   => '配置英文名称必填',
        'ename.unique'   => '配置英文名称已存在',
    ];

    //验证场景
    protected $scene = [
        'add' => ['cname','ename'],
        'edit' => ['cname']
    ];
}
?>
