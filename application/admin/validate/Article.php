<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/14
 * Time: 23:05
 */
namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
    //文章验证
    protected $rule =   [
        'title'  => 'require|max:30|unique:article',
        'cate_id'   => 'require'
    ];

    //文章验证中文
    protected $message  =   [
        'title.require' => '文章标题必填',
        'title.max'     => '文章标题最多不能超过30个字符',
        'title.unique'   => '文章标题已存在',
        'cate_id.require'   => '文章分类不得为空'
    ];
}
?>
