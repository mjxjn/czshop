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
        Commerz Board <a href="#">管理中心</a> > 地区管理
    </div>
   	<div class="goods mt10">
        <div class="login mt10">
        	<h3><span class="add_pai"><a href="javascript:void(0)" class="show_box1">添加新地区</a></span>地区列表</h3>
            <div class="table">
                <table cellspacing="0" cellpadding="0" border="0" style="font-size: 12px;">
                    <tr>
                        <th width="19.8%"><strong>地区名称</strong></th>
                        <th width="19.8%"><strong>地区排序</strong></th>
                        <th width="19.8%"><strong>添加子地区</strong></th>
                        <th width="19.8%"><strong>编辑当前地区</strong></th>
                        <th width="19.8%"><strong>删除操作</strong></th>
                    </tr>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($vo["area_id"]); ?>">
                            <td align='left'><b class="areatoggle" val='<?php echo ($vo["area_id"]); ?>' grade="2"><img src="../Public/images/ico_jia.png">&nbsp;<?php echo ($vo["area_name"]); ?></b></td>
                            <td><span><input type="text" value="<?php echo ($vo["sort"]); ?>" class="input_shu" onblur="setsort(<?php echo ($vo["area_id"]); ?>,this.value,<?php echo ($vo["sort"]); ?>)"/></span></td>
                            <td><span><a href="javascript:void(0)" class="show" onclick="addchildren(<?php echo ($vo["area_id"]); ?>,'<?php echo ($vo["area_name"]); ?>')"><img src="../Public/images/ico_33.png" alt="添加子地区" /></a></span></td>
                            <td><span><a href="javascript:void(0)" onclick="modifyarea(<?php echo ($vo["area_id"]); ?>)"><img src="../Public/images/ico_34.png" alt="编辑" /></a></span></td>
                            <td><span class="dell" onclick="dellarea(<?php echo ($vo["area_id"]); ?>,this)"><a href="javascript:void(0)"><img src="../Public/images/ico_cuo.png" alt="删除"/></a></span></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </div>
        <div class="page fr"><?php echo ($page); ?></div>
		<div class="clear"></div>
    </div>
    <div class="copy">
        Powered by Commerz 1.0 版权所有 © 2013 迪米盒子网络科技有限公司，并保留所有权利。
    </div>
</div>
<!-- 添加地区 -->
<div class="pop_box1">
    <dl>
        <dt><strong><b>添加地区</b></strong><span><a href="javascript:void(0)" class="clos1"><img src="../Public/images/ico_close.png" /></a></span></dt>
        <form method="post" action="<?php echo U('area/addsave');?>">
            <dd>
                <ul class="web">
                    <li>
                        <strong>地区名称设置：</strong>
                        <input type="text" class="text_input" name="area_name"><span>设置当前地区名称</span>
                    </li>
                    <li>
                        <strong>上级地区设置：</strong>
                        <select class="addarea" name="pid"></select>
                        <span>选择地区的上级节点</span>
                    </li>
                    <li>
                        <strong>排序：</strong>
                        <input type="text" class="text_input" name="sort"><span>设置当前地区排序，数字越小越靠前</span>
                    </li>
                </ul>
                <div class="submit1 center mt5">
                    <input type="image" src="../Public/images/input_1.png" /><a href="#" class="clos1">取消</a>
                </div>
            </dd>
        </form>
    </dl>
