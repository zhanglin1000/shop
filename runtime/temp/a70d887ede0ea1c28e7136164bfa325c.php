<?php /*a:3:{s:56:"D:\phpEnv\www\shop\application\admin\view\goods\add.html";i:1562159078;s:57:"D:\phpEnv\www\shop\application\admin\view\public\top.html";i:1557143759;s:58:"D:\phpEnv\www\shop\application\admin\view\public\left.html";i:1562641771;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>雪狐商城</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://shop.com/public/static/admin/css/bootstrap.css" rel="stylesheet">
    <link href="http://shop.com/public/static/admin/css/font-awesome.css" rel="stylesheet">
    <link href="http://shop.com/public/static/admin/css/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://shop.com/public/static/admin/css/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://shop.com/public/static/admin/css/demo.css" rel="stylesheet">
    <link href="http://shop.com/public/static/admin/css/typicons.css" rel="stylesheet">
    <link href="http://shop.com/public/static/admin/css/animate.css" rel="stylesheet">
    <style type="text/css">
        .price
        {
            width:150px;
            display: inline-block;
        }
        .select
        {
            margin-right:10px;
        }
        a,a:hover
        {
            text-decoration:none;
        }
    </style>

</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://shop.com/public/static/admin/img/logo.gif" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://shop.com/public/static/admin/img/icon.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">

                                    <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
             <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-cart"></i>
                <span class="menu-text">
                    商品管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('goods/lst'); ?>">
                        <span class="menu-text">
                            商品列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('brand/lst'); ?>">
                        <span class="menu-text">
                            商品品牌
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('category/lst'); ?>">
                        <span class="menu-text">
                            商品分类
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('type/lst'); ?>">
                        <span class="menu-text">
                            商品类型
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品回收站
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text">
                    文章模块
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                <a href="<?php echo url('cate/lst'); ?>">
                        <span class="menu-text">
                            文章分类列表
                        </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
                <li>
                    <a href="<?php echo url('article/lst'); ?>">
                        <span class="menu-text">
                            文章列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text">
                    图片模块
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/img_list'); ?>">
                        <span class="menu-text">
                            图片列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-paperclip"></i>
                <span class="menu-text">
                    链接模块
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('link/lst'); ?>">
                        <span class="menu-text">
                            链接列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-rocket"></i>
                <span class="menu-text">
                    导航管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('nav/lst'); ?>">
                        <span class="menu-text">
                            导航列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-fire"></i>
                <span class="menu-text">
                    推荐位管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('recommend/lst'); ?>">
                        <span class="menu-text">
                            推荐位列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-mail-forward"></i>
                <span class="menu-text">
                    栏目关联词管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('word/lst'); ?>">
                        <span class="menu-text">
                            栏目关联词列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-qrcode"></i>
                <span class="menu-text">
                    促销管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品品牌
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品分类
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品类型
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品回收站
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-laptop"></i>
                <span class="menu-text">
                    订单管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品品牌
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品分类
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品类型
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品回收站
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa  fa-user"></i>
                <span class="menu-text">
                    会员管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('memberlevel/lst'); ?>">
                        <span class="menu-text">
                            会员级别
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">
                    系统设置
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('config/lst'); ?>">
                        <span class="menu-text">
                            配置列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('config/configlist'); ?>">
                        <span class="menu-text">
                            配置设置
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-code-fork"></i>
                <span class="menu-text">
                    数据库管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品品牌
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品分类
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品类型
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品回收站
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-mobile"></i>
                <span class="menu-text">
                    短信管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品品牌
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品分类
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品类型
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">
                            商品回收站
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                      <li>
                         <a href="#">系统</a>
                      </li>
                      <li>
                        <a href="<?php echo url('goods/lst'); ?>">商品列表</a>
                      </li>
                       <li class="active">添加商品</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                 <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
          <div class="widget">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url('goods/add'); ?>" method="post" enctype="multipart/form-data">
                        <div class="widget-body">
                            <div class="widget-main ">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                        <li class="active">
                                            <a data-toggle="tab" href="#home1">
                                                商品基本设置
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#home2">
                                                商品描述
                                            </a>
                                        </li>
                                       <li class="">
                                            <a data-toggle="tab" href="#home3">
                                                会员价设置
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#home4">
                                                属性设置
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#home5">
                                                相册设置
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tabs-flat">
                                        <div id="home1" class="tab-pane active">
                                            <div class="form-group">
                                                <label for="goods_name" class="col-sm-2 control-label no-padding-right">商品名称</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="goods_name" placeholder="商品名称" name="goods_name" required="" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="goods_name" class="col-sm-2 control-label no-padding-right">加入推荐</label>
                                                <div class="col-sm-6">
                                                    <?php if(is_array($goodsRec) || $goodsRec instanceof \think\Collection || $goodsRec instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsRec;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsRec): $mod = ($i % 2 );++$i;?>
                                                    <label style="margin: 6px 5px 0 0;">
                                                        <input type="checkbox" value="<?php echo htmlentities($goodsRec['id']); ?>" class="colored-blue" name="goods_rec[]">
                                                        <span class="text"><?php echo htmlentities($goodsRec['rec_name']); ?></span>
                                                    </label>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label no-padding-right">商品分类</label>
                                                <div class="col-sm-6">
                                                   <select name="category_id" class="form-control" >
                                                       <option value="">请选择</option>
                                                       <?php if(is_array($categoryAll) || $categoryAll instanceof \think\Collection || $categoryAll instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
                                                       <option  value="<?php echo htmlentities($category['id']); ?>"><?php if($category['pid'] != 0): ?><?php echo '♩'.str_repeat('--',$category['level'] * 8); ?><?php endif; ?><?php echo htmlentities($category['cate_name']); ?></option>
                                                       <?php endforeach; endif; else: echo "" ;endif; ?>
                                                   </select>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="og_thumb" class="col-sm-2 control-label no-padding-right">商品主图</label>
                                                <div class="col-sm-6">
                                                    <input id="og_thumb"  name="og_thumb" type="file" style="margin-top:8px;">
                                                </div>
                                                <p class="help-block col-sm-4 red">(尺寸：800px * 800px | 格式：jpg，gif，png，jpeg)</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="shop_price" class="col-sm-2 control-label no-padding-right">本店价</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="shop_price" placeholder="商品本店价" name="shop_price" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="market_price" class="col-sm-2 control-label no-padding-right">市场价</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="market_price" placeholder="商品市场价" name="market_price" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label no-padding-right">上架</label>
                                                <div class="col-sm-6">
                                                    <label style="margin:8px 8px 0 0;">
                                                        <input name="on_sale" checked type="radio" value="1" class="colored-blue">
                                                        <span class="text">上架</span>
                                                    </label>
                                                    <label style="margin:8px 8px 0 0;">
                                                        <input name="on_sale" type="radio" value="2" class="colored-blue">
                                                        <span class="text">下架</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label no-padding-right">品牌分类</label>
                                                <div class="col-sm-6">
                                                    <select name="brand_id" class="form-control" >
                                                        <option value="">请选择</option>
                                                        <?php if(is_array($brandAll) || $brandAll instanceof \think\Collection || $brandAll instanceof \think\Paginator): $i = 0; $__LIST__ = $brandAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brand): $mod = ($i % 2 );++$i;?>
                                                        <option value="<?php echo htmlentities($brand['id']); ?>"><?php echo htmlentities($brand['brand_cname']); ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="goods_weight" class="col-sm-2 control-label no-padding-right">商品重量</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" style="width:150px;float:left;margin-right:5px;" id="goods_weight" placeholder="商品重量" name="goods_weight" type="text">
                                                    <select name="goods_unit">
                                                        <option value="千克" selected>千克</option>
                                                        <option value="克">克</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div id="home2" class="tab-pane">
                                           <textarea id="content" name="goods_desc"></textarea>
                                        </div>

                                       <div id="home3" class="tab-pane">

                                            <?php if(is_array($levelAll) || $levelAll instanceof \think\Collection || $levelAll instanceof \think\Paginator): $i = 0; $__LIST__ = $levelAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ml): $mod = ($i % 2 );++$i;?>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($ml['level_name']); ?> ( <?php echo ($ml['reate'] / 10); ?>折 ) </label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" placeholder="商品级别价格"  name="mp[<?php echo htmlentities($ml['id']); ?>]"  type="text">
                                                </div>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>

                                        <div id="home4" class="tab-pane">
                                           <div class="form-group">
                                               <label  class="col-sm-2 control-label no-padding-right">商品类型</label>
                                               <div class="col-sm-6">
                                                   <select name="type_id">

                                                       <option value="">请选择</option>

                                                       <?php if(is_array($typeAll) || $typeAll instanceof \think\Collection || $typeAll instanceof \think\Paginator): $i = 0; $__LIST__ = $typeAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                                                       <option value="<?php echo htmlentities($type['id']); ?>"><?php echo htmlentities($type['type_name']); ?></option>
                                                       <?php endforeach; endif; else: echo "" ;endif; ?>

                                                   </select>
                                               </div>
                                           </div>

                                           <div id="attr">
                                              <!--<div class="form-group">
                                                   <label  class="col-sm-2 control-label no-padding-right"><a href="#">[+]</a> 颜色</label>
                                                   <div class="col-sm-6">
                                                       <select name="">
                                                           <option value="黑色">黑色</option>
                                                           <option value="白色">白色</option>
                                                       </select>
                                                       <input type="text" name="" placeholder="价格" class="form-control price" />
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label  class="col-sm-2 control-label no-padding-right">材质</label>
                                                   <div class="col-sm-6">
                                                       <select name="">
                                                           <option value="棉纶">棉纶</option>
                                                           <option value="亚麻">亚麻</option>
                                                       </select>
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label  class="col-sm-2 control-label no-padding-right">品牌名称</label>
                                                   <div class="col-sm-6">
                                                       <input class="form-control price"  name="" type="text">
                                                   </div>
                                               </div>-->
                                           </div>
                                       </div>

                                        <div id="home5" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label no-padding-right"><a href="javascript:void(0)" onclick="addrow(this)">[+]</a> 上传商品图片：</label>
                                                <div class="col-sm-6">
                                                    <input type="file" name="goods_photo[]" style="margin-top:7px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">保存信息</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>
	</div>

    <!--Basic Scripts-->
    <script src="http://shop.com/public/static/admin/js/jquery.js"></script>
    <script src="http://shop.com/public/static/admin/js/bootstrap.js"></script>
    <!-- Beyond Scripts-->
    <script src="http://shop.com/public/static/admin/js/beyond.js"></script>
    <script src="http://shop.com/public/static/plugin/ueditor/ueditor.config.js"></script>
    <script src="http://shop.com/public/static/plugin/ueditor/ueditor.all.min.js"></script>
    <script src="http://shop.com/public/static/plugin/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script src="http://shop.com/public/static/plugin/layer/layer.js"></script>
    <script type="text/javascript">
        UE.getEditor('content');

        //类型选择
        $("select[name='type_id']").change(function ()
        {
            //获取选择类型ID
            var type_id = $(this).val();

            //判断类型是否为空
            if(type_id != '')
            {
                //执行AJAX操作查找置顶类型属性
                $.ajax({
                    type:"POST",
                    url:"<?php echo url('attr/getAttr'); ?>",
                    dataType : 'json',
                    data : {
                        'type_id' : type_id
                    },
                    success : function(data)
                    {
                        var html = '';
                        var values = '';
                        var attr_values = '';

                        //遍历数组
                        $.each(data,function (k,v)
                        {
                            html += "<div class='form-group'>";
                            html += "<label  class='col-sm-2 control-label no-padding-right'> "+v.attr_name+"</label>";
                            html += "<div class='col-sm-6'>";

                            if( v.attr_type == 2 )
                            {
                                html += " <a href='javascript:void();' onclick='addrow(this)'>[+]</a> &nbsp;&nbsp;";
                            }


                            if( v.attr_values == '' )
                            {
                                html += "<input class='form-control'  name='goods_attr["+v.id+"][]' type='text'>";
                            }
                            else
                            {
                                values = v.attr_values;

                                attr_values = values.split(',');

                                html += "<select name='goods_attr["+v.id+"][]'>";
                                html += "<option value=''>请选择</option>";

                                for(var i = 0; i < attr_values.length; i++)
                                {
                                    html += "<option value="+attr_values[i]+">"+attr_values[i]+"</option>";
                                }

                                html += "</select>";

                            }

                            if( v.attr_type == 2 )
                            {
                                html += "&nbsp;&nbsp;<input type='text' name='goods_price["+v.id+"][]' placeholder='价格' class='form-control price' />";
                            }

                            html += "</div>";
                            html += "</div>";
                        });

                        $('#attr').html(html);
                    }
                });
            }
            else
            {
                $('#attr').html('');
            }




        });

        function addrow( a )
        {
          //获取上一级
          var div = $( a ).parent().parent();

          //执行克隆
          var newdiv = div.clone();

          //判断系统是否点击的加号
          if($( a ).html() == '[+]')
          {
              //把新克隆的改为减号
              newdiv.find( 'a' ).html( "[-]" );
              //把克隆的放在后面
              div.after( newdiv );
          }
          else
          {
              div.remove();
          }

        }
    </script>

</body>
</html>