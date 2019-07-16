<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/16
 * Time: 17:26
 */
namespace app\admin\controller;

use think\Controller;

use think\facade\Cache;

class Base extends Controller
{
    //构造方法
    public function __construct()
    {
        parent::__construct();
    }

    //清空缓存
    public function clearCache()
    {
        Cache::clear();
        $this->success('清空缓存成功');
    }
}
?>
