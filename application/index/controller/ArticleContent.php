<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/2
 * Time: 9:00
 */

namespace app\index\controller;

use catetree\Catetree;

class ArticleContent extends Comment
{
    //文章详情
    public function index($id)
    {
        //获取普通分类
        $this->getCate();

        //获取帮助分类
        $this->getHelp();

        //获取文章
        $this->getArticle($id);

        //获取父级栏目
        $this->father();

        return view('articleContent/index');
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

    //获取文章详情
    public function getArticle($id)
    {
        //通过ID查询指定文章
        $article_content = db('article')->where('id','=',$id)->find();

        //实现文章上一篇
        $where_prev = [
            ['id','>',$id],
            ['cate_id','=',input('pid')]
        ];
        $prev = db('article')->where($where_prev)->limit(1)->order('id ASC')->find();


        //实现文章下一篇
        $where_next = [
            ['id','<',$id],
            ['cate_id','=',input('pid')]
        ];
        $next = db('article')->where($where_next)->limit(1)->order('id DESC')->find();

        //分配数据到模板
        $this->assign([
            'article_content' => $article_content,
            'prev' => $prev,
            'next' => $next
        ]);
    }

    public function father()
    {
        //引入无限分类
        $catetree = new Catetree();

        //查询所有的栏目表
        $cate = db('cate')->select();

        //获取子类id
        $pid = input('pid');

        //获取当前文章名称ID
        $id = input('id');

        //获取栏目名称
        $cate_name = $catetree->fatherId($cate,$pid);

        //获取完毕后，实现升续排序
        sort($cate_name);

        //把自身加入其中
        $cate_name[] = db('article')->field(['title'=>'cate_name','id'])->where('id','=',$id)->find();


        //分配数据到模板
        $this->assign([
            'cate_name' => $cate_name
        ]);

    }




}
?>
