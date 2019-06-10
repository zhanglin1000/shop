<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/10
 * Time: 22:17
 */
namespace app\admin\validate;

use think\Validate;

class MemberLevel extends Validate
{
    //商品类型验证
    protected $rule =   [
        'level_name'  => 'require|max:30|unique:member_level',
        'bom_point'  => 'require|number',
        'top_point'  => 'require|number'
    ];

    //商品类型验证中文
    protected $message  =   [
        'level_name.require' => '会员等级名称必填',
        'bom_point.require' => '会员积分下线名称必填',
        'bom_point.number' => '会员积分下线名必须是数字',
        'top_point.require' => '会员积分上线名称必填',
        'top_point.number' => '会员积分上线名必须是数字',
        'level_name.max'     => '会员等级名称最多不能超过30个字符',
        'level_name.unique'   => '会员等级名称已存在'
    ];

}
?>
