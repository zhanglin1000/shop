<?php /*a:3:{s:58:"D:\phpEnv\www\shop\application\index\view\index\index.html";i:1563184054;s:66:"D:\phpEnv\www\shop\application\index\view\public\index_header.html";i:1562233499;s:60:"D:\phpEnv\www\shop\application\index\view\public\footer.html";i:1562133584;}*/ ?>
﻿<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="Keywords" content="雪狐商城"/>
    <meta name="Description" content="雪狐商城"/>
    <title><?php echo htmlentities($config['name']); ?></title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/purebox.css"/>
    <link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/quickLinks.css"/>
    <script type="text/javascript" src="http://shop.com/public/static/index/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://shop.com/public/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="http://shop.com/public/static/index/js/index.js"></script>
</head>
<body class="home_visual_body">


<!-----商品首页头部------->
<!---商城顶部导航--->
<div class="site-nav" img="http://shop.com/public/static/index/images" id="site-nav">
    <div class="w w1200">

        <!----顶部登录----->
        <div class="fl">
            <div class="txt-info" id="ECS_MEMBERZONE">
                <a href="#" class="link-login red">请登录</a>
                <a href="#" class="link-regist">免费注册</a>
            </div>
        </div>
        <!---END------>

        <!------顶部右侧菜单------>
        <ul class="quick-menu fr">
            <li>
                <div class="dt"><a href="#">我的订单</a></div>
            </li>
            <li class="spacer"></li>
            <li>
                <div class="dt"><a href="#">我的浏览</a></div>
            </li>
            <li class="spacer"></li>
            <li>
                <div class="dt"><a href="#">我的收藏</a></div>
            </li>
        </ul>
        <!-----END------->
    </div>
</div>
<!----END---->


<!----商城头部header------>
<div class="header">
    <div class="w w1200">

        <!----网站LOGO---->
        <div class="logo">
            <div class="logoImg">
                <a href="index.php">
                    <img src="http://shop.com/public/static/index/images/logo.png"/>
                </a>
            </div>
        </div>
        <!-----END-------->

        <!-----网站搜索------>
        <div class="dsc-search">
            <div class="form">

                <!---网站搜索提交表单----->
                <form id="searchForm" name="searchForm" method="get" action="#" class="search-form">
                    <input autocomplete="off" name="keywords" type="text" id="keyword" value="周大福" class="search-text"/>
                    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>
                </form>
                <!----END------>

                <!----关键词搜索----->
                <ul class="keyword">
                    <?php
                     $keywords = explode(',',$config['keyword']);
                     foreach( $keywords as $k => $v ):
                    ?>
                    <li><a href="" target="_blank"><?php echo htmlentities($v); ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <!----END----->

            </div>
        </div>
        <!----END------>

        <!----购物车显示数量----->
        <div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO" data-carteveval="0">
            <div class="shopCart-con dsc-cm">
                <a href="#">
                    <i class="iconfont icon-carts"></i>
                    <span>我的购物车</span>
                    <em class="count cart_num">0</em>
                </a>
            </div>
        </div>
        <!-----END---->

    </div>
    <!----END----->

</div>
<!---END---->


