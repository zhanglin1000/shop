<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/12
 * Time: 18:14
 */
namespace app\member\controller;


class User extends Comment
{
    //用户中心列表
    public function index()
    {
        return view('index');
    }

    //获取三级导航数据
    public function getCateInfo()
    {
        //获取顶级栏目ID
        $id = input('cate_id');


        //获取二三季栏目
        $cateTree = $this->getTwoS($id);

        //获取栏目关键词
        $wordRes = $this->getKeyword($id);

        //获取栏目关联品牌
        $categoryBrand = $this->getResBrand($id);


        $data = [];

        //商城首页三级栏目头部
        $topic_content = "<div class='cate_channel'>";
        foreach ( $wordRes as $k => $v )
        {
            if( $v['link_url'] )
            {
                $topic_content .= "<a  href=".$v['link_url']."  target='_blank'>".$v['keyword']."</a>";
            }
            else
            {
                $topic_content .= "<a  href='#'>".$v['keyword']."</a>";
            }

        }
        $topic_content .= " </div>";

        //商城首页三级栏目内容
        $cat_content = '';

        //循环二级栏目和三级栏目
        foreach ( $cateTree as $k => $v )
        {
            $cat_content .= " <div class='cate_detail'><dl class='dl_fore1'><dt><a href='".url('index/category/index',['id'=>$v['id']])."' target='_blank'>".$v['cate_name']."</a> </dt><dd>";
            foreach ( $v['three'] as $k1 => $v1 )
            {
                $cat_content .= "<a href='".url('index/category/index',['id'=>$v1['id']])."' target='_blank'>".$v1['cate_name']."</a>";
            }

            $cat_content .= "</dd></dl><div class='item-promotions'></div></div>";

        }

        //商城首页三级栏目右侧品牌和广告
        $brands_ad_content = "<div class='cate-brand'>";
        foreach ( $categoryBrand['brands'] as $k => $v )
        {

            $brands_ad_content .= "<div class='img'><a href='".$v['brand_url']."' target='_blank' title='".$v['brand_cname']."'><img src='".APP_PATH.'/public/static/uploads/brand/'.$v['brand_logo']."'></a></div>";
        }

        $brands_ad_content.= " </div>";

        if( $categoryBrand['extension']['pro_img'] )
        {
            $brands_ad_content .= "<div class='cate-promotion'>";
            $brands_ad_content .= "<a href='#' target='_blank'><img src='".APP_PATH.'/public/static/uploads/relation_img/'.$categoryBrand['extension']['pro_img']."' width='199' height='97'></a>";
            $brands_ad_content.="</div>";
        }

        $data['topic_content'] = $topic_content;
        $data['cat_content'] = $cat_content;
        $data['brands_ad_content'] = $brands_ad_content;


        return json($data);
    }
}
?>
