<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Word extends Validate
{
    //关键字验证
    protected $rule =   [
        'keyword'  => 'require|max:30|unique:category_word',
        'category_id' => 'require'
    ];

    //关键字验证中文
    protected $message  =   [
        'keyword.require' => '栏目关键字名称必填',
        'keyword.max'     => '栏目关键字名称最多不能超过30个字符',
        'keyword.unique'   => '栏目关键字名称已存在',
        'category_id.require' => '栏目必选'
    ];

}
?>
