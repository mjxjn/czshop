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
    	<a href="index.html">全局设置</a>
        <a href="index1.html">商品管理</a>
        <a href="index2.html">订单管理</a>
        <a href="index3.html" class="hover">会员管理</a>
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
        	<li><a href="#" class="h1">会员列表</a></li>
            <li><a href="#" class="h2">会员等级</a></li>
            <li><a href="#" class="h3">添加会员</a></li>
        </ul>
        <ul>
            <li><a href="#" class="h4">咨询列表</a></li>
            <li><a href="#" class="h5">评论列表</a></li>
        </ul>
        <ul>
        	<li><a href="#" class="h6">群发优惠券</a></li>
			<li><a href="#" class="h7">群发短信</a></li>
            <li><a href="#" class="h8">群发站内信</a></li>
            <li><a href="#" class="h9">群发电子邮件</a></li>
        </ul>

    </div>
    
    <div id="Container">
    	<div class="ico_left"><img src="<?php echo F::themeUrl(); ?>/images/ico_8.png" /></div>
        <iframe id="mainFrame" name="mainFrame" frameborder="0"  src="home4.1.1.html" width="100%" height="100%" >  
     </iframe> 
    </div>
    

</body>
</html>
