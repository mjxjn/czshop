<?php
/* @var $this AreaController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Area',
);

$this->menu=array(
	array('label'=>'Create Area', 'url'=>array('create')),
	array('label'=>'Manage Area', 'url'=>array('admin')),
);
?>
<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Area</a>
		</li>
	</ul>
</div>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>'<div class="row-fluid sortable">		
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon-user"></i> Area</h2>
					<div class="box-icon">
						<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered">
					  <thead>
						<th colspan="3">地区ID</th>
						<th>地区名</th>
						<th>所属层级</th>
						<th>排序</th>
						<th>操作</th>
					  </thead>   
					  <tbody>
						{items}
					  </tbody>
				  </table>
				  	{pager}
				</div>
			</div>
		</div>',
	    'pagerCssClass'=>'pagination pagination-centered',
	    'pager'=>array(
	        'class'=>'CLinkPager',
	        'cssFile'=>false,
	        'header'=>'',
	        'footer'=>'',
	        'firstPageLabel'=>'首页',
	        'lastPageLabel'=>'尾页',
	        'nextPageLabel'=>'下一页',
	        'prevPageLabel'=>'前一页',
		),
	));
?>
<div id="showArea" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:999999">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">地区修改</h3>
  </div>
  <div class="modal-body">
	<?php foreach ($list as $key => $value) { ?>
		<p id="List_area_<?php echo $value->area_id; ?>"><span class="icon icon-color icon-add" onclick="ajaxList(<?php echo $value->area_id; ?>)"></span>&nbsp;<button class="btn" type="button" id="parent_area"><?php echo $value->area_name; ?></button></p>
	<?php } ?>
  </div>
  <div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	<button class="btn btn-primary">Save changes</button>
  </div>
  <script type="text/javascript">
  	function ajaxList(id){
  		$.post("/admin.php?r=area/ajaxList","ajax=ajax&id="+id,function(msg){
  			$("#List_area_"+id).after(msg);
  			$("#List_area_"+id+" span").removeClass("icon-add").addClass("icon-remove").attr("onclick","closeList("+id+")");
  		});
  	}
  	function closeList(id){
		$(".List_area_"+id).remove();
		$("#List_area_"+id+" span").removeClass("icon-remove").addClass("icon-add").attr("onclick","ajaxList("+id+")");
	}
  </script>
</div>
<div id="editAreaShow" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">地区修改</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" action="__APP__/qq_manage/qq_update_save" method="post" onsubmit="return add_save()">
    	<fieldset>
		  <div class="control-group">
			<label class="control-label">Area_id :</label>
			<div class="controls"><input class="input-xlarge disabled" name="area_id" type="text" id="area_id"></div>
		  </div>
		  <div class="control-group">
			<label class="control-label">Area_name :</label>
			<div class="controls"><input class="input-xlarge focused" name="area_name" type="text" id="area_name"><span class="help-inline"></span></div>
		  </div>
		  <div class="control-group">
			<label class="control-label">Parent_area :</label>
			<div class="controls">
				<input class="input-xlarge focused" name="pid" type="hidden" id="pid">
				<button class="btn" type="button" data-target="#showArea" id="pname" data-toggle="modal"></button>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label">Sort :</label>
			<div class="controls"><input class="input-xlarge focused" name="sort" type="text" id="sort"><span class="help-inline"></span></div>
		  </div>
		</fieldset>
		<div class="modal-footer">
	      <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	   	  <button class="btn btn-primary">Save changes</button>
	    </div>
	</form>
  </div>
</div>
<script type="text/javascript">
	function editArea(area_id){
		$.ajax({
			type:"POST",
			dataType:"json",
			data:{"id":area_id,"ajax":'ajax'},
			url:"/admin.php?r=area/ajaxArea",
			success:function(json) {
				$("#area_id").val(json.area_id);
				$("#area_name").val(json.area_name);
				$("#sort").val(json.sort);

				if(json.grade == 1){
					$("#pname").html("一级地区");
				}
			}
		});
	}
	function show_region(id,grade){
		$.post("/admin.php?r=area/ajaxregion","ajax=ajax&id="+id+"&grade="+grade,function(msg){
			$("#area_"+id).after(msg);
			$("#area_"+id+" span").removeClass("icon-add").addClass("icon-remove").attr("onclick","close_region("+id+","+grade+")");
		})
	}
	function close_region(id,grade){
		$(".area_"+id).remove();
		$("#area_"+id+" span").removeClass("icon-remove").addClass("icon-add").attr("onclick","show_region("+id+","+grade+")");
	}
</script>