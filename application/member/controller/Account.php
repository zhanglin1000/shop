<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/27
 * Time: 21:04
 */
namespace app\member\controller;

use think\Controller;

class Account extends Controller
{
    //登录模块
    public function login()
    {
        return view('account/login');
    }

    //注册模块
    public function reg()
    {
        return view('account/reg');
    }
}
?>
