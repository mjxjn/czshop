<?php if (!defined('THINK_PATH')) exit();?>
<link rel="stylesheet" type="text/css" href="../Public/images/style.css" />

<!--[if IE 6]>
<script type="text/javascript" src="../Public/js/DD_belatedPNG.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('*');
</script>
<![endif]-->
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="../Public/date/css/jquery.ui.all.css">
<script type="text/javascript" src="../Public/date/jQuery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../Public/date/jQuery/jquery.ui.core.js"></script>
<script type="text/javascript" src="../Public/date/jQuery/jquery.ui.datepicker.js"></script>
<script>
$(function() {
	$( "#datepicker" ).datepicker();
	$( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
	$( "#datepicker1" ).datepicker();
	$( "#datepicker1" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
});
</script>

<div class="content">
    <div class="site">
        Commerz Board <a href="#">管理中心</a> > 管理团队日志
    </div>
   	<div class="install mt10">
	<div class="guanli">
            <form name="form1" id="form1" action="<?php echo U('adminLog/find');?>" method="post">
            	<span>按管理员查看</span>
                <select name="adminid">
                    <?php if(is_array($adminlist)): $i = 0; $__LIST__ = $adminlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["admin_id"]); ?>"><?php echo ($vo["admin_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <input type="image" src="../Public/images/input_2.png" />
                <input type="hidden" name="act" value="byadmin">
            </form>
            <form name="form1" id="form1" action="<?php echo U('adminLog/find');?>" method="post">
                <span>按时间查看</span>
                <div class="day fl">
                    <input type="text" name="starttime" id="datepicker" class="time_input" /><em>~</em><input type="text" name="endtime" id="datepicker1" class="time_input" />
                </div>
                <input type="image" src="../Public/images/input_2.png" />
                <input type="hidden" name="act" value="bytime">
            </form>
            </div>
            	<div class="login mt10">
                	<h3>管理团队日志列表</h3>
                    <div class="table">
                    	<table cellspacing="0" cellpadding="0" border="0" style="font-size: 12px;">
                        	<tr>
                                <th><input type="checkbox" value="" /></th>
                                <th>操作者</th>
                                <th>操作时间</th>
                                <th>IP地址</th>
                                <th>操作记录</th>
                            </tr>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            	<td><input type="checkbox" value="<?php echo ($vo["log_id"]); ?>" /></td>
                            	<td><?php echo ($vo["admin_name"]); ?></td>
                            	<td><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
                            	<td><?php echo ($vo["log_ip"]); ?></td>
                                <td><?php echo ($vo["log_info"]); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </div>
                </div>
                <div class="submit fl">
                	<a href="#">清除日志</a>
                </div>
                <div class="page fr">
                	<?php echo ($page); ?>
                </div>
				<div class="clear"></div>
    </div>
    <div class="copy">
        Powered by Commerz 1.0 版权所有 © 2013 迪米盒子网络科技有限公司，并保留所有权利。
    </div>
</div>
<script>
$(function(){
	$(".odd li:odd").css("background","#fff");
	$(".even li:even").css("background","#fff");
	$(".table tr:odd").css("background","#fff");
});
</script>