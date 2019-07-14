<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/1
 * Time: 12:18
 */

namespace app\index\controller;

class Goodslist extends Comment
{
    //商品详细列表
    public function index()
    {
        return view('goodslist/index');
    }
}
?>
