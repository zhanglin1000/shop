<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/11
 * Time: 18:09
 */

namespace app\member\validate;

use think\Validate;

class User extends Validate
{
    protected $rule =   [
        'username'  => 'require|max:20|unique:user',
        'password'   => 'require|length:6',
        'confirm_password' => 'require|confirm:password',
        'email' => 'email',
        'send_code' => 'require',
    ];

    protected $message  =   [
        'username.require' => '用户名必须',
        'username.max'     => '用户名最多不能超过20个字符',
        'username.unique'     => '用户名重复',
        'password.require'   => '密码不得为空',
        'confirm_password.require'   => '确认密码不得为空',
        'confirm_password.confirm'   => '两次密码不一致',
        'password.length'  => '密码长度必须是6位',
        'email' => '邮箱格式错误',
        'send_code'  => '验证码错误',
    ];
}
?>
