<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class Recommend extends Validate
{
    //商品类型验证
    protected $rule =   [
        'rec_name'  => 'require|max:30|unique:rec_pos'
    ];

    //商品类型验证中文
    protected $message  =   [
        'rec_name.require' => '推荐位名称必填',
        'rec_name.max'     => '推荐位名称最多不能超过30个字符',
        'rec_name.unique'   => '推荐位名称已存在'
    ];

}
?>