</div>
<script type="text/javascript">
//设置排序
function setsort(area_id,sort,old){

    var Datatype = /^\d{1,4}$/;

    if(false === Datatype.test(sort)){
        alert("只能输入4为以内的数字！");
    }else{
        if(sort != old){
            $.ajax({
                type: "POST",
                url: "<?php echo U('area/ajaxsort');?>",
                data: "sort="+sort+"&area_id="+area_id,
                success: function(msg){
                     if(msg.status=='0'){
                        alert(msg.data);
                    }
                }
            });
        }
    }
}
//删除地区
function dellarea(area_id,tag){
    if(confirm("确定删除？")){
        $.ajax({
            type: "POST",
            url: "<?php echo U('area/ajaxdel');?>",
            data: "area_id="+area_id,
            success: function(msg){
                if(msg.status=='0'){
                    alert(msg.data);
                }else{
                    alert(msg.data);
                    var thistag = tag.parentNode.parentNode;
                    thistag.parentNode.removeChild(thistag);
                }
            }
        });
    }
}
// 取消查询该地区的下级地区
function delarea(area_id,grade){
    $(".tr_"+area_id).remove();
    $("#area_"+area_id).children().children().attr("onclick","getarea("+area_id+","+grade+")");
    $("#area_"+area_id).children().children().children().attr("src","../Public/images/ico_jia.png");
}
// 查看该地区的下级地区
function getarea(area_id,grade){
    $.ajax({
        type: "POST",
        url: "<?php echo U('area/ajaxarea');?>",
        data: "grade="+grade+"&area_id="+area_id,
        success: function(msg){
            if(msg.status=='0'){
                alert(msg.data);
            }else{
                var html = "";
                for(var i in msg.data){
                    msg.data[i].sort = msg.data[i].sort == null ? '0' : msg.data[i].sort;
                    html += '<tr class="tr_'+msg.data[i].pid+'"><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>'+msg.data[i].area_name+'</b></td><td><span><input type="text" value="'+msg.data[i].sort+'" class="input_shu" onblur="setsort('+msg.data[i].area_id+',this.value,'+msg.data[i].sort+')"/></span></td><td>&nbsp;</td><td><span><a href="javascript:void(0)" onclick="modifyarea('+msg.data[i].area_id+')"><img src="../Public/images/ico_34.png" alt="编辑" /></a></span></td><td><span class="dell onclick="dellarea('+msg.data[i].area_id+',this)"><a href="javascript:void(0)"><img src="../Public/images/ico_cuo.png" alt="删除"/></a></span></td></tr>';
                }
                $("#area_"+area_id).after(html);
                $("#area_"+area_id).children().children().attr("onclick","delarea("+area_id+","+grade+")");
                $("#area_"+area_id).children().children().children().attr("src","../Public/images/ico_jian.png");
            }
        }
    });
}
//修改地区
function modifyarea(area_id){
    $(".pop_box1 dl dt b").html("编辑当前地区"); // 弹出框标题
    $(".pop_box1 form").attr("action","<?php echo U('area/modifysave');?>"); // 提交表单的地址
    $("input[name=area_id]").remove(); // 移除area_id
    $(".addarea").html(""); // 清空地区
    $.ajax({
        type: "POST",
        url: "<?php echo U('area/getAreaById');?>",
        data: "area_id="+area_id,
        success: function(msg){
            if(msg.status=='0'){
                alert(msg.data);
            }else{
                $("input[name=area_name]").val(msg.data.area_name);
                $("input[name=sort]").val(msg.data.sort);
                $(".addarea").html('<option value="'+msg.data.pid+'">'+msg.data.parent_name+'</option>');// 上级地区
                $(".addarea").attr("disabled","disabled"); //禁止输入
                $(".pop_box1 form").append("<input type='hidden' name='area_id' value='"+msg.data.area_id+"'>"); //添加area_id隐藏文本
                $(".pop_box1").show();
            }
        }
    }); 
}
//添加子地区
function addchildren(id,name){
    $("input[name=area_name]").val(""); // 清空地区名称
    $("input[name=sort]").val(""); // 清空排序
    $(".addarea").html("<option value='"+id+"'>"+name+"</option>"); // 上级地区
    //$(".addarea").attr("disabled","disabled"); //禁止输入
    $(".pop_box1 dl dt b").html("添加子地区"); // 弹出框标题
    $(".pop_box1 form").attr("action","<?php echo U('area/childrensave');?>"); // 提交表单的地址
    $("input[name=area_id]").remove(); // 移除area_id
    $(".pop_box1").show();
}
$(function(){
    //添加地区
    $(".show_box1").click(function(){
        $("input[name=area_name]").val(""); // 清空地区名称
        $(".addarea").html(""); // 清空地区
        $(".addarea").attr("disabled",false); // 清空禁止输入
        $("input[name=sort]").val(""); // 清空排序
        $(".pop_box1 dl dt b").html("添加地区"); // 弹出框标题
        $(".pop_box1 form").attr("action","<?php echo U('area/addsave');?>"); // 提交表单的地址
        $("input[name=area_id]").remove(); // 移除area_id
        $.ajax({
            type: "POST",
            url: "<?php echo U('area/ajaxaddarea');?>",
            data: "time="+Date.parse(new Date()),
            success: function(msg){
                 if(msg.status=='0'){
                    alert(msg.data);
                }else{
                    var html = "<option value='0'>无上级地区</option>";
                    for(var i in msg.data){
                        var lv2 = "";
                        for(var j in msg.data[i].list){
                            lv2 +='<option value="'+msg.data[i].list[j].area_id+'">&nbsp;&nbsp;&nbsp;--'+msg.data[i].list[j].area_name+'</option>';
                        }
                        html +='<option value="'+msg.data[i].area_id+'">'+msg.data[i].area_name+'</option>'+lv2;
                    }
                    $(".addarea").append(html);
                    $(".pop_box1").show();
                }
            }
        });
    })
    // 关闭弹出层
    $(".clos1").click(function(){
        $(".pop_box1").hide();
    });
    //查看、取消该地区的下级地区
    $(".areatoggle").toggle(
        function(){
            var area_id = $(this).attr("val");
            var grade = $(this).attr("grade");
            thistag = $(this);
            $.ajax({
                type: "POST",
                url: "<?php echo U('area/ajaxarea');?>",
                data: "grade="+grade+"&area_id="+area_id,
                success: function(msg){
                    if(msg.status=='0'){
                        alert(msg.data);
                    }else{
                        var html = "";
                        for(var i in msg.data){
                            msg.data[i].sort = msg.data[i].sort == null ? '0' : msg.data[i].sort;
                            html += '<tr class="tr_'+msg.data[i].pid+'" id="area_'+msg.data[i].area_id+'" lv2="'+msg.data[i].area_id+'"><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;<b val="'+msg.data[i].area_id+'" onclick="getarea('+msg.data[i].area_id+',3)"><img src="../Public/images/ico_jia.png">&nbsp;'+msg.data[i].area_name+'</b></td><td><span><input type="text" value="'+msg.data[i].sort+'" class="input_shu" onblur="setsort('+msg.data[i].area_id+',this.value,'+msg.data[i].sort+')"/></span></td><td><span><a href="javascript:void(0)" class="show" onclick="addchildren(<?php echo ($vo["area_id"]); ?>,'<?php echo ($vo["area_name"]); ?>')"><img src="../Public/images/ico_33.png" alt="添加子地区" /></a></span></td><td><span><a href="javascript:void(0)" onclick="modifyarea('+msg.data[i].area_id+')"><img src="../Public/images/ico_34.png" alt="编辑" /></a></span></td><td><span class="dell" onclick="dellarea('+msg.data[i].area_id+',this)"><a href="javascript:void(0)"><img src="../Public/images/ico_cuo.png" alt="删除"/></a></span></td></tr>';
                        }
                        thistag.parent().parent().after(html);
                        thistag.children().attr("src","../Public/images/ico_jian.png");
                    }
                }
            });
        },
        function(){
            var area_id = $(this).attr("val");
            var lv2 = $(".tr_"+area_id).attr("lv2");
            $(".tr_"+area_id).remove();
            $(".tr_"+lv2).remove();
            thistag.children().attr("src","../Public/images/ico_jia.png")
        }
    );
})
</script>
<script>
$(function(){
    $(".odd li:odd").css("background","#fff");
    $(".even li:even").css("background","#fff");
    $(".table tr:odd").css("background","#fff");
    $(".table_ul li:odd").css("background","#fff");
    $(".table_ul  li:odd li:even").css("background","#f1f1f1");
});
</script>