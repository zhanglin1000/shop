<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/1
 * Time: 16:50
 */

namespace app\index\controller;

use think\Controller;

class Comment extends Controller
{
      //自动加载
      protected function initialize()
      {
           //获取网站底部导航文章栏目
           $this->_getFooterArticle();

      }

      //获取底部导航栏目帮助栏目和文章
      private function getFooterArticle()
      {
          //查询条件
          $where = [
              ['cate_type','=',3],
              ['show_nav','=',1]
          ];

          //查询所有帮助类型
          $footer_article = db('cate')->where($where)->select();


          //遍历查询所属文章名称
          foreach ( $footer_article as $k => $v )
          {
              //通过栏目查找所属文章
              $footer_article[$k]['child'] = db('article')->field('id,title')->limit(3)->where('cate_id','=',$v['id'])->select();
          }

          return $footer_article;
      }

      //获取的文章栏目和文章分配到模板
      private function _getFooterArticle()
      {
          //得到返回的数据
          $footer_artrcle = $this->getFooterArticle();

          //返回数据到模板
          $this->assign([
              'footer_article' => $footer_artrcle
          ]);
      }

}
?>