<!---商品分类------>
<div class="nav" ectype="dscNav">
    <div class="w w1200">

        <div class="categorys ">

            <div class="categorys-type">
                <a href="#" target="_blank">全部商品分类</a>
            </div>

            <div class="categorys-tab-content">
                <div class="categorys-items" id="cata-nav">

                        <?php if(is_array($categoryTop) || $categoryTop instanceof \think\Collection || $categoryTop instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryTop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$categoryTop): $mod = ($i % 2 );++$i;?>
                            <div class="categorys-item" ectype="cateItem" data-id="<?php echo htmlentities($categoryTop['id']); ?>"  data-eveval="0">
                            <div class="item item-content">
                                <i class="iconfont <?php echo htmlentities($categoryTop['cate_img']); ?>"></i>
                                <div class="categorys-title">
                                    <strong>
                                        <a href="<?php echo url('index/category/index',['id'=>$categoryTop['id']]); ?>"   target="_blank"><?php echo htmlentities($categoryTop['cate_name']); ?></a>
                                    </strong>

                                    <span>
                                               <?php if(is_array($categoryTop['two']) || $categoryTop['two'] instanceof \think\Collection || $categoryTop['two'] instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryTop['two'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$categoryTop2): $mod = ($i % 2 );++$i;?>
                                                <a href="<?php echo url('index/category/index',['id'=>$categoryTop2['id']]); ?>" target="_blank"><?php echo htmlentities($categoryTop2['cate_name']); ?></a>
                                               <?php endforeach; endif; else: echo "" ;endif; ?>

                                    </span>
                                </div>
                            </div>

                                <div class="categorys-items-layer" ectype="cateLayer">
                                    <div class="cate-layer-con clearfix" ectype="cateLayerCon_<?php echo htmlentities($categoryTop['id']); ?>">
                                        <div class="cate-layer-left">
                                            <div class="cate_channel" ectype="channels_<?php echo htmlentities($categoryTop['id']); ?>"></div>
                                            <div class="cate_detail" ectype="subitems_<?php echo htmlentities($categoryTop['id']); ?>"></div>
                                        </div>
                                        <div class="cate-layer-rihgt" ectype="brands_<?php echo htmlentities($categoryTop['id']); ?>"></div>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

            </div>

        </div>

        <!----商城导航菜单------->
        <div class="nav-main" id="nav">
            <ul class="navitems">
                <li><a href="<?php echo url('index/index'); ?>" class="curr">首页</a></li>
                <?php if(is_array($nav["mid"]) || $nav["mid"] instanceof \think\Collection || $nav["mid"] instanceof \think\Paginator): $i = 0; $__LIST__ = $nav["mid"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                <li><a <?php if($nav['open'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo htmlentities($nav['nav_url']); ?>"><?php echo htmlentities($nav['nav_name']); ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <!----END------>

    </div>
</div>
<!----END----->

<script type="text/javascript">
    var url = "<?php echo url('category/getCateInfo'); ?>";
    var img = $('#site-nav').attr('img');
</script>
<!----END------->


<!-----商城首页轮播图------->
<div class="homeindex" ectype="homeWrap">

    <div class="content" style="min-height: 974px;">

        <!-------轮播图和登录模块------->
        <div class="visual-item" data-mode="lunbo" data-purebox="banner" data-li="1" data-length="5" ectype="visualItme" style="display: block;" data-diff="0">

            <div class="view">

                <div class="banner home-banner">

                    <!-----轮播图=-------->
                    <div class="bd">
                        <ul data-type="range">
                            <li style="background:url(http://shop.com/public/static/index/images/1494984992503176615.jpg) center center no-repeat;">
                                <div class="banner-width"><a href="" style="height:500px;"></a></div>
                            </li>
                            <li style="background:url(http://shop.com/public/static/index/images/1494984990506843460.jpg) center center no-repeat;">
                                <div class="banner-width"><a href="" style="height:500px;"></a></div>
                            </li>
                            <li style="background:url(http://shop.com/public/static/index/images/1494984991783527346.jpg) center center no-repeat;">
                                <div class="banner-width"><a href="" style="height:500px;"></a></div>
                            </li>
                        </ul>
                        <div class="spec" data-spec=""></div>
                    </div>
                    <div class="hd">
                        <ul></ul>
                    </div>
                    <!------END---------->

                    <!-----轮播图右侧登录-------->
                    <div class="vip-outcon">
                        <div class="vip-con">
                            <div class="insertVipEdit" data-mode="insertVipEdit">
                                <div ectype="user_info">
                                    <!-----商城登录图片----->
                                    <div class="avatar">
                                        <a href="#"><img src="http://shop.com/public/static/index/images/avatar.png"></a>
                                    </div>
                                    <!----END------>

                                    <!-----商城登录----->
                                    <div class="login-info">
                                        <span>Hi，欢迎来到雪狐网!</span>
                                        <a href="#" class="login-button">请登录</a>
                                        <a href="#" target="_blank" class="register_button">我要注册</a>
                                    </div>
                                    <!----END----->

                                    <!-----商城公告----->
                                    <div class="vip-item">
                                        <div class="tit">
                                            <a href="javascript:void(0);" class="tab_head_item on">公告</a>
                                            <a href="javascript:void(0);" class="tab_head_item">促销</a>
                                        </div>
                                        <div class="con">
                                            <ul>
                                                <?php if(is_array($notice) || $notice instanceof \think\Collection || $notice instanceof \think\Paginator): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$notice): $mod = ($i % 2 );++$i;?>
                                                <li><a href="<?php echo url('index/ArticleContent/index',['id'=>$notice['id'],'pid'=>$notice['cate_id']]); ?>" target="_blank"><?php echo htmlentities($notice['title']); ?></a></li>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                            <ul style="display: none;">
                                                <?php if(is_array($promotion) || $promotion instanceof \think\Collection || $promotion instanceof \think\Paginator): $i = 0; $__LIST__ = $promotion;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$promotion): $mod = ($i % 2 );++$i;?>
                                                <li><a href="<?php echo url('index/ArticleContent/index',['id'=>$promotion['id'],'pid'=>$promotion['cate_id']]); ?>" target="_blank"><?php echo htmlentities($promotion['title']); ?></a></li>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <!----END------>

                                    <!-----商城快捷入口----->
                                    <div class="vip-item">
                                        <div class="tit">快捷入口</div>
                                        <div class="kj_con">
                                            <div class="item item_1">
                                                <a href="#" target="_blank">
                                                    <i class="iconfont icon-browse"></i>
                                                    <span>我的浏览</span>
                                                </a>
                                            </div>
                                            <div class="item item_2">
                                                <a href="#" target="_blank">
                                                    <i class="iconfont icon-zan-alt"></i>
                                                    <span>我的收藏</span>
                                                </a>
                                            </div>
                                            <div class="item item_3">
                                                <a href="#" target="_blank">
                                                    <i class="iconfont icon-order"></i>
                                                    <span>我的订单</span>
                                                </a>
                                            </div>
                                            <div class="item item_4">
                                                <a href="#" target="_blank">
                                                    <i class="iconfont icon-password-alt"></i>
                                                    <span>账号安全</span>
                                                </a>
                                            </div>
                                            <div class="item item_5">
                                                <a href="#" target="_blank">
                                                    <i class="iconfont icon-share-alt"></i>
                                                    <span>我要分享</span>
                                                </a>
                                            </div>
                                            <div class="item item_6">
                                                <a href="#" target="_blank">
                                                    <i class="iconfont icon-settled"></i>
                                                    <span>商家入驻</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-----END------->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----END------->
                </div>

            </div>

        </div>
        <!-------END---------->

        <!------首页秒杀------->
        <div class="visual-item w1200" ectype="channel">
            <div class="seckill-channel" id="h-seckill">
                <div class="box-hd clearfix">

                    <i class="box_hd_arrow"></i>
                    <i class="box_hd_dec"></i>
                    <i class="box-hd-icon"></i>

                    <div class="sk-time-cd">
                        <div class="sk-cd-tit">距结束</div>
                        <div class="cd-time fl" ectype="time" data-time="2018-01-22 22:00:00">
                            <div class="days hide">00</div>
                            <span class="split hide">天</span>
                            <div class="hours">05</div>
                            <span class="split">时</span>
                            <div class="minutes">57</div>
                            <span class="split">分</span>
                            <div class="seconds">46</div>
                            <span class="split">秒</span>
                        </div>
                    </div>

                    <div class="sk-more">
                        <a href="#" target="_blank">更多秒杀</a>
                        <i class="arrow"></i>
                    </div>

                </div>
            </div>
        </div>
        <!-------END---------->

        <!------首页新品------->
        <div class="visual-item w1200" data-mode="h-need" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
            <div class="view">
                <div class="need-channel clearfix" id="h-need_0" data-type="range" data-lift="推荐">
                    <div class="channel-column" style="background:url(http://shop.com/public/static/index/images/1494984987302153402.jpg) no-repeat;">
                        <div class="column-title">
                            <h3 style="color: #ffffff">优质新品</h3>
                            <p style="color: #ffffff">专注生活美学</p>
                        </div>
                        <div class="column-img"><img src="http://shop.com/public/static/index/images/1494985002375136884.png"></div>
                        <a href="" target="_blank" class="column-btn">去看看</a>
                    </div>
                    <div class="channel-column" style="background:url(http://shop.com/public/static/index/images/1494984987302153402.jpg) no-repeat;">
                        <div class="column-title">
                            <h3 style="color: #ffffff">优质新品</h3>
                            <p style="color: #ffffff">专注生活美学</p>
                        </div>
                        <div class="column-img"><img src="http://shop.com/public/static/index/images/1494985002375136884.png"></div>
                        <a href="" target="_blank" class="column-btn">去看看</a>
                    </div>
                    <div class="channel-column" style="background:url(http://shop.com/public/static/index/images/1494984987302153402.jpg) no-repeat;">
                        <div class="column-title">
                            <h3 style="color: #ffffff">优质新品</h3>
                            <p style="color: #ffffff">专注生活美学</p>
                        </div>
                        <div class="column-img"><img src="http://shop.com/public/static/index/images/1494985002375136884.png"></div>
                        <a href="" target="_blank" class="column-btn">去看看</a>
                    </div>
                    <div class="channel-column" style="background:url(http://shop.com/public/static/index/images/1494984987302153402.jpg) no-repeat;">
                        <div class="column-title">
                            <h3 style="color: #ffffff">优质新品</h3>
                            <p style="color: #ffffff">专注生活美学</p>
                        </div>
                        <div class="column-img"><img src="http://shop.com/public/static/index/images/1494985002375136884.png"></div>
                        <a href="" target="_blank" class="column-btn">去看看</a>
                    </div>
                    <div class="channel-column" style="background:url(http://shop.com/public/static/index/images/1494984987302153402.jpg) no-repeat;">
                        <div class="column-title">
                            <h3 style="color: #ffffff">优质新品</h3>
                            <p style="color: #ffffff">专注生活美学</p>
                        </div>
                        <div class="column-img"><img src="http://shop.com/public/static/index/images/1494985002375136884.png"></div>
                        <a href="" target="_blank" class="column-btn">去看看</a>
                    </div>
                </div>
            </div>
        </div>
        <!----END----->

        <!------首页品牌------->
        <div class="visual-item w1200 brandList" data-mode="h-brand" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
            <div class="view">
                <div class="brand-channel clearfix" id="h-brand_0" data-type="range" data-lift="品牌">
                    <!----左侧广告-------->
                    <div class="home-brand-adv slide_lr_info">
                        <a href="" target="_blank"><img src="http://shop.com/public/static/index/images/1494984992104112514.jpg" class="slide_lr_img"></a>
                    </div>
                    <!-----END------>

                    <!------品牌-------->
                    <div ectype="homeBrand">
                        <!---<div class="brand-list" id="recommend_brands">
                            <ul>
                                <li>
                                    <div class="brand-img"><a href="#" target="_blank">
                                        <img src="http://shop.com/public/static/index/images/1490039286075654490.jpg"></a>
                                    </div>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn">
                                <i class="iconfont icon-rotate-alt"></i>
                                <span>换一批</span>
                            </a>
                        </div>-->
                        <a style="display: none;" href="javascript:void(0);" ectype="changeBrand" id="refresh-btn" class="refresh-btn">
                            <i class="iconfont icon-rotate-alt"></i>
                            <span>换一批</span>
                        </a>

                    </div>
                    <!-----END------->
                </div>
            </div>
        </div>
        <!-----END------->

        <!--------男女装模块----------->
        <?php foreach( $recPos as $k => $v ): ?>
        <div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
            <div class="view">
                <div class="floor-content" data-type="range" id="homeFloor_0" data-lift="女装">
                    <div class="floor-line-con floorOne floor-color-type-<?php echo $k+1; ?>" data-title="<?php echo $v['cate_name']; ?>" data-idx="1" id="floor_1" ectype="floorItem">

                        <!-------男女装导航---------->
                        <div class="floor-hd" ectype="floorTit">
                            <i class="box_hd_arrow"></i>
                            <i class="box_hd_dec"></i>
                            <div class="hd-tit"><?php echo $v['cate_name']; ?></div>
                            <div class="hd-tags">
                                <ul>
                                    <li class="first current">
                                        <span>新品推荐</span>
                                        <i class="arrowImg"></i>
                                    </li>

                                    <?php foreach($v['subclass'] as $k1 => $v1): ?>
                                    <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="347">
                                        <span><?php echo $v1['cate_name'] ?></span>
                                        <i class="arrowImg"></i>
                                    </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                        <!------END------------>

                        <!-------男女装列表---------->
                        <div class="floor-bd bd-mode-01">
                            <div class="bd-left">
                                <div class="floor-left-slide">
                                    <div class="bd">
                                        <ul>
                                            <?php if($v['categoryAd']): foreach( $v['categoryAd']['A'] as $k1 => $v1 ): ?>
                                            <li><a href="<?php echo $v1['category_link'] ?>"><img src="<?php echo APP_PATH; ?>/public/static/uploads/ad/<?php echo $v1['category_img']; ?>"></a></li>
                                            <?php endforeach; endif; ?>
                                        </ul>
                                    </div>
                                    <div class="hd">
                                        <ul></ul>
                                    </div>
                                </div>

                                <div class="floor-left-adv">
                                    <?php if( isset($v['categoryAd']['B']) ): ?>
                                    <a href="<?php echo $v['categoryAd']['B'][0]['category_link'];?>" target="_blank"><img src="<?php echo APP_PATH; ?>/public/static/uploads/ad/<?php echo $v['categoryAd']['B'][0]['category_img']; ?>"></a>
                                    <?php endif; if( isset($v['categoryAd']['C']) ): ?>
                                    <a href="<?php echo $v['categoryAd']['C'][0]['category_link']; ?>" target="_blank"><img src="<?php echo APP_PATH; ?>/public/static/uploads/ad/<?php echo $v['categoryAd']['C'][0]['category_img']; ?>"></a>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <div class="bd-right">
                                <div class="floor-tabs-content clearfix">
                                    <div class="f-r-main f-r-m-adv" style="display: block;">
                                            <ul class="p-list">
                                                <?php foreach( $v['newRecGoods'] as $k1 => $v1 ): ?>
                                                <li class="opacity_img">
                                                    <div class="product">
                                                        <div class="p-img"><a href="<?php echo url('index/category/index',['id'=>$v1['id']]); ?>" target="_blank"><img src="<?php echo APP_PATH.'/public/static/uploads/goods/'.$v1['og_thumb'] ?>" width="140" height="140"></a></div>
                                                        <div class="p-name"><a href="<?php echo url('index/category/index',['id'=>$v1['id']]); ?>" title="<?php echo $v1['goods_name'] ?>"><?php echo $v1['goods_name'] ?></a></div>
                                                        <div class="p-price"><span class="shop-price">¥<?php echo $v1['market_price'] ?> </span>
                                                            <span class="original-price"><?php echo $v1['shop_price'] ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                    </div>
                                    <?php foreach( $v['subclass'] as $k1 => $v1 ): ?>
                                    <div class="f-r-main" id="floor_cat_<?php echo $v1['id'] ?>" style="display: none;">
                                        <ul class="p-list">
                                            <?php foreach( $v1['baseGoods'] as $k2 => $v2 ): ?>
                                            <li class="opacity_img">
                                                <div class="product">
                                                    <div class="p-img"><a href="<?php echo url('index/category/index',['id'=>$v2['id']]); ?>" target="_blank"><img src="<?php echo APP_PATH.'/public/static/uploads/goods/'.$v2['og_thumb'] ?>" width="140" height="140"></a></div>
                                                    <div class="p-name"><a href="<?php echo url('index/category/index',['id'=>$v2['id']]); ?>" title=""><?php echo $v2['goods_name'] ?></a></div>
                                                    <div class="p-price">
                                                        <span class="shop-price">¥<?php echo $v2['shop_price']; ?></span>
                                                        <span class="original-price"><?php echo $v2['market_price']; ?></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <!------END------------>

                        <!-------男女装品牌列表---------->
                        <div class="floor-fd">
                            <div class="floor-fd-brand clearfix">
                                <?php foreach( $v['brands']['brands'] as $k1 => $v1 ): ?>
                                <div class="item">
                                    <a href="<?php echo $v1['brand_url'] ?>" target="_blank">
                                        <div class="link-l"></div>
                                        <div class="img"><img src="<?php echo APP_PATH.'/public/static/uploads/brand/'.$v1['brand_logo'] ?>" title="ELLE HOME">
                                        </div>
                                        <div class="link"></div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!------END----------->

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!-------END------------>

        <!------商城达人---------->
        <div class="visual-item w1200" data-mode="h-master" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
            <div class="view">
                <div class="master-channel" id="h-master_0" data-type="range" data-lift="达人">
                    <div class="ftit"><h3>达人</h3></div>
                    <div class="master-con">
                        <div class="m-c-item m-c-i-1" style="background:url(http://shop.com/public/static/index/images/1494985006295599886.jpg) center center no-repeat;">
                            <div class="m-c-main">
                                <div class="title">
                                    <h3>纯棉质品</h3>
                                    <span>把好货带回家</span>
                                </div>
                                <a href="" class="m-c-btn" target="_blank">去见识</a>
                            </div>
                            <div class="img">
                                <a href="" target="_blank">
                                    <img src="http://shop.com/public/static/index/images/1494985002918483191.png">
                                </a>
                            </div>
                        </div>
                        <div class="m-c-item m-c-i-2" style="background:url(http://shop.com/public/static/index/images/1494985006295599886.jpg) center center no-repeat;">
                            <div class="m-c-main">
                                <div class="title">
                                    <h3>纯棉质品</h3>
                                    <span>把好货带回家</span>
                                </div>
                                <a href="" class="m-c-btn" target="_blank">去见识</a>
                            </div>
                            <div class="img">
                                <a href="" target="_blank">
                                    <img src="http://shop.com/public/static/index/images/1494985002918483191.png">
                                </a>
                            </div>
                        </div>
                        <div class="m-c-item m-c-i-3" style="background:url(http://shop.com/public/static/index/images/1494985006295599886.jpg) center center no-repeat;">
                            <div class="m-c-main">
                                <div class="title">
                                    <h3>纯棉质品</h3>
                                    <span>把好货带回家</span>
                                </div>
                                <a href="" class="m-c-btn" target="_blank">去见识</a>
                            </div>
                            <div class="img">
                                <a href="" target="_blank">
                                    <img src="http://shop.com/public/static/index/images/1494985002918483191.png">
                                </a>
                            </div>
                        </div>
                        <div class="m-c-item m-c-i-4" style="background:url(http://shop.com/public/static/index/images/1494985006295599886.jpg) center center no-repeat;">
                            <div class="m-c-main">
                                <div class="title">
                                    <h3>纯棉质品</h3>
                                    <span>把好货带回家</span>
                                </div>
                                <a href="" class="m-c-btn" target="_blank">去见识</a>
                            </div>
                            <div class="img">
                                <a href="" target="_blank">
                                    <img src="http://shop.com/public/static/index/images/1494985002918483191.png">
                                </a>
                            </div>
                        </div>
                        <div class="m-c-item m-c-i-5" style="background:url(http://shop.com/public/static/index/images/1494985006295599886.jpg) center center no-repeat;">
                            <div class="m-c-main">
                                <div class="title">
                                    <h3>纯棉质品</h3>
                                    <span>把好货带回家</span>
                                </div>
                                <a href="" class="m-c-btn" target="_blank">去见识</a>
                            </div>
                            <div class="img">
                                <a href="" target="_blank">
                                    <img src="http://shop.com/public/static/index/images/1494985002918483191.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------END--------->

        <!--------还没逛够---------->
        <div class="visual-item w1200" data-mode="guessYouLike" data-purebox="goods" ectype="visualItme" data-diff="0" style="display: block;">
            <div class="view">
                <div class="lift-channel clearfix" id="guessYouLike" data-type="range" data-lift="商品">
                    <div data-goodstitle="title">
                        <div class="ftit"><h3>还没逛够</h3></div>
                    </div>

                    <ul>
                        <?php if(is_array($indexhosGoods) || $indexhosGoods instanceof \think\Collection || $indexhosGoods instanceof \think\Paginator): $i = 0; $__LIST__ = $indexhosGoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hosGoods): $mod = ($i % 2 );++$i;?>
                        <li class="opacity_img">
                            <a href="<?php echo url('Goodslist/index',['id'=>$hosGoods['id']]); ?>" target="_blank">
                                <div class="p-img"><img src="<?php echo APP_PATH; ?>/public/static/uploads/goods/<?php echo htmlentities($hosGoods['og_thumb']); ?>"></div>
                                <div class="p-name" title="<?php echo htmlentities($hosGoods['goods_name']); ?>">
                                    <?php echo htmlentities($hosGoods['goods_name']); ?>
                                </div>
                                <div class="p-price">
                                    <div class="shop-price">
                                        <em>¥</em><?php echo htmlentities($hosGoods['shop_price']); ?>
                                    </div>
                                    <div class="original-price"></div>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>

                    <div class="spec" data-spec=""></div>

                </div>
            </div>
        </div>
        <!------END-------->

    </div>

</div>
<!-------END--------->


<!------底部导航引用--------->

<!------底部导航--------->
<div class="footer-new">
    <div class="footer-new-top">
        <div class="w w1200">
            <div class="service-list">
                <div class="service-item">
                    <i class="f-icon f-icon-qi"></i>
                    <span>七天包退</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-zheng"></i>
                    <span>正品保障</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-hao"></i>
                    <span>好评如潮</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-shan"></i>
                    <span>闪电发货</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-quan"></i>
                    <span>权威荣誉</span>
                </div>
            </div>
            <div class="contact">
                <div class="contact-item contact-item-first">
                    <i class="f-icon f-icon-tel"></i>
                    <span>4000-000-000</span>
                </div>
                <div class="contact-item">
                    <a id="IM" IM_type="dsc" onclick="openWin(this)" href="javascript:;" class="btn-ctn">
                        <i class="f-icon f-icon-kefu"></i>
                        <span>咨询客服</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-new-con">
        <div class="fnc-warp">
            <div class="help-list">
                <?php if(is_array($footer_article) || $footer_article instanceof \think\Collection || $footer_article instanceof \think\Paginator): $i = 0; $__LIST__ = $footer_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$footer_article): $mod = ($i % 2 );++$i;?>
                <div class="help-item">
                    <h3><?php echo htmlentities($footer_article['cate_name']); ?> </h3>
                    <ul>
                        <?php if(is_array($footer_article['child']) || $footer_article['child'] instanceof \think\Collection || $footer_article['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $footer_article['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo url('index/ArticleContent/index',['id'=>$child['id'],'pid'=>$footer_article['id']]); ?>" title="<?php echo htmlentities($child['title']); ?>" target="_blank"><?php echo htmlentities($child['title']); ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    </dl>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
            <div class="qr-code">
                <div class="qr-item qr-item-first">
                    <div class="code_img"><img src="images/common/ecjia_qrcode.png"></div>
                    <div class="code_txt">ECJia</div>
                </div>
                <div class="qr-item">
                    <div class="code_img"><img src="images/common/ectouch_qrcode.png"></div>
                    <div class="code_txt">ECTouch</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----END--------->
<!-----END--------->

</body>
</html>
<script type="text/javascript">
    var page = 0;
    var brand_url = "<?php echo url('index/getBrand'); ?>";
    $(function () {
        $('#refresh-btn').click();
    });
</script>
