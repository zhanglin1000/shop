<?php /*a:4:{s:67:"D:\phpEnv\www\shop\application\index\view\articleContent\index.html";i:1562076938;s:60:"D:\phpEnv\www\shop\application\index\view\public\header.html";i:1561955964;s:66:"D:\phpEnv\www\shop\application\index\view\public\article_cate.html";i:1562076426;s:60:"D:\phpEnv\www\shop\application\index\view\public\footer.html";i:1562036430;}*/ ?>
﻿<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="文章内容" />
<meta name="Description" content="文章内容" />
<title>雪狐商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/base.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/quicklinks.css" />
<script type="text/javascript" src="http://shop.com/public/static/index/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://shop.com/public/static/index/js/article.js"></script>
<body class="bg-ligtGary">

<!---商城顶部导航--->
<!---商城顶部导航--->
<div class="site-nav" id="site-nav">
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
                    <li><a href="#" target="_blank">周大福</a></li>
                    <li><a href="#" target="_blank">内衣</a></li>
                    <li><a href="#" target="_blank">Five Plus</a></li>
                    <li><a href="#" target="_blank">手机</a></li>
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
<div class="nav dsc-zoom" ectype="dscNav">
    <div class="w w1200">

        <div class="categorys site-mast">

            <div class="categorys-type">
                <a href="#" target="_blank">全部商品分类</a>
            </div>

            <div class="categorys-tab-content">
                <div class="categorys-items" id="cata-nav">

                    <div class="categorys-item" ectype="cateItem" data-id="858" data-eveval="0">

                        <div class="item item-content">
                            <i class="iconfont icon-ele"></i>
                            <div class="categorys-title">
                                <strong>
                                    <a href="#" target="_blank">家用电器</a>
                                </strong>

                                <span>
                                            <a href="#" target="_blank">大家电</a>
                                            <a href="#" target="_blank">生活电器</a>
                                        </span>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>

                </div>
            </div>

        </div>

        <!----商城导航菜单------->
        <div class="nav-main" id="nav">
            <ul class="navitems">
                <li><a href="#" class="curr">首页</a></li>
                <li><a href="#">食品特产</a></li>
                <li><a href="#">服装城</a></li>
                <li><a href="#">大家电</a></li>
                <li><a href="#">鞋靴箱包</a></li>
                <li><a href="#">品牌专区</a></li>
                <li><a href="#">聚划算</a></li>
                <li><a href="#">积分商城</a></li>
                <li><a href="#">预售</a></li>
                <li><a href="#">店铺街</a></li>
                <li><a href="#">微分销</a></li>
            </ul>
        </div>
        <!----END------>

    </div>
</div>
<!----END----->
<!----END---->


<!---文章帮助中心------>
<div class="content article-content">

    <div class="article-search-hd mb20">
        <div class="w w1200">
            <div class="hd-tit">文档帮助中心</div>
        </div>
    </div>

    <div class="w w1200 clearfix">

        <!-----文章右侧菜单-------->
        <!-----文章右侧菜单-------->
<div class="article-side">
    <dl class="article-menu">
        <dt class="am-t"><a href="javascript:void(0);">文章分类列表</a></dt>
        <dd class="am-c">
            <div class="menu-item active">
                <div class="item-hd"><a href="javascript:void(0);">系统分类</a><i class="iconfont icon-down"></i></div>
                <ul class="item-bd">
                    <?php if(is_array($cate_help) || $cate_help instanceof \think\Collection || $cate_help instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_help;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_help): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/Article/index',['id'=>$cate_help['id']]); ?>"><?php echo htmlentities($cate_help['cate_name']); ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </dd>

        <dd class="am-c">
            <?php if(is_array($cate_general) || $cate_general instanceof \think\Collection || $cate_general instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_general;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_general): $mod = ($i % 2 );++$i;?>
            <div class="menu-item active">
                <div class="item-hd"><a href="<?php echo url('index/Article/index',['id'=>$cate_general['id']]); ?>"><?php echo htmlentities($cate_general['cate_name']); ?></a><?php if($cate_general['subclass']): ?><i class="iconfont icon-up"></i><?php endif; ?></div>
                <?php if($cate_general['subclass']): ?>
                <ul class="item-bd" style="display:none;">
                    <?php if(is_array($cate_general['subclass']) || $cate_general['subclass'] instanceof \think\Collection || $cate_general['subclass'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_general['subclass'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subclass): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/Article/index',['id'=>$subclass['id']]); ?>"><?php echo htmlentities($subclass['cate_name']); ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <?php endif; ?>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </dd>
    </dl>
</div>
<!-----END-------->
        <!-----END-------->

        <!-----文章内容-------->
        <div class="article-main">
            <!-------文章面包屑导航------->
            <div class="am-hd">
                <h2>隐私声明</h2>
                <div class="extra">
                    <?php if(is_array($cate_name) || $cate_name instanceof \think\Collection || $cate_name instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$catename): $mod = ($i % 2 );++$i;if(count($cate_name) < count($catename)): ?>
                     <a href="<?php echo url('index/Article/index',['id'=>$catename['id']]); ?>"><?php echo htmlentities($catename['cate_name']); ?></a>
                     <i>&gt;</i>
                    <?php else: ?>
                    <i></i>
                    <span><?php echo htmlentities($catename['cate_name']); ?></span>
                    <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
            </div>
            <!------END-------->

            <div class="am-bd">
                <!-------文章详情-------->
                <div class="article-words">
                   <p>&nbsp;<strong style="font-family: 微软雅黑, 宋体, Arial, Helvetica, sans-serif; line-height: 24px; margin: 0px; padding: 0px; font-size: 14px; color: rgb(33, 33, 33);"><?php echo htmlentities($article_content['title']); ?></strong></p>
                    <div class="content_list border_none list_top_txt" style="margin: 0px; padding: 25px 0px 15px; width: 733px; border: none; line-height: 24px; float: left; color: rgb(102, 102, 102); font-family: 微软雅黑, 宋体, Arial, Helvetica, sans-serif;">
                        <?php echo $article_content['content']; ?>
                    </div>
                </div>
                <!--------END------>

                <!-------文章上一篇和下一篇-------->
                <div class="more_article">
                        <span class="art_prev">
                            上一篇：<?php if($prev): ?><a href="<?php echo url('index/ArticleContent/index',['id'=>$prev['id'],'pid'=>input('pid')]); ?>" ><?php echo htmlentities($prev['title']); ?></a> <?php else: ?>没有啦<?php endif; ?>
                         </span>
                    <span class="art_next">
                       下一篇：<?php if($next): ?><a href="<?php echo url('index/ArticleContent/index',['id'=>$next['id'],'pid'=>input('pid')]); ?>" ><?php echo htmlentities($next['title']); ?></a><?php else: ?>没有啦<?php endif; ?>
                    </span>
                </div>
                <!-----END-------->
            </div>
        </div>
        <!----END----->
    </div>
</div>
<!----END------>

<!------底部导航--------->

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
                        <li><a href="<?php echo url('articleContent/index',['id'=>$child['id'],'pid'=>$footer_article['id']]); ?>" title="<?php echo htmlentities($child['title']); ?>" target="_blank"><?php echo htmlentities($child['title']); ?></a></li>
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
