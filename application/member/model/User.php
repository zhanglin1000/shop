<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/13
 * Time: 19:19
 */
namespace app\member\model;

use think\Model;

class User extends Model
{
     //登录方法
     public function login($data)
     {
         //判断用户名是否存在
         $userData = [];
         $userData['username'] = $data['username'];
         $where[] = ['username','=',$userData['username']];
         $where[] = ['email','=',$userData['username']];

         $users = db('user')->whereOr($where)->find();

         if( $users )
         {
             //验证密码是否正确
             if( $users['password'] == md5($data['password']) )
             {
                 session('uid',$users['id']);
                 session('username',$users['username']);
                 return true;
             }
             else
             {
                 return false;
             }
         }
         else
         {
             return false;
         }

     }

     //退出方法
     public function logout()
     {
         session(null);
     }
}
?>
