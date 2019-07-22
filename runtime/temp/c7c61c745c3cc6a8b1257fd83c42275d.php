<?php /*a:1:{s:49:"D:\phpEnv\www\shop\thinkphp\tpl/dispatch_jump.tpl";i:1557504455;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>跳转提示</title>
    <link type="text/css" href="http://shop.com/public/static/plugin/layer/theme/default/layer.css"/>
    <script src="http://shop.com/public/static/admin/js/jquery.js"></script>
    <script src="http://shop.com/public/static/plugin/layer/layer.js"></script>
</head>
<body>

     <input type="hidden" name="content"  value="<?php echo(strip_tags($msg));?>"/>
     <input type="hidden" name="url" value="<?php echo($url);?>"/>
    <script type="text/javascript">
        var content = $("[name='content']").val();
        var url = $("[name='url']").val();
        var html = "<span style='font-size:18px; color:#99FF99;'>"+content+"</span>";
        $(function ()
        {
            layer.open({
                 title: '系统提示',
                 content:html,
                 shade: 0.3,
                 anim: 4,
                 time:3000,
                 icon:6,
                 skin: 'layui-layer-lan',
                 end:function()
                 {
                     location.href = url
                 }
            });
        });
    </script>
</body>
</html>
