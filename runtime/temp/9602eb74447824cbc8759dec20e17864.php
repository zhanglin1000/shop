<?php /*a:3:{s:58:"D:\phpEnv\www\shop\application\admin\view\article\add.html";i:1557843273;s:57:"D:\phpEnv\www\shop\application\admin\view\public\top.html";i:1557143759;s:58:"D:\phpEnv\www\shop\application\admin\view\public\left.html";i:1559225507;}*/ ?>
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
                        <a href="<?php echo url('article/lst'); ?>">文章管理</a>
                      </li>
                       <li class="active">添加文章</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                 <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
          <div class="widget">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url('article/add'); ?>" method="post" enctype="multipart/form-data">
                        <div class="widget-body">
                            <div class="widget-main ">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                        <li class="active">
                                            <a data-toggle="tab" href="#home1">
                                                通用信息
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#home2">
                                                文章内容
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tabs-flat">
                                        <div id="home1" class="tab-pane active">
                                            <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label no-padding-right">文章标题</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="title" placeholder="文章标题" name="title" required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label no-padding-right">文章分类</label>
                                                <div class="col-sm-6">
                                                    <select name="cate_id" style="width: 100%;">
                                                        <option selected="selected" value="">请选择</option>

                                                        <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                        <option onclick="article_status(this)" article_url="<?php echo url('article/article_status'); ?>" value="<?php echo htmlentities($cate['id']); ?>"><?php if($cate['pid'] != 0): ?><?php echo '♩'.str_repeat('-',$cate['level'] * 8); ?><?php endif; ?><?php echo htmlentities($cate['cate_name']); ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>

                                                    </select>

                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label no-padding-right">文章重要性</label>
                                                <div class="col-sm-6">
                                                    <label style="margin:8px 8px 0 0;">
                                                        <input name="important" checked type="radio" value="1" class="colored-blue">
                                                        <span class="text">普通</span>
                                                    </label>
                                                    <label style="margin:8px 8px 0 0;">
                                                        <input name="important" type="radio" value="2" class="colored-blue">
                                                        <span class="text">置顶</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label no-padding-right">是否显示</label>
                                                <div class="col-sm-6">
                                                    <label style="margin:8px 8px 0 0;">
                                                        <input name="status" checked type="radio" value="1" class="colored-blue">
                                                        <span class="text">显示</span>
                                                    </label>
                                                    <label style="margin:8px 8px 0 0;">
                                                        <input name="status" type="radio" value="0" class="colored-blue">
                                                        <span class="text">隐藏</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="author" class="col-sm-2 control-label no-padding-right">文章作者</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="author" placeholder="文章作者" name="author" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label no-padding-right">作者email</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="email" placeholder="文章email" name="email" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="keyword" class="col-sm-2 control-label no-padding-right">关键字</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="keyword" placeholder="关键字" name="keyword" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="desc" class="col-sm-2 control-label no-padding-right">网页描述</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" id="desc" placeholder="网页描述" name="desc"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="link_url" class="col-sm-2 control-label no-padding-right">外部链接</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="link_url" placeholder="外部链接" name="link_url" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="thumb" class="col-sm-2 control-label no-padding-right">上传文件</label>
                                                <div class="col-sm-6">
                                                    <input id="thumb"  name="thumb" type="file" style="margin-top:8px;">
                                                </div>
                                                <p class="help-block col-sm-4 red">(图片尺寸280*160)</p>
                                            </div>

                                        </div>

                                        <div id="home2" class="tab-pane">
                                            <textarea name="content" id="content"></textarea>
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
    <script src="http://shop.com/public/static/admin/js/index.js"></script>
    <script type="text/javascript">
        UE.getEditor('content');
    </script>

</body>
</html>