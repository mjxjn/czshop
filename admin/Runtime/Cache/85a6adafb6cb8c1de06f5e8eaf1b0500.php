<?php if (!defined('THINK_PATH')) exit();?>
<link rel="stylesheet" type="text/css" href="../Public/images/style.css" />

<!--[if IE 6]>
<script type="text/javascript" src="../Public/js/DD_belatedPNG.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('*');
</script>
<![endif]-->
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<div class="content">
    <div class="site">
        Commerz Board <a href="<?php echo U('index/home');?>">管理中心</a> > 邮件服务器设置
    </div>
   	<div class="install mt10">
    	<dl>
        	<dt>
                <a href="<?php echo U('system/emailset');?>" class="hover">邮件设置</a>
                <a href="<?php echo U('system/emailtest');?>">测试发送</a>
            </dt>
            <form method="post" action="<?php echo U('system/save');?>">
                <input name="groupid" value="<?php echo ($groupid); ?>" type="hidden">
                <dd>
                    <ul class="web">
                        <li>
                            <strong><?php echo ($list["0"]["info"]); ?>：</strong>
                            <b style="width:450px;">
                                <?php if(is_array($list["0"]["list"])): $i = 0; $__LIST__ = $list["0"]["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><label><input type="radio" name="system[<?php echo ($list["0"]["varname"]); ?>]" value="<?php echo ($data["val"]); ?>" <?php if(($data["val"]) == $list["0"]["value"]): ?>checked<?php endif; ?>/> <?php echo ($data["lang"]); ?> </label><br /><?php endforeach; endif; else: echo "" ;endif; ?>
                            </b>
                            <span><?php echo ($list["0"]["lang"]); ?></span>
                        </li>
                        <li>
                            <strong><?php echo ($list["1"]["info"]); ?>：</strong>
                            <b style="width:280px;">
                                <?php if(is_array($list["1"]["list"])): $i = 0; $__LIST__ = $list["1"]["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><label><input type="radio" name="system[<?php echo ($list["1"]["varname"]); ?>]" value="<?php echo ($data["val"]); ?>" <?php if(($data["val"]) == $list["1"]["value"]): ?>checked<?php endif; ?>/> <?php echo ($data["lang"]); ?> </label><br /><?php endforeach; endif; else: echo "" ;endif; ?>
                            </b>
                            <span><?php echo ($list["1"]["lang"]); ?></span>
                        </li>
                        <li>
                            <strong><?php echo ($list["2"]["info"]); ?>：</strong>
                            <b>
                                <?php if(is_array($list["2"]["list"])): $i = 0; $__LIST__ = $list["2"]["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><label><input type="radio" name="system[<?php echo ($list["2"]["varname"]); ?>]" value="<?php echo ($data["val"]); ?>" <?php if(($data["val"]) == $list["2"]["value"]): ?>checked<?php endif; ?>/> <?php echo ($data["lang"]); ?> </label><?php endforeach; endif; else: echo "" ;endif; ?>
                            </b>
                            <span><?php echo ($list["2"]["lang"]); ?></span>
                        </li>
                        <li>
                            <strong><?php echo ($list["3"]["info"]); ?>：</strong>
                            <b>
                                <?php if(is_array($list["3"]["list"])): $i = 0; $__LIST__ = $list["3"]["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><label><input type="radio" name="system[<?php echo ($list["3"]["varname"]); ?>]" value="<?php echo ($data["val"]); ?>" <?php if(($data["val"]) == $list["3"]["value"]): ?>checked<?php endif; ?>/> <?php echo ($data["lang"]); ?> </label><?php endforeach; endif; else: echo "" ;endif; ?>
                            </b>
                            <span><?php echo ($list["3"]["lang"]); ?></span>
                        </li>
                    </ul>
                    <div class="input1">
                        <input type="image" src="../Public/images/input_1.png" />
                    </div>
                </dd>
            </form>
        </dl>
    </div>
    <div class="copy">
        Powered by Commerz 1.0 版权所有 © 2013 迪米盒子网络科技有限公司，并保留所有权利。
    </div>
</div>
<script>
$(function(){
	$(".odd li:odd").css("background","#fff");
	$(".even li:even").css("background","#fff");
});
</script>