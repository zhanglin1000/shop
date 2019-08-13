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
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //实例化模型登录

            $login = model('User')->login($data);

            if( $login )
            {
                //跳转成功URL网址
               $url = url('index/Index/index');

               return json(['code'=>1,'url'=>$url]);
            }
            else
            {
                return json(['code'=>0,'msg'=>'用户名或密码错误']);
            }


            return;
        }
        return view('account/login');
    }

    //注册模块
    public function reg()
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //验证数据
            $validate = new \app\member\validate\User();

            if( !$validate->check($data) )
            {
                $this->error($validate->getError());
            }

            //验证验证码是否正确
            if( $data['send_code'] != session('code') )
            {
                $this->error('邮箱验证码错误');
            }
            else
            {
                session('code',null);
            }

            //组合表单数据
            $data['password'] = md5($data['password']);
            $data['creat_time'] = date('Y-m-d H:i:s');

            //写入注册数据
            $add = db('user')->field('confirm_password',true)->insert($data);

            if( $add )
            {
                $this->success('注册成功','login');
            }
            else
            {
                $this->error('注册失败');
            }

            return;
        }

        return view('account/reg');
    }


    //发送邮件验证码
    public function sendEmail()
    {
        //收件人的邮箱
        $toemail = input('email');

        //收件人的名称
        $name = '雪狐商城';

        $subject = '雪狐商城';

        //生成随机验证码
        $code = mt_rand(10000, 99999);

        //把随机生成的验证码存入session
        session("code", $code);

        //验证码内容
        $content = '你的验证码为' . $code;

        //验证码发送成功
        $is_status = send_mail($toemail, $name, $subject, $content);

        if ($is_status === true) {
            $data['status'] = 0;
            $data['msg'] = '邮箱发送成功';
            return json($data);
        } else {
            $data['status'] = 1;
            $data['msg'] = '邮箱发送失败';
            return json($data);
        }
    }

    //验证用户名是否存在
    public function check_user($username)
    {
        //根据用户名查询数据库是否存在
        $username = db('user')->where('username','=',$username)->count();

        //判断是否存在
        if( $username > 0 )
        {
             return json(['status'=>0,'msg'=>'用户名已存在']);
        }
        else
        {
            return json(['status'=>1,'msg'=>'用户名可以注册']);
        }
    }

    //验证邮箱是否存在
    public function check_email($email)
    {
        //根据用户名查询数据库是否存在
        $email = db('user')->where('email','=',$email)->count();

        //判断是否存在
        if( $email > 0 )
        {
            return json(['status'=>0,'msg'=>'邮箱已存在']);
        }
        else
        {
            return json(['status'=>1,'msg'=>'邮箱可以注册']);
        }
    }

    //验证邮箱验证码
    public function check_code($code)
    {
        if( $code == session('code') )
        {
            return json(['status'=>0,'msg'=>'验证码通过']);
        }
        else
        {
            return json(['status'=>1,'msg'=>'验证码错误']);
        }
    }


}

?>
