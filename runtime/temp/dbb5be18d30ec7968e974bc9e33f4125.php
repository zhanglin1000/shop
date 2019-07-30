<?php /*a:1:{s:61:"D:\phpEnv\www\shop\application\member\view\account\login.html";i:1564233661;}*/ ?>
﻿<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="WEBSC" />
<meta name="Description" content="WEBSC" />
<title>雪狐网</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/base.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="http://shop.com/public/static/index/css/quicklinks.css" />
<script type="text/javascript" src="http://shop.com/public/static/index/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://shop.com/public/static/index/js/login.js"></script>
</head>

<body class="bg-ligtGary">

<!----登录模块------->
<div class="login">
    <!----登录头部------>
    <div class="loginRegister-header">
        <div class="w w1200">
            <div class="logo">
                <div class="logoImg"><a href="<?php echo url('index/index'); ?>" class="logo">
                    <img src="http://shop.com/public/static/index/images/logo.png" /></a>
                </div>
            </div>
            <div class="header-href">
                <span>还没有账号<a href="<?php echo url('account/reg'); ?>" class="jump">免费注册</a></span>
            </div>
        </div>
    </div>
    <!-----END------>

    <!----登录中间----->
    <div class="container">
        <div class="login-wrap">
            <div class="w w1200">
                <div class="login-form">
                    <div class="coagent">
                        <div class="tit"><h3>用第三方账号直接登录</h3><span></span></div>
                        <div class="coagent-warp">
                            <a href="#" class="qq">
                                <b class="third-party-icon qq-icon"></b>
                            </a>
                        </div>
                    </div>
                    <div class="login-box">
                        <div class="tit"><h3>账号登录</h3><span></span></div>
                        <div class="form">
                            <form name="formLogin" action="#" method="post">
                                <div class="item">
                                    <div class="item-info">
                                        <i class="iconfont icon-name"></i>
                                        <input type="text" id="username" name="username" class="text" value="" placeholder="用户名/邮箱/手机" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item" ectype="password">
                                    <div class="item-info">
                                        <i class="iconfont icon-password"></i>
                                        <input type="password" id="nloginpwd" name="password" class="text" value="" placeholder="密码" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <input id="remember" name="remember" type="checkbox" class="ui-checkbox">
                                    <label for="remember" class="ui-label">请保存我这次的登录信息。</label>
                                </div>
                                <div class="item item-button">
                                    <input type="submit" name="submit" id="loginSubmit" value="登&nbsp;&nbsp;录" class="btn sc-redBg-btn">
                                </div>
                                <a href="#" class="notpwd gary">忘记密码？</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a class="login-banner" href="https://www.dscmall.cn/" target="_blank" style="background:url(http://shop.com/public/static/index/images/1488936109167439630.jpg) center center no-repeat;"></a>
        </div>
    </div>
    <!-----END------->
</div>
<!-----END------->




<!----登录底部-------->
<div class="footer user-footer">
    <div class="dsc-copyright">
        <div class="w w1200">
            <p class="footer-ecscinfo pb10">

                <a href="#" >首页</a>
                |
                <a href="#" >隐私保护</a>
                |

                <a href="#" >联系我们</a>
                |

                <a href="#" >免责条款</a>
                |
                <a href="#" >公司简介</a>
                |
                <a href="#" >意见反馈</a>
            </p>
            <p class="footer-otherlink">
                <a href="#" target="_blank" title="雪狐网">雪狐网</a>
                |
                <a href="#" target="_blank" title="雪狐商城">雪狐商城</a>
                |
                <a href="#" target="_blank" title="雪狐论坛">雪狐论坛</a>

            </p>
        </div>
    </div>
</div>
<!----END------->

</body>
</html>

