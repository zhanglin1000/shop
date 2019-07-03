<?php /*a:3:{s:64:"D:\phpEnv\www\shop\application\admin\view\config\configlist.html";i:1558621392;s:57:"D:\phpEnv\www\shop\application\admin\view\public\top.html";i:1557143759;s:58:"D:\phpEnv\www\shop\application\admin\view\public\left.html";i:1562113822;}*/ ?>
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
                        <a href="<?php echo url('config/lst'); ?>">配置列表</a>
                      </li>
                       <li class="active">添加配置</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                 <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
          <div class="widget">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url('config/configlist'); ?>" method="post" enctype="multipart/form-data">
                        <div class="widget-body">
                            <div class="widget-main ">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                        <li class="active">
                                            <a data-toggle="tab" href="#home1">
                                                网店设置
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#home2">
                                                商品设置
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tabs-flat">
                                        <div id="home1" class="tab-pane active">
                                            <?php foreach($shopAll as $k => $v): ?>
                                            <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo $v['cname']; ?></label>
                                            <div class="col-sm-6">
                                                <!------文本------->
                                                <?php if($v['field_type'] == 1): ?>
                                                <input class="form-control"  value="<?php echo $v['value']; ?>" name="<?php echo $v['ename']; ?>" type="text">
                                                <?php endif; ?>
                                                <!-----END------->

                                                <!------单选------->
                                                <?php if($v['field_type'] == 2):
                                                    if($v['values']):
                                                     $arr = explode(',',$v['values']);
                                                     foreach($arr as $k1 => $v1):
                                                ?>

                                                <label style="margin-top: 6px; margin-right:5px;">
                                                    <input name="<?php echo $v['ename']; ?>" value="<?php echo $v1; ?>" <?php if($v['value'] == $v1): ?> checked <?php endif; ?>type="radio" class="colored-blue">
                                                    <span class="text"><?php echo $v1; ?></span>
                                                </label>

                                                <?php endforeach; endif; endif;?>
                                                <!-----END------->

                                                <!------复选框------->
                                                <?php if($v['field_type'] == 3):
                                                    $arr1 = explode(',',$v['value']);
                                                   if($v['values']):
                                                     $arr = explode(',',$v['values']);
                                                     foreach($arr as $k1 => $v1):
                                                 ?>
                                                <label style="margin-top: 6px; margin-right:5px;">
                                                    <input type="checkbox" value="<?php echo $v1; ?>" <?php if(in_array($v1,$arr1)): ?> checked <?php endif; ?> name="<?php echo $v['ename']; ?>[]" class="colored-success">
                                                    <span class="text"><?php echo $v1; ?></span>
                                                </label>
                                                <?php endforeach; endif; endif; ?>
                                                <!-----END------->

                                                <!------文本域------->
                                                <?php if($v['field_type'] == 4): ?>
                                                <textarea class="form-control"  name="<?php echo $v['ename']; ?>"><?php echo $v['value'] ; ?></textarea>
                                                <?php endif; ?>
                                                <!-----END------->

                                                <!------文件域------->
                                                <?php if($v['field_type'] == 5): ?>
                                                <input style="margin-top:6px;" type="file" name="<?php echo $v['ename']; ?>" />
                                                    <?php if($v['value']): ?>
                                                     <img style="margin-top:7px;" src="<?php echo APP_PATH.'/public/static/uploads/config/'.$v['value']; ?>" width="50" height="50" />
                                                    <?php else: ?>
                                                     暂无缩略图
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <!-----END------->

                                                <!------下拉框------->
                                                <?php if($v['field_type'] == 6):?>
                                                 <select class="form-control" name="<?php echo $v['ename']; ?>">
                                                     <option value="">请选择</option>
                                                      <?php
                                                       if($v['values']):
                                                          $arr = explode(',',$v['values']);
                                                           foreach($arr as $k1 => $v1):
                                                      ?>
                                                      <option value="<?php echo $v1; ?>" <?php if($v['value'] == $v1): ?> selected <?php endif; ?>><?php echo $v1; ?></option>
                                                     <?php endforeach; endif; ?>
                                                 </select>
                                                <?php endif; ?>
                                                <!-----END------->


                                            </div>
                                           </div>
                                           <?php endforeach; ?>

                                        </div>

                                        <div id="home2" class="tab-pane">
                                            <?php foreach($CommodityAll as $k => $v): ?>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label no-padding-right"><?php echo $v['cname']; ?></label>
                                                <div class="col-sm-6">
                                                    <!------文本------->
                                                    <?php if($v['field_type'] == 1): ?>
                                                    <input class="form-control"  value="<?php echo $v['value']; ?>" name="<?php echo $v['ename']; ?>" type="text">
                                                    <?php endif; ?>
                                                    <!-----END------->

                                                    <!------单选------->
                                                    <?php if($v['field_type'] == 2):
                                                    if($v['values']):
                                                     $arr = explode(',',$v['values']);
                                                     foreach($arr as $k1 => $v1):
                                                    ?>

                                                    <label style="margin-top: 6px; margin-right:5px;">
                                                        <input name="<?php echo $v['ename']; ?>" value="<?php echo $v1; ?>" <?php if($v['value'] == $v1): ?> checked <?php endif; ?>type="radio" class="colored-blue">
                                                        <span class="text"><?php echo $v1; ?></span>
                                                    </label>

                                                    <?php endforeach; endif; endif;?>
                                                    <!-----END------->

                                                    <!------复选框------->
                                                    <?php if($v['field_type'] == 3):
                                                    $arr1 = explode(',',$v['value']);
                                                   if($v['values']):
                                                     $arr = explode(',',$v['values']);
                                                     foreach($arr as $k1 => $v1):
                                                    ?>
                                                    <label style="margin-top: 6px; margin-right:5px;">
                                                        <input type="checkbox" value="<?php echo $v1; ?>" <?php if(in_array($v1,$arr1)): ?> checked <?php endif; ?> name="<?php echo $v['ename']; ?>[]" class="colored-success">
                                                        <span class="text"><?php echo $v1; ?></span>
                                                    </label>
                                                    <?php endforeach; endif; endif; ?>
                                                    <!-----END------->

                                                    <!------文本域------->
                                                    <?php if($v['field_type'] == 4): ?>
                                                    <textarea class="form-control"  name="<?php echo $v['ename']; ?>"><?php echo $v['value'] ; ?></textarea>
                                                    <?php endif; ?>
                                                    <!-----END------->

                                                    <!------文件域------->
                                                    <?php if($v['field_type'] == 5): ?>
                                                    <input style="margin-top:6px;" type="file" name="<?php echo $v['ename']; ?>" />
                                                    <?php if($v['value']): ?>
                                                    <img style="margin-top:7px;" src="<?php echo APP_PATH.'/public/static/uploads/configlist/' ?>" width="50" height="50" />
                                                    <?php else: ?>
                                                    暂无缩略图
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                    <!-----END------->

                                                    <!------下拉框------->
                                                    <?php if($v['field_type'] == 6):?>
                                                    <select class="form-control" name="<?php echo $v['ename']; ?>">
                                                        <option value="">请选择</option>
                                                        <?php
                                                       if($v['values']):
                                                          $arr = explode(',',$v['values']);
                                                           foreach($arr as $k1 => $v1):
                                                        ?>
                                                        <option value="<?php echo $v1; ?>" <?php if($v['value'] == $v1): ?> selected <?php endif; ?>><?php echo $v1; ?></option>
                                                        <?php endforeach; endif; ?>
                                                    </select>
                                                    <?php endif; ?>
                                                    <!-----END------->


                                                </div>
                                            </div>
                                            <?php endforeach; ?>
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
    <script src="http://shop.com/public/static/plugin/layer/layer.js"></script>

</body>
</html>