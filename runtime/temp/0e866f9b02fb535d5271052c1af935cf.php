<?php /*a:3:{s:60:"D:\phpEnv\www\shop\application\admin\view\recommend\lst.html";i:1562142514;s:57:"D:\phpEnv\www\shop\application\admin\view\public\top.html";i:1557143759;s:58:"D:\phpEnv\www\shop\application\admin\view\public\left.html";i:1562747911;}*/ ?>
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
                <li>
                    <a href="<?php echo url('categorybrand/lst'); ?>">
                        <span class="menu-text">
                            品牌关联列表
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
                       <li><a href="<?php echo url('Index/index'); ?>">系统</a></li>
                      <li class="active">推荐位列表</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                <a href="<?php echo url('recommend/add'); ?>" class="btn btn-azure btn-sm"><i class="fa fa-plus"></i> Add</a>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center">编号</th>
                                                <th class="text-center">推荐位名称</th>
                                                <th class="text-center">推荐位类型</th>
                                                <th class="text-center">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($recAll) || $recAll instanceof \think\Collection || $recAll instanceof \think\Paginator): $i = 0; $__LIST__ = $recAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rec): $mod = ($i % 2 );++$i;?>
                                              <tr>
                                                <td align="center"><?php echo htmlentities($rec['id']); ?></td>
                                                <td align="center"><?php echo htmlentities($rec['rec_name']); ?></td>
                                                <td align="center"><?php if($rec['rec_type'] == 1): ?>商品<?php else: ?>栏目<?php endif; ?></td>
                                                <td align="center">
                                                    <a href="<?php echo url('recommend/edit',['id'=>$rec['id']]); ?>" class="btn btn-azure btn-sm">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <a href="<?php echo url('recommend/del',['id'=>$rec['id']]); ?>" onClick="return confirm('你确认要删除这条记录吗？') ? true : false;"  class="btn btn-darkorange btn-sm">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="text-align:right; margin-top:10px;">
                                    <?php echo $recAll; ?>
                                </div>
                                <div>
                                </div>
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
    <!--Beyond Scripts-->
    <script src="http://shop.com/public/static/admin/js/beyond.js"></script>
    <script src="http://shop.com/public/static/admin/js/index.js"></script>
</body>
</html>