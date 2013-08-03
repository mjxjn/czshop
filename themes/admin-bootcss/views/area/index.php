<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Tables</a>
		</li>
	</ul>
</div>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Areas</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th colspan='3'>地区ID</th>
						<th>地区名</th>
						<th>所属层级</th>
						<th>排序</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $row):?>
						<tr id="area_<?php echo $row["area_id"] ?>">
							<td width='20'><span class="icon icon-color icon-add" onclick="show_region(<?php echo $row["area_id"] ?>,2)"></span></td>
							<td colspan='2'> <?php echo $row["area_id"] ?></td>
							<td class="center"><?php echo $row["area_name"] ?></td>
							<td class="center"><?php echo $row["grade"] ?></td>
							<td class="center"><?php echo $row["sort"] ?></td>
							<td class="center">
								<a class="btn btn-success" href="#">
									<i class="icon-edit icon-white"></i>
									添加子地区
								</a>
								<a class="btn btn-info" href="/admin.php?r=area/update">
									<i class="icon-edit icon-white"></i>
									编辑
								</a>
								<a class="btn btn-danger" href="#" onclick="if(confirm('确实要删除吗?')) return true;  else  return false;">
									<i class="icon-trash icon-white"></i>
									删除
								</a>
							</td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
			<div class="row-fluid">
			  	<div class="span12 center">
			  		<div class="dataTables_paginate paging_bootstrap pagination">
		  				<?php
			  				$this->widget('CLinkPager',array(
						    	'header'=>'',
						        'firstPageLabel' => '首页',
						        'lastPageLabel' => '末页',
						        'prevPageLabel' => '上一页',
						        'nextPageLabel' => '下一页',
						        'pages' => $page,
						        'maxButtonCount'=>13
						        )
						    );
						?>
			  		</div>
			  	</div>
			</div>           
		</div>
	</div>
</div>
<script type="text/javascript">
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