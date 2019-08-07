<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/27
 * Time: 21:04
 */
namespace app\member\controller;

use PHPMailer\PHPMailer;

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


    //发送邮件验证码
    public function sendEmail()
    {
        //收件人的邮箱
        $toemail=input('email');

        //收件人的名称
        $name='雪狐商城';

        $subject='雪狐商城';

        //生成随机验证码
        $code = mt_rand(10000, 99999);

        //把随机生成的验证码存入session
        session("code",$code);

        //验证码内容
        $content='你的验证码为'.$code;

        //验证码发送成功
        $is_status = send_mail($toemail,$name,$subject,$content);

        if( $is_status === true )
        {
            $data['status']= 0;
            $data['msg'] = '邮箱发送成功';
            return json($data);
        }

        else
        {
            $data['status']= 1;
            $data['msg'] = '邮箱发送失败';
            return json($data);
        }
    }






}
?>
