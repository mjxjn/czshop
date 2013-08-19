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
        <?php echo (L("app_name")); ?> <a href="#"><?php echo (L("global_set")); ?></a> > <?php echo (L("adminuser")); ?>
    </div>
   	<div class="install mt10">
    	<dl>
        	<dt><a href="<?php echo U('adminUser/index');?>" ><?php echo (L("adminlist")); ?></a><a href="<?php echo U('adminUser/create');?>" class="hover"><?php echo (L("adminadd")); ?></a></dt>
            <form name="form" action="<?php echo U('adminUser/create');?>" method='post' id="form" >
            <dd> 
            	<ul class="web">
                    <li>
                        <strong><?php echo (L("admin_id")); ?>：</strong>
                            <input type="text" name="admin_name" value="" class="text_input" /><span><?php echo (L("tips_admin_id")); ?></span>
                    </li>
                    <li>
                        <strong><?php echo (L("password")); ?>：</strong>
                            <input type="password" name="password" value="" class="text_input" /><span><?php echo (L("tips_password")); ?></span>
                    </li>
                    <li>
                        <strong><?php echo (L("repassword")); ?>：</strong>
                            <input type="password" name="repassword" value="" class="text_input" /><span><?php echo (L("tips_repassword")); ?></span>
                    </li>
                    <li>
                        <strong><?php echo (L("admin_status")); ?>：</strong>
                        <b>
                            <label><input type="radio" name="status" checked value="0" id="status_0" /> <?php echo (L("open")); ?> </label>
                            <label><input type="radio" name="status" value="1" id="status_1" /> <?php echo (L("close")); ?> </label>
                        </b>
                        <span></span>
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
        <?php echo (L("copy")); ?>
    </div>
</div>
<script>
$(function(){
	$(".odd li:odd").css("background","#fff");
	$(".even li:even").css("background","#fff");
});
</script>