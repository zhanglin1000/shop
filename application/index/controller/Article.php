<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/1
 * Time: 12:14
 */

namespace app\index\controller;

use catetree\Catetree;

class Article extends Comment
{
    //文章列表显示
    public function index($id)
    {
        //获取普通分类
        $this->getCate();

        //获取帮助分类
        $this->getHelp();

        //获取文章列表
        $this->getArticleList($id);

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

    //获取分类文章
    public function getArticleList($id)
    {
        //实例化栏目表
        $cate = db('cate');

        //引入无限极分类
        $catetree = new Catetree();

        //查询出指定栏目子栏目ID
        $subclass = $catetree->childId($cate->select(),$id);

        //把自身加入其中
        $subclass[] = $id;

        //查询条件
        $where = [
            ['cate_id','IN',$subclass]
        ];

        //查询当前子栏目下所有文章
        $article_list = db('article')->where($where)->select();

        //获取当前子栏目下顶级栏目
        $cate_name = $cate->field('cate_name')->find($id);

        //查询的文章分配到模板
        $this->assign([
            'article_list' => $article_list,
            'cate_name' => $cate_name
        ]);


    }

}
?>
