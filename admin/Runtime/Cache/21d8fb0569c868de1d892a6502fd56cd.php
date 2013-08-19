<?php if (!defined('THINK_PATH')) exit();?>
<link rel="stylesheet" type="text/css" href="../Public/images/style.css" />

<!--[if IE 6]>
<script type="text/javascript" src="../Public/js/DD_belatedPNG.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('*');
</script>
<![endif]-->
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/jq.js"></script>
<div class="content">
    <div class="site">
        <?php echo (L("app_name")); ?> <a href="#"><?php echo (L("global_set")); ?></a> > <?php echo (L("adminuser")); ?>
    </div>
    <div class="install mt10">
        <dl>
            <dt><a href="<?php echo U('adminUser/index');?>" class="hover"><?php echo (L("adminlist")); ?></a><a href="<?php echo U('adminUser/create');?>"><?php echo (L("adminadd")); ?></a></dt>
            <dd>
                <div class="login mt10">
                    <h3><?php echo (L("adminuserlist")); ?></h3>
                    <div class="table">
                        <table cellspacing="0" cellpadding="0" border="0" style="font-size: 12px;">
                            <tr>
                                <th><?php echo (L("admin_name")); ?></th>
                                <th><?php echo (L("last_login")); ?></th>
                                <th><?php echo (L("login_count")); ?></th>
                                <th><?php echo (L("operate")); ?></th>
                            </tr>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php if(($vo["status"]) == "1"): ?><font color="red"><?php endif; echo ($vo["admin_name"]); if(($vo["status"]) == "1"): ?></font><?php endif; ?></td>
                                <td><?php if(($vo["last_login"]) != ""): echo (date('Y-m-d H:i:s',$vo["last_login"])); else: echo (L("no_log")); endif; ?></td>
                                <td><?php echo (($vo["login_count"])?($vo["login_count"]):'0'); ?></td>
                                <td><?php if(($vo["admin_id"]) == "1"): echo (L("super_admin")); else: ?><a href="#" onclick="ajaxPost('adminUser','update','pop_box1',<?php echo ($vo["admin_id"]); ?>)"><?php echo (L("edit")); ?></a><a href="#"><?php echo (L("purview_setting")); ?></a><a href="<?php echo U('adminUser/delete',array('id'=>$vo['admin_id']));?>" onclick="if(confirm('<?php echo (L("verify_delete")); ?>')) return true;  else  return false;"><?php echo (L("delete")); ?></a><?php endif; ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </div>
                </div>
                <div class="page">
                    <?php echo ($page); ?>
                </div>
            </dd>
        </dl>
    </div>
    <div class="copy">
        <?php echo (L("copy")); ?>
    </div>
</div>

<div class="pop_box1" id='pop_box1' style=" display:none;">
    <dl>
        <dt><strong><b><?php echo (L("edit_admin")); ?></b></strong><span><a href="#" class="clos1"><img src="../Public/images/ico_close.png" /></a></span></dt>
        <form name="pop_box1" action="<?php echo U('adminUser/update');?>" method="post" id="form">
        <dd>
            <ul class="web">
                <li>
                    <strong><?php echo (L("admin_name")); ?>：</strong>
                    <input type="text" value="" name='admin_name' id='admin_name' class="text_input"><span><?php echo (L("edit_admin_name")); ?></span>
                </li>
                <li>
                    <strong><?php echo (L("new_password")); ?>：</strong>
                    <input type="password" value="" name='password' id='password' class="text_input"><span><?php echo (L("edit_password")); ?></span>
                </li>
                <li>
                    <strong><?php echo (L("new_repassword")); ?>：</strong>
                    <input type="password" value="" name='repassword' id='repassword' class="text_input"><span><?php echo (L("tips_repassword")); ?></span>
                </li>
                <li>
                    <strong><?php echo (L("admin_status")); ?>：</strong>
                    <label><input type="radio" name="status" value="0" id="status_0" /> <?php echo (L("open")); ?> </label>
                    <label><input type="radio" name="status" value="1" id="status_1" /> <?php echo (L("close")); ?> </label>
                </li>
            </ul>
            <div class="submit1 center mt5">
                <a href="#" class="clos1" onclick='$("#form").submit()'><?php echo (L("save")); ?></a><a href="#" class="clos1"><?php echo (L("cancle")); ?></a>
                <input type="hidden" name="admin_id" id='admin_id' value="" />
                <input type='hidden' name='act' value="edit" />
            </div>
        </dd>
        </form>
    </dl>
</div>
<script>
$(function(){
    $(".odd li:odd").css("background","#fff");
    $(".even li:even").css("background","#fff");
    $(".table tr:odd").css("background","#fff");
});
</script>