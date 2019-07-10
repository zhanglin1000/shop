<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/1
 * Time: 11:59
 */

namespace app\index\controller;

class Category extends Comment

{

    //栏目首页
    public function index()
    {
        return view('category/index');
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
        $brands_ad_content = "<div class='cate-brand'>
                                <div class='img'>
                                    <a href='#' target='_blank' title='同庆和堂'>
                                      <img src='https://x.dscmall.cn/storage/data/brandlogo/1490072850306019115.jpg'>
                                    </a>
                                 </div>
                               </div>
                               <div class='cate-promotion'>
                                  <a href='#' target='_blank'>
                                        <img src='https://x.dscmall.cn/storage/data/afficheimg/1490847672639256000.jpg' width='199' height='97'>
                                   </a>
                               </div>";


        $data['topic_content'] = $topic_content;
        $data['cat_content'] = $cat_content;
        $data['brands_ad_content'] = $brands_ad_content;


        return json($data);
    }

}
?>
