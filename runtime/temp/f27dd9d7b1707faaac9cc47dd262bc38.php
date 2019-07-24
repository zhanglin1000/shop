<?php /*a:3:{s:54:"D:\phpEnv\www\shop\application\admin\view\ad\edit.html";i:1563976648;s:57:"D:\phpEnv\www\shop\application\admin\view\public\top.html";i:1563270465;s:58:"D:\phpEnv\www\shop\application\admin\view\public\left.html";i:1563691095;}*/ ?>
<!DOCTYPE html>
<html>
<head>
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
                        <li style="margin-top:12px;">
                            <div class="avatar">
                                <a href="<?php echo url('base/clearCache'); ?>" style="color:#ffffff;" class="login-area dropdown-toggle">
                                    清理缓存
                                </a>
                            </div>
                        </li>
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
                <i class="menu-icon fa fa-dashboard"></i>
                <span class="menu-text">
                    广告管理
                </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('adpos/lst'); ?>">
                        <span class="menu-text">
                            广告位列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('ad/lst'); ?>">
                        <span class="menu-text">
                            广告列表
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
                <li>
                    <a href="<?php echo url('categoryad/lst'); ?>">
                        <span class="menu-text">
                            左图关联列表
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
                        <a href="<?php echo url('ad/lst'); ?>">广告管理</a>
                    </li>
                    <li class="active">编辑广告</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">编辑广告</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="<?php echo url('ad/edit'); ?>" method="post"
                                          enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo htmlentities($adposFind['id']); ?>"/>
                                        <input type="hidden" name="img_src" value="<?php echo htmlentities($adposFind['img_src']); ?>"/>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">所属广告位</label>
                                            <div class="col-sm-6">
                                                <select name="adpos_id" style="width: 100%;">

                                                    <?php if(is_array($adposRes) || $adposRes instanceof \think\Collection || $adposRes instanceof \think\Paginator): $i = 0; $__LIST__ = $adposRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adpos): $mod = ($i % 2 );++$i;?>
                                                    <option <?php if($adposFind[
                                                    'adpos_id'] == $adpos['id']): ?> selected <?php endif; ?>
                                                    value="<?php echo htmlentities($adpos['id']); ?>"><?php echo htmlentities($adpos['name']); ?></option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="ad_name"
                                                   class="col-sm-2 control-label no-padding-right">广告名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="ad_name" placeholder="广告名称"
                                                       name="ad_name" value="<?php echo htmlentities($adposFind['ad_name']); ?>" required=""
                                                       type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">广告状态</label>
                                            <div class="col-sm-6">
                                                <label style="margin-top:8px;margin-right:8px;">
                                                    <input name="statue" <?php if($adposFind['statue'] == 1): ?>checked<?php endif; ?>
                                                    value="1" type="radio" class="colored-blue">
                                                    <span class="text">开启 </span>
                                                </label>
                                                <label style="margin-top:8px;">
                                                    <input name="statue" <?php if($adposFind['statue'] == 0): ?>checked<?php endif; ?>
                                                    value="0" type="radio" class="colored-blue">
                                                    <span class="text"> 关闭</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">广告类型</label>
                                            <div class="col-sm-6">
                                                <label style="margin-top:8px;margin-right:8px;">
                                                    <input name="ad_type" id="img" <?php if($adposFind['ad_type'] == 1): ?>
                                                    checked <?php else: ?> disabled <?php endif; ?> value="1" type="radio"
                                                    class="colored-blue">
                                                    <span class="text">图片广告 </span>
                                                </label>
                                                <label style="margin-top:8px;">
                                                    <input name="ad_type" <?php if($adposFind['ad_type'] == 2): ?> checked <?php else: ?> disabled <?php endif; ?> id="lh" value="2" type="radio"
                                                    class="colored-blue">
                                                    <span class="text"> 轮播广告</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group img" <?php if($adposFind['ad_type'] == 1): ?> style="display:block;"<?php else: ?> style="display:none;" <?php endif; ?>>
                                        <div style="display:inline-block;width:100%;">
                                            <label class="col-sm-2 control-label no-padding-right">图片地址</label>
                                            <div class="col-sm-6">
                                                <input style="margin-top:8px;" type="file" name="img_src">
                                                <?php if($adposFind['img_src']): ?>
                                                <img src="<?php echo APP_PATH; ?>/public/static/uploads/picture/<?php echo htmlentities($adposFind['img_src']); ?>"
                                                     height="50px;"/>
                                                <?php else: ?>
                                                暂无缩略图
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div style="display:inline-block;width:100%;">
                                            <label style="margin-top:7px;"
                                                   class="col-sm-2 control-label no-padding-right">图片网址</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" style="margin-top:8px;"
                                                       value="<?php echo htmlentities($adposFind['link']); ?>" type="text" name="link">
                                            </div>
                                        </div>
                                </div>

                                <div class="form-group lh" <?php if($adposFind['ad_type'] == 2): ?> style="display:block;"<?php else: ?> style="display:none;" <?php endif; ?>>
                                <?php if(is_array($adflash) || $adflash instanceof \think\Collection || $adflash instanceof \think\Paginator): $i = 0; $__LIST__ = $adflash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adflash): $mod = ($i % 2 );++$i;?>
                                <div style="display:inline-block;width:100%;">
                                    <label class="col-sm-2 control-label no-padding-right" style="margin-top:5px;"><a id="<?php echo htmlentities($adflash['id']); ?>" href="javascript:void(0);"
                                                                                              onclick="addrow(this)"><?php if($i==1): ?>[+]<?php else: ?>[-]<?php endif; ?></a></label>
                                    <div class="col-sm-6">
                                        <img src="<?php echo APP_PATH; ?>/public/static/uploads/pictures/<?php echo htmlentities($adflash['flash_img']); ?>"
                                             width="100" height="50"/>
                                            <input type="text" class="form-control" style="margin:8px 0 0 8px; width:50%; display:inline-block;" value="<?php echo htmlentities($adflash['flash_link']); ?>" name="old_flash_link[<?php echo htmlentities($adflash['id']); ?>]">
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">保存信息</button>
                                </div>
                            </div>
                            </form>
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
<script type="text/javascript">
    function addrow(a) {
        //获取上一级
        var div = $(a).parent().parent();

        //执行克隆
        var newdiv = div.clone();

        //判断系统是否点击的加号
        if ($(a).html() == '[+]') {
            //把新克隆的改为减号
            newdiv = "<div class='form-group lh'><div style='display:inline-block;width:100%;'><label class='col-sm-2 control-label no-padding-right' style='margin-left:10px;'><a href='javascript:void(0);' onclick='addrow(this)'>[-]</a></label><div class='col-sm-6' style='display: flex; justify-content: center;'><input style='margin-top:8px;' type='file' name='flash_img[]'><input type='text' class='form-control' style='display: inline-block; width:50%;' name='flash_link[]'></div></div></div>";
            //把克隆的放在后面
            div.after(newdiv);
        } else {
            var id = $(a).attr('id');

            $.ajax({
                url:"<?php echo url('ad/ajaxDelAd'); ?>",
                type:'post',
                data : {
                    id : id
                },
                dataType:'json',
                success:function(data)
                {
                    if(data == 1)
                    {
                        div.remove();
                    }
                }
            });

           // div.remove();
        }

    }

    $('#img').click(function () {
        $('.img').show();
        $('.lh').hide();
    });

    $('#lh').click(function () {
        $('.img').hide();
        $('.lh').show();
    });


</script>

</body>
</html>