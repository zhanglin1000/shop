<?php /*a:3:{s:62:"D:\phpEnv\www\shop\application\index\view\goodslist\index.html";i:1561956160;s:60:"D:\phpEnv\www\shop\application\index\view\public\header.html";i:1562902369;s:60:"D:\phpEnv\www\shop\application\index\view\public\footer.html";i:1562133584;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="雪狐商城" />
<meta name="Description" content="雪狐商城" />
<title>雪狐商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/base.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/quickLinks.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/goods_fitting.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/suggest.css" />
<script type="text/javascript" src="http://shop.com/public/static/index/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://shop.com/public/static/index/js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript" src="http://shop.com/public/static/index/js/magiczoomplus.js"></script>
<script type="text/javascript" src="http://shop.com/public/static/index/js/goods.js"></script>

</head>
<body>

<!---商城顶部导航--->
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
                    <li><a href="#" target="_blank"><?php echo htmlentities($v); ?></a></li>
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
<div class="nav dsc-zoom" ectype="dscNav">
    <div class="w w1200">

        <div class="categorys site-mast">

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
<!----END---->

<!---商品面包屑导航和标题------>
<div class="full-main-n">
	<div class="w w1200 relative">
		<div class="crumbs-nav">
			<div class="crumbs-nav-main clearfix">
				<div class="crumbs-nav-item">
					<div class="menu-drop">
						<div class="trigger">
							<a href="#"><span>男装、女装、内衣</span></a>
						</div>
					</div>
					<i class="iconfont icon-right"></i>
				</div>
				<div class="crumbs-nav-item">
					<div class="menu-drop">
						<div class="trigger">
							<a href="#"><span>女装</span></a>
						</div>
					</div>
					<i class="iconfont icon-right"></i>
				</div>
				<div class="crumbs-nav-item">
					<div class="menu-drop">
						<div class="trigger bottom">
							<a href="#"><span>蕾丝/雪纺衫</span></a>
						</div>
					</div>
					<i class="iconfont icon-right"></i>
				</div>
				<span class="cn-goodsName">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</span>
			</div>
		</div>
	</div>
</div>
<!----END------>

<!------商品详情-------->
<div class="container">
	<div class="w w1200">
		<div class="product-info">
			<div class="preview" if="preview" style="float:left;margin-bottom:90px;">
				<div class="gallery_wrap">
					<a href="http://shop.com/public/static/index/images/0_P_1490174858621.jpg" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: img-hover; selectors-change: mouseover; zoom-distance: 10;zoom-width: 400; zoom-height: 474;">
						<img src="http://shop.com/public/static/index/images/0_P_1490174858621.jpg" id="J_prodImg" alt="韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10">
					</a>
				</div>
				<div class="spec-list">
					<a href="javascript:void(0);" class="spec-prev"><i class="iconfont icon-left"></i></a>
					<div class="spec-items">
						<ul>
							<li>
								<a href="http://shop.com/public/static/index/images/0_P_1490174858621.jpg" rel="zoom-id: Zoomer" rev="http://shop.com/public/static/index/images/0_P_1490174858621.jpg" class="img-hover">
									<img src="http://shop.com/public/static/index/images/0_thumb_P_1490174858959.jpg" alt="韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10" width="58" height="58" />
								</a>
							</li>
						</ul>
					</div>
					<a href="javascript:void(0);" class="spec-next"><i class="iconfont icon-right"></i></a>
				</div>
			</div>
			<div class="product-wrap">
				<form action="" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
					<div class="name">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</div>
					<div class="summary">
						<div class="summary-price-wrap">
							<div class="s-p-w-wrap">
								<div class="summary-item si-shop-price">
									<div class="si-tit">商 城 价</div>
									<div class="si-warp">
										<strong class="shop-price" id="ECS_SHOPPRICE" ectype="SHOP_PRICE"></strong>
										<span class="price-notify" data-userid="62" data-goodsid="799" ectype="priceNotify">降价通知</span>
									</div>
								</div>
								<div class="summary-item si-market-price">
									<div class="si-tit">市 场 价</div>
									<div class="si-warp"><div class="m-price" id="ECS_MARKETPRICE"><em>¥</em>81.60</div></div>
								</div>
								<div class="si-info">
									<div class="si-cumulative">累计评价<em>0</em></div>
									<div class="si-cumulative">累计销量<em>0</em></div>
								</div>
								<div class="summary-item si-coupon">
									<div class="si-tit">领 券</div>
									<div class="si-warp">
										<a class="J-open-tb" href="#none" data-goodsid="799">
											<div class="quan-item"><i class="i-left"></i>满2000减100<i class="i-right"></i></div>
										</a>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="summary-basic-info">
							<div class="summary-item is-stock">
								<div class="si-tit">配送</div>
								<div class="si-warp">
									<span class="initial-area">上海市</span>
									<span>至</span>
									<div class="store-selector">
										<div class="text-select" id="area_address" ectype="areaSelect">天津</div>
									</div>
								</div>
							</div>
							<div class="summary-item is-service">
								<div class="si-tit">服务</div>
								<div class="si-warp">
									<div class="fl">
										由 <a href="javascript:void(0)" class="link-red">雪狐网</a> 发货并提供售后服务
									</div>
								</div>
							</div>
							<div class="summary-item is-integral">
								<div class="si-tit">可用积分</div>
								<div class="si-warp">可用 <span class="integral">0</span></div>
							</div>
							<div class="summary-item is-number">
								<div class="si-tit">数量</div>
								<div class="si-warp">
									<div class="amount-warp">
										<input class="text buy-num" ectype="quantity" value="1" name="number" defaultnumber="1">
										<div class="a-btn">
											<a href="javascript:void(0);" class="btn-add" ectype="btnAdd"><i class="iconfont icon-up"></i></a>
											<a href="javascript:void(0);" class="btn-reduce btn-disabled" ectype="btnReduce"><i class="iconfont icon-down"></i></a>
										</div>
									</div>
									<span>库存&nbsp;<em id="goods_attr_num" ectype="goods_attr_num"></em>&nbsp;1个</span>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="choose-btns ml60 clearfix">
							<a href="javascript:bool=0;addToCart(799)" data-type="0" class="btn-buynow" ectype="btn-buynow">立即购买</a>
							<a href="javascript:bool=0;addToCartShowDiv(799)" class="btn-append" ectype="btn-append"><i class="iconfont icon-carts"></i>加入购物车</a>
						</div>
						<div class="summary-basic-info">
							<div class="summary-item is-service">
								<div class="si-tit">温馨提示</div>
								<div class="si-warp gray">
									·不支持退换货服务
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="goods-main-layout">

			<!-----商城左侧栏目------>
			<div class="g-m-left">

				<!-----客服模块------>
			     <div class="g-main service_list">
				<div class="mt"><h3>店内客服</h3></div>
				<div class="mc">
					<ul>
						<li class="service_qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=349488953&site=qq&menu=yes" target="_blank"><i class="icon i-kefu"></i><span>客服一</span></a></li>
						<li class="service_qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=1234567&site=qq&menu=yes" target="_blank"><i class="icon i-kefu"></i><span>客服二</span></a></li>
					</ul>
				</div>
			</div>
			    <!---END-->

				<!-----相关分类------>
			   <div class="g-main">
					<div class="mt">
						<h3>相关分类</h3>
					</div>
					<div class="mc">
						<div class="mc-warp">
							<div class="items">
								<div class="item"><a href="#" target="_blank">连衣裙</a></div>
								<div class="item"><a href="#" target="_blank">蕾丝/雪纺衫</a></div>
								<div class="item"><a href="#" target="_blank">衬衫</a></div>
								<div class="item"><a href="#" target="_blank">T恤</a></div>
								<div class="item"><a href="#" target="_blank">半身裙</a></div>
								<div class="item"><a href="#" target="_blank">休闲裤</a></div>
								<div class="item"><a href="#" target="_blank">短裤</a></div>
								<div class="item"><a href="#" target="_blank">牛仔裤</a></div>
								<div class="item"><a href="#" target="_blank">针织衫</a></div>
								<div class="item"><a href="#" target="_blank">吊带/背心</a></div>
							</div>
						</div>
					</div>
				</div>
				<!----END----->

				<!-----品牌------>
				<div class="g-main">
					<div class="mt">
						<h3>同类其他品牌</h3>
					</div>
					<div class="mc">
						<div class="mc-warp">
							<div class="items">
								<div class="item"><a href="brand.php?id=160" target="_blank">美的</a></div>
							</div>
						</div>
					</div>
				</div>
				<!----END------->

				<!----商品推荐----->
				<div class="g-main g-rank">
					<div class="mc">
						<ul class="mc-tab mcThree" ectype="rankMcTab">
							<li class="curr">新品</li>
							<li>推荐</li>
							<li>热销</li>
						</ul>
						<div class="mc-content">
							<!-----新品------>
							<div class="mc-main" style="display:block;">
								<div class="mcm-left">
									<div class="spirit"></div>
									<div class="rank-number rank-number1">1</div>
									<div class="rank-number rank-number2">2</div>
									<div class="rank-number rank-number3">3</div>
								</div>
								<div class="mcm-right">
									<ul>
										<li>
											<div class="p-img"><a href="goods.php?id=864" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211620029.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=864" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a></div>
											<div class="p-price">
												<em>¥</em>128.00			</div>
										</li>
										<li>
											<div class="p-img"><a href="goods.php?id=863" title="马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211575591.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=863" title="马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98</a></div>
											<div class="p-price">
												<em>¥</em>98.00			</div>
										</li>
										<li>
											<div class="p-img"><a href="goods.php?id=865" title="美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211700709.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=865" title="美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购">美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购</a></div>
											<div class="p-price">
												<em>¥</em>89.00			</div>
										</li>
									</ul>
								</div>
							</div>
							<!-----END----->

							<!-----推荐------>
							<div class="mc-main" style="display:none;">
								<div class="mcm-left">
									<div class="spirit"></div>
									<div class="rank-number rank-number1">1</div>
									<div class="rank-number rank-number2">2</div>
									<div class="rank-number rank-number3">3</div>
								</div>
								<div class="mcm-right">
									<ul>
										<li>
											<div class="p-img"><a href="goods.php?id=864" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211620029.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=864" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a></div>
											<div class="p-price">
												<em>¥</em>128.00			</div>
										</li>
										<li>
											<div class="p-img"><a href="goods.php?id=863" title="马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211575591.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=863" title="马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98</a></div>
											<div class="p-price">
												<em>¥</em>98.00			</div>
										</li>
										<li>
											<div class="p-img"><a href="goods.php?id=865" title="美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211700709.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=865" title="美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购">美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购</a></div>
											<div class="p-price">
												<em>¥</em>89.00			</div>
										</li>
									</ul>
								</div>
							</div>
							<!-----END------>

							<!-----热销------>
							<div class="mc-main" style="display:none;">
								<div class="mcm-left">
									<div class="spirit"></div>
									<div class="rank-number rank-number1">1</div>
									<div class="rank-number rank-number2">2</div>
									<div class="rank-number rank-number3">3</div>
								</div>
								<div class="mcm-right">
									<ul>
										<li>
											<div class="p-img"><a href="goods.php?id=864" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211620029.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=864" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a></div>
											<div class="p-price">
												<em>¥</em>128.00			</div>
										</li>
										<li>
											<div class="p-img"><a href="goods.php?id=863" title="马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211575591.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=863" title="马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98</a></div>
											<div class="p-price">
												<em>¥</em>98.00			</div>
										</li>
										<li>
											<div class="p-img"><a href="goods.php?id=865" title="美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211700709.jpg" width="130" height="130"></a></div>
											<div class="p-name"><a href="goods.php?id=865" title="美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购">美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购</a></div>
											<div class="p-price">
												<em>¥</em>89.00			</div>
										</li>
									</ul>
								</div>
							</div>
							<!----END------>
						</div>
					</div>
				</div>
				<!-------END------->

				<!----最近浏览---->
				<div class="g-main g-history">
					<div class="mt">
						<h3>最近浏览</h3>
						<a onclick="clear_history()" class="clear_history ftx-05 fr mt10 mr10" href="javascript:void(0);">清空</a>
					</div>
					<div class="mc">
						<div class="mc-warp" id="history_list" ectype="history_mian">
							<ul>
								<li>
									<div class="p-img"><a href="goods.php?id=799" target="_blank" title="韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490174858999.jpg" width="170" height="170"></a></div>
									<div class="p-name"><a href="goods.php?id=799" target="_blank">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</a></div>
									<div class="p-lie">
										<div class="p-price">
											<em>¥</em>68.00	</div>
									</div>
								</li>
								<li>
									<div class="p-img"><a href="goods.php?id=626" target="_blank" title="秋冬新款加绒圆领套头卫衣男青年男生韩版潮流学生休闲外套男"><img src="http://shop.com/public/static/index/images/0_thumb_G_1489099544749.jpg" width="170" height="170"></a></div>
									<div class="p-name"><a href="goods.php?id=626" target="_blank">秋冬新款加绒圆领套头卫衣男青年男生韩版潮流学生休闲外套男</a></div>
									<div class="p-lie">
										<div class="p-price">
											<em>¥</em>168.00	</div>
									</div>
								</li>
								<li>
									<div class="p-img"><a href="goods.php?id=865" target="_blank" title="美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490211700709.jpg" width="170" height="170"></a></div>
									<div class="p-name"><a href="goods.php?id=865" target="_blank">美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购</a></div>
									<div class="p-lie">
										<div class="p-price">
											<em>¥</em>89.00	</div>
									</div>
								</li>
								<li>
									<div class="p-img"><a href="goods.php?id=775" target="_blank" title="韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490169281436.jpg" width="170" height="170"></a></div>
									<div class="p-name"><a href="goods.php?id=775" target="_blank">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
									<div class="p-lie">
										<div class="p-price">
											<em>¥</em>78.00	</div>
									</div>
								</li>
								<li>
									<div class="p-img"><a href="goods.php?id=768" target="_blank" title="韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素"><img src="http://shop.com/public/static/index/images/0_thumb_G_1490169030833.jpg" width="170" height="170"></a></div>
									<div class="p-name"><a href="goods.php?id=768" target="_blank">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
									<div class="p-lie">
										<div class="p-price">
											<em>¥</em>88.00	</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-----END---->

			</div>
			<!-----END------->

			<!-----商品详情------->
			<div class="g-m-detail">
				<div class="gm-tabbox" ectype="gm-tabs">
					<ul class="gm-tab">
						<li class="curr" ectype="gm-tab-item">商品详情</li>
						<li ectype="gm-tab-item" class="">用户评论（<em class="ReviewsCount">0</em>）</li>
					</ul>
				</div>

				<!-----商品详情-------->
				<div class="gm-f-item gm-f-details ace" ectype="gm-item" style="display: none;">
					<div class="gm-title">
						<h3>商品详情</h3>
					</div>
					<div class="goods-para-list">
						<dl class="goods-para">
							<dd class="column"><span>商品名称：美的电磁炉Midea/美的 WK2102电磁炉特价家用触摸屏电池炉灶正品 已爆售百万多台 防滑触摸屏 一键爆炒</span></dd>
							<dd class="column"><span>商品编号：ECS000646</span></dd>
							<dd class="column"><span>店铺：<a href="" title="eve" target="_blank">eve</a></span></dd>
							<dd class="column"><span>重量：0克</span></dd>
						</dl>
					</div>
					<p><img src="http://dsc.websc.la/images/upload/20170322/149018033552.png" style="float:none;" title="970-_01.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803353655.png" style="float:none;" title="970-_02.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803358336.png" style="float:none;" title="970-_03.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803363248.png" style="float:none;" title="970-_04.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803367408.png" style="float:none;" title="970-_05.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803365794.png" style="float:none;" title="970-_06.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803366276.png" style="float:none;" title="970-_07.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803364827.png" style="float:none;" title="970-_08.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803371628.png" style="float:none;" title="970-_09.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803374791.png" style="float:none;" title="970-_10.png"></p>
					<p><img src="http://dsc.websc.la/images/upload/20170322/14901803372332.png" style="float:none;" title="970-_11.png"></p>
					<p><br></p>
				</div>
                <!------END------->

				<!-----评论---------->
				<div class="gm-f-item gm-f-comment ace" ectype="gm-item"  style="display: none;">
					<div class="gm-title">
						<h3>评论晒单</h3>
						<ul class="gm-f-tab" ectype="gmf-tab">
							<li class="curr" rev="0"><a href="javascript:;">全部<em>(0)</em></a></li>
							<li rev="1"><a href="javascript:;">好评<em>(0)</em></a></li>
							<li rev="2"><a href="javascript:;">中评<em>(0)</em></a></li>
							<li rev="3" class="last"><a href="javascript:;">差评<em>(0)</em></a></li>
						</ul>
					</div>
					<div class="gm-warp">
						<div class="praise-rate-warp">
							<div class="rate">
								<strong>100</strong>
								<span class="rate-span">
                                  <span class="tit">好评率</span>
                                  <span class="bf">%</span>
								</span>
							</div>
							<div class="actor-new">
								<div class="not_impression">此商品还没有设置买家印象，陪我一起等下嘛~</div>
							</div>
						</div>
						<div class="com-list-main">
							<div id="ECS_COMMENT">
								<div class="no_records no_comments_qt">
									<i class="no_icon no_icon_three"></i>
									<span class="block">暂无评价</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!------END--------->
			</div>
			<!------END-------->

			<div class="clear"></div>

			<!-----猜你喜欢------->
			<div class="rection" id="guess_goods_love">
				<div class="ftit"><h3>猜你喜欢</h3></div>
				<ul>
					<li>
						<div class="p-img">
							<a href="goods.php?id=864" target="_blank">
								<img src="http://shop.com/public/static/index/images/0_thumb_G_1490211620029.jpg" width="134" height="134">
							</a>
						</div>
						<div class="p-name">
							<a href="#" target="_blank" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a>
						</div>
						<div class="p-price"><em>¥</em>128.00</div>
					</li>
					<li>
						<div class="p-img">
							<a href="goods.php?id=864" target="_blank">
								<img src="http://shop.com/public/static/index/images/0_thumb_G_1490211620029.jpg" width="134" height="134">
							</a>
						</div>
						<div class="p-name">
							<a href="#" target="_blank" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a>
						</div>
						<div class="p-price"><em>¥</em>128.00</div>
					</li>
					<li>
						<div class="p-img">
							<a href="goods.php?id=864" target="_blank">
								<img src="http://shop.com/public/static/index/images/0_thumb_G_1490211620029.jpg" width="134" height="134">
							</a>
						</div>
						<div class="p-name">
							<a href="#" target="_blank" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a>
						</div>
						<div class="p-price"><em>¥</em>128.00</div>
					</li>
					<li>
						<div class="p-img">
							<a href="goods.php?id=864" target="_blank">
								<img src="http://shop.com/public/static/index/images/0_thumb_G_1490211620029.jpg" width="134" height="134">
							</a>
						</div>
						<div class="p-name">
							<a href="#" target="_blank" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a>
						</div>
						<div class="p-price"><em>¥</em>128.00</div>
					</li>
					<li>
						<div class="p-img">
							<a href="goods.php?id=864" target="_blank">
								<img src="http://shop.com/public/static/index/images/0_thumb_G_1490211620029.jpg" width="134" height="134">
							</a>
						</div>
						<div class="p-name">
							<a href="#" target="_blank" title="马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a>
						</div>
						<div class="p-price"><em>¥</em>128.00</div>
					</li>
				</ul>
			</div>
			<!-----END-------->

		</div>
	</div>
</div>
<!---------END------------>


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
