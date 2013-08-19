<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<link rel="stylesheet" type="text/css" href="../Public/images/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="../Public/js/DD_belatedPNG.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('*');
</script>
<![endif]-->
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/jq.js"></script>

</head>

<body>
<div class="header">
	<div class="logo fl"><img src="../Public/images/logo.png" width="160" height="21" alt="" /></div>
	<div class="menu fl">
    	<a href="index.html"  class="hover"><?php echo (L("global_set")); ?></a>
        <a href="index1.html"><?php echo (L("goods_set")); ?></a>
        <a href="index2.html"><?php echo (L("orders_set")); ?></a>
        <a href="index3.html"><?php echo (L("users_set")); ?></a>
        <a href="index4.html"><?php echo (L("promotions_set")); ?></a>
        <a href="#"><?php echo (L("articles_set")); ?></a>
        <a href="index6.html"><?php echo (L("statistics_set")); ?></a>
        <a href="#"><?php echo (L("apps_set")); ?></a>        
    </div>
    <div class="help">
    	<a href="#"><img src="../Public/images/ico_1.png" alt="" /><?php echo (L("clear_cache")); ?></a>
        <a href="#"><img src="../Public/images/ico_2.png" alt="" /><?php echo (L("help")); ?></a>
    </div>
    <div class="clear"></div>
    <div class="welcome">
    	<a href="#"><?php echo (L("welcome")); ?> 古人灏</a>|<a href="#"><?php echo (L("account_set")); ?></a>|<a href="#"><?php echo (L("web_fronts")); ?></a>|<a href="#"><?php echo (L("logout")); ?></a>|
    </div>
</div>
    <div class="side">
                <div class="head">
            <img src="../Public/images/head.jpg" width="43" height="43" alt="" />
        </div>
        <h3><img src="../Public/images/ico_6.png" /><?php echo (L("webmaster")); ?></h3>
        <ul>
            <li><a href="<?php echo U('index/home');?>" class="n1 hover" target="mainFrame"><?php echo (L("backend")); ?></a></li>
            <li><a href="<?php echo U('system/siteset');?>" class="n2" target="mainFrame"><?php echo (L("web_setting")); ?></a></li>
            <li><a href="<?php echo U('system/regset');?>" class="n3" target="mainFrame"><?php echo (L("region_login_setting")); ?></a></li>
            <li><a href="<?php echo U('system/emailset');?>" class="n4" target="mainFrame"><?php echo (L("email_setting")); ?></a></li>
            <li><a href="#" class="n5" target="mainFrame"><?php echo (L("sms_setting")); ?></a></li>
        </ul>
        <ul>
            <li><a href="#" class="n6" target="mainFrame"><?php echo (L("theme_setting")); ?></a></li>
            <li><a href="#" class="n7" target="mainFrame"><?php echo (L("payment_setting")); ?></a></li>
            <li><a href="#" class="n8" target="mainFrame"><?php echo (L("shipping_setting")); ?></a></li>
            <li><a href="<?php echo U('area/index');?>" class="n9" target="mainFrame"><?php echo (L("area_setting")); ?></a></li>
        </ul>
        <ul>
            <li><a href="<?php echo U('adminUser/index');?>" class="n10" target="mainFrame"><?php echo (L("adminuser")); ?></a></li>
            <li><a href="<?php echo U('adminLog/index');?>" class="n11" target="mainFrame"><?php echo (L("admin_log")); ?></a></li>
            <li><a href="#" class="n12" target="mainFrame"><?php echo (L("db_setting")); ?></a></li>
            <li><a href="#" class="n13" target="mainFrame"><?php echo (L("check_file_permissions")); ?></a></li>
            <li><a href="#" class="n14" target="mainFrame"><?php echo (L("system_file_check")); ?></a></li>
        </ul>
    </div>
    
    <div id="Container">
        <div class="ico_left"><img src="../Public/images/ico_8.png" /></div>
        <iframe id="mainFrame" name="mainFrame" frameborder="0"  src="<?php echo U('index/home');?>" width="100%" height="100%" >  
     </iframe> 
    </div>
</body>
</html>