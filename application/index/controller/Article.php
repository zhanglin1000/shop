<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/1
 * Time: 12:14
 */

namespace app\index\controller;

class Article extends Comment
{
    //文章列表显示
    public function index()
    {
        //获取普通分类
        $this->getCate();

        //获取帮助分类
        $this->getHelp();

        return view('article/index');
    }

    //普通分类获取
    public function getCate()
    {
        //实例化分类表
        $cate = db('cate');

        //查询条件
        $where = [
            ['cate_type','=',4],
            ['pid','=',0]
        ];

        //查询所有普通分类
        $cate_general = $cate->where($where)->select();

        //查询是否有二级分类
        foreach ( $cate_general as $k => $v )
        {
            $cate_general[$k]['subclass'] = db('cate')->where('pid','=',$v['id'])->select();
        }

        $this->assign([
            'cate_general' => $cate_general
        ]);
    }

    //帮助分类获取
    public function getHelp()
    {
        //实例化分类表
        $cate = db('cate');

        //查询条件
        $where = [
            ['cate_type','=',3],
            ['show_nav','=',1]
        ];

        //查询所有帮助分类
        $cate_help = $cate->where($where)->select();

        //分配数据到模板
        $this->assign([
            'cate_help' => $cate_help
        ]);

    }
}
?>
