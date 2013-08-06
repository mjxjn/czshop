<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo F::themeUrl(); ?>/images/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo F::themeUrl(); ?>/js/DD_belatedPNG.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('*');
</script>
<![endif]-->
<script type="text/javascript" src="<?php echo F::themeUrl(); ?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo F::themeUrl(); ?>/js/jq.js"></script>

</head>

<body>
<div class="header">
    <div class="logo fl"><img src="<?php echo F::themeUrl(); ?>/images/logo.png" width="160" height="21" alt="" /></div>
    <div class="menu fl">
        <a href="index.html"  class="hover">全局设置</a>
        <a href="index1.html">商品管理</a>
        <a href="index2.html">订单管理</a>
        <a href="index3.html">会员管理</a>
        <a href="index4.html">运营推广</a>
        <a href="#">内容管理</a>
        <a href="index6.html">统计报表</a>
        <a href="#">应用商店</a>        
    </div>
    <div class="help">
        <a href="#"><img src="<?php echo F::themeUrl(); ?>/images/ico_1.png" alt="" />清除缓存</a>
        <a href="#"><img src="<?php echo F::themeUrl(); ?>/images/ico_2.png" alt="" />帮助</a>
    </div>
    <div class="clear"></div>
    <div class="welcome">
        <a href="#">欢迎您 古人灏</a>|<a href="#">账号管理</a>|<a href="#">网站前台</a>|<a href="#">退出系统</a>|
    </div>
</div>
    <div class="side">
        <div class="head">
            <img src="<?php echo F::themeUrl(); ?>/images/head.jpg" width="43" height="43" alt="" />
        </div>
        <h3><img src="<?php echo F::themeUrl(); ?>/images/ico_6.png" />管理员</h3>
        <ul>
            <li><a href="#" class="n1">后台首页</a></li>
            <li><a href="#" class="n2">站点设置</a></li>
            <li><a href="#" class="n3">注册与登录设置</a></li>
            <li><a href="#" class="n4">邮件服务器设置</a></li>
            <li><a href="#" class="n5">短信服务配置</a></li>
        </ul>
        <ul>
            <li><a href="#" class="n6">主题设置</a></li>
            <li><a href="#" class="n7">支付平台设置</a></li>
            <li><a href="#" class="n8">物流配送方式设置</a></li>
            <li><a href="#" class="n9">地区管理</a></li>
        </ul>
        <ul>
            <li><a href="#" class="n10">后台管理团队</a></li>
            <li><a href="#" class="n11">管理团队日志</a></li>
            <li><a href="#" class="n12">数据库管理</a></li>
            <li><a href="#" class="n13">文件权限检查</a></li>
            <li><a href="#" class="n14">系统文件校验</a></li>
        </ul>
    </div>
    
    <div id="Container">
        <div class="ico_left"><img src="<?php echo F::themeUrl(); ?>/images/ico_8.png" /></div>
        <iframe id="mainFrame" name="mainFrame" frameborder="0"  src="./admin.php?r=index/home" width="100%" height="100%" >  
        </iframe> 
    </div>
    

</body>
</html>
