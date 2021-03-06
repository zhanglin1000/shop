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
      //公共配置
      public $configs;

      //自动加载
      protected function initialize()
      {
           //获取网站底部导航文章栏目
           $this->_getFooterArticle();

           //获取网站头部导航
           $this->getNav();

           //获取配置
           $this->getConfig();

           //获取导航分类
           $this->getNavs();

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

      //获取商城头部导航
      private function getNav()
      {
          //查询所有导航列表
          $navList = db('nav')->select();

          //组合先要格式
          $_nav = [];

          //循环所有数据
          foreach ( $navList as $k => $v )
          {
              $_nav[$v['pos']][] = $v;
          }

          //分配数据到模板
          $this->assign([
              'nav' => $_nav
          ]);

      }

      //获取配置信息
      private function getConfig()
      {
          //查询所有的配置
          $configList = db('config')->field('ename,value')->select();

          //组合成想要的数组
          $_config = [];

          //循环原始数据组合新数据
          foreach ( $configList as $k => $v )
          {
              $_config[$v['ename']]= $v['value'];
          }

          //赋值给公共配置
          $this->configs = $_config;

          //分配到模板
          $this->assign([
              'config' => $_config
          ]);


      }

      //获取导航顶级和二级到三级分类
      private function getNavs()
      {
          //查询条件
          $where = [
              'pid' => 0,
              'show_nav' => 1
          ];

          //获取所有顶级分类
          $categoryTop = db('category')->where($where)->select();

          //通过顶级分类获取二级分类
          foreach ( $categoryTop as $k => $v )
          {
              $categoryTop[$k]['two'] = db('category')->limit(2)->where('pid','=',$v['id'])->where('show_nav','=',1)->select();
          }

          //分配数据到模板
          $this->assign([
              'categoryTop' => $categoryTop
          ]);
      }

      //通过二级分类获取三级分类
      public function getTwoS($id)
      {

           //通过顶级分类获取二级分类
           $cateTwo = db('category')->where('pid','=',$id)->select();

           //通过循环二级分类查找三级分类
           foreach ( $cateTwo as  $k => $v )
           {
               $cateTwo[$k]['three'] = db('category')->where('pid','=',$v['id'])->select();
           }

           return $cateTwo;
      }

      //获取商城首页栏目关键词
      public function getKeyword($id)
      {
          //通过顶级栏目ID查询对应的关键词
          $wordsRes = db('category_word')->where('category_id','=',$id)->select();

          return $wordsRes;
      }

      //获取商城首页栏目关联品牌和广告
      public function getResBrand($id)
      {
          //定义一个数组
          $data = [];

         //查询关联的品牌和广告
         $resBrand = db('category_brand')->where('category_id','=',$id)->find();

         //品牌ID打散成数组
         $brand_id = explode(',',$resBrand['brands']);

         //查询所有对应的品牌
         $brands = db('brand')->field('brand_cname,brand_url,brand_logo')->where('id','in',$brand_id)->select();

         //推广信息
         $data['extension'] = $resBrand;

         //品牌信息
         $data['brands'] = $brands;

         return $data;

      }

      //获取所有热卖商品
      public function getRecHosGoods($rec_id,$limt)
      {
         //查询所有热卖商品
         $where = [
             ['rec_id' ,'=', $rec_id],
             ['value_type' ,'=', 1]
         ];

         //从推荐表查询热卖商品
         $recPos = db('goods_rec')->where($where)->select();

         //循环所有热卖商品
         $_recPos = [];

         foreach ( $recPos as $k => $v )
         {
             $_recPos[] = $v['goods_id'];
         }

         //查询所有热卖商品
         $hotGoods = db('goods')->where('id','IN',$_recPos)->limit($limt)->select();

         return $hotGoods;
      }




}
?>
