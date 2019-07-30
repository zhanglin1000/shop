<?php /*a:1:{s:59:"D:\phpEnv\www\shop\application\member\view\account\reg.html";i:1564491991;}*/ ?>
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
<script type="text/javascript" src="http://shop.com/public/static/index/js/register.js"></script>
</head>

<body class="bg-ligtGary">


<div class="register">

    <!----注册头部------>
    <div class="loginRegister-header">
        <div class="w w1200">
            <div class="logo">
                <div class="logoImg"><a href="<?php echo url('index/index/index'); ?>" class="logo">
                    <img src="http://shop.com/public/static/index/images/logo.png" /></a>
                </div>
            </div>
            <div class="header-href">
                <span>还没有账号<a href="#" class="jump">免费注册</a></span>
            </div>
        </div>
    </div>
    <!-----END------>

    <!----注册表单-------->
    <div class="container">
        <div class="w w1200">
            <div class="register-wrap">
                <div class="register-adv">
                    <a href="#" target="_blank">
                        <img width="400" height="324" src="http://shop.com/public/static/index/picture/1488939821671881226.jpg" />
                    </a>
                </div>
                <div class="register-form">
                    <div class="form form-other">
                        <form action="<?php echo url('account/reg'); ?>" method="post" name="formUser">
                            <div class="item">
                                <div class="item-label">用　户　名</div>
                                <div class="item-info">
                                    <input type="text" name="username" id="username" required class="text" value="" autocomplete="off" />
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item">
                                <div class="item-label">设 置 密 码</div>
                                <div class="item-info">
                                    <input type="password" name="password" id="password" required class="text" value="" autocomplete="off" />
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item">
                                <div class="item-label">确 认 密 码</div>
                                <div class="item-info">
                                    <input type="password" name="confirm_password" required id="pwdRepeat" class="text" value="" autocomplete="off" />
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item" id="phone_yz">
                                <div class="item-label">手 机 号 码</div>
                                <div class="item-info">
                                    <input type="text" name="mobile_phone" id="mobile_phone" class="text" value="" autocomplete="off" />
                                    <a href="javascript:void(0);" class="meswitch" ectype="meSwitch" data-type="phone">或邮箱验证</a>
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item" id="email_yz" style="display:none;">
                                <div class="item-label">邮 箱 验 证</div>
                                <div class="item-info">
                                    <input type="text" name="email" id="email" class="text ignore" value="" autocomplete="off" />
                                    <a href="javascript:void(0);" class="meswitch" ectype="meSwitch" data-type="email">或手机验证</a>
                                </div>
                                <div class="input-tip"></div>
                            </div>

                            <div class="item" id="code_email" style="display:none;">
                                <div class="item-label">邮箱验证码</div>
                                <div class="item-info">
                                    <input type="text" name="send_code" id="send_code" class="text text-2 ignore" value="" autocomplete="off" />
                                    <a href="javascript:void(0);" id="zemail" class="sms-btn">获取验证码</a>
                                </div>
                                <div class="input-tip"></div>
                            </div>

                            <div class="item item2">
                                <div class="item-checkbox">
                                    <input type="checkbox" id="clause2" class="ui-solid-checkbox" checked="checked" value="1" name="mobileagreement">
                                    <label class="ui-solid-label" for="clause2">我已阅读并同意<a href="article.php?id=6" class="ftx-05" target="_blank">《用户注册协议》</a></label>
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item item2 item-button">
                                <input type="submit" id="registsubmit" name="Submit" maxlength="8" class="btn sc-redBg-btn" value="立即注册"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----END------>


</div>



<!----注册底部-------->
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

