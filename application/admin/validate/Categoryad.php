<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Categoryad extends Validate
{
    //关联图片验证
    protected $rule =   [
        'category_position'  => 'require',
        'category_id'  => 'require'
    ];

    //关联图片验证中文
    protected $message  =   [
        'category_position.require' => '关联图片位置必选',
        'category_id.require' => '关联图片栏目必选'
    ];

}
?>
