<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    //文章分类栏目验证
    protected $rule =   [
        'cate_name'  => 'require|max:30|unique:cate'
    ];

    //文章分类栏目验证中文
    protected $message  =   [
        'cate_name.require' => '文章分类栏目名称必填',
        'cate_name.max'     => '文章分类栏目名称最多不能超过30个字符',
        'cate_name.unique'   => '文章分类栏目名称已存在'
    ];

}
?>
