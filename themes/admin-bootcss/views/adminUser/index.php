<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a>
			<span class="divider">/</span>
		</li>
		<li>
			<a href="#">Admin User</a>
		</li>
	</ul>
</div>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2> <i class="icon-user"></i>
				Members
			</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"> <i class="icon-cog"></i>
				</a>
				<a href="#" class="btn btn-minimize btn-round">
					<i class="icon-chevron-up"></i>
				</a>
				<a href="#" class="btn btn-close btn-round">
					<i class="icon-remove"></i>
				</a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered">
				<thead>
					<th>管理员帐号</th>
					<th>最后登录时间</th>
					<th>最后登录IP</th>
					<th>登录次数</th>
					<th>创建时间</th>
					<th>操作</th>
				</thead>
				<tbody>
					<?php foreach($adminUserList as $row):?>
					<tr>
						<td class="center">
							<?php echo $row['admin_name'] ?></td>
						<td class="center">
							<?php echo F::format_date($row['last_login']); ?></td>
						<td class="center">
							<?php echo $row['last_ip'] ?></td>
						<td class="center">
							<?php echo $row['login_count'] ?></td>
						<td class="center">
							<?php echo F::format_date($row['add_time']); ?></td>
						<td class="center">
							<?php echo CHtml::link('<i class="icon-edit icon-white"></i>
								编辑',array('adminuser/update','id'=>$row['admin_id']),array('class'=>'btn btn-info'));?>
							<?php echo CHtml::link('<i class="icon-zoom-in icon-white"></i>
								权限', array('#','id'=>$row['admin_id']),array(
									'class'=>'btn btn-success',
								)); ?>
							<?php echo CHtml::link('<i class="icon-trash icon-white"></i>
								删除', array('adminuser/delete','id'=>$row['admin_id']),array(
									'class'=>'btn btn-danger',
								)); ?>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
			<div class="pagination pagination-centered">
						  <?php
			  				$this->widget('CLinkPager',array(
			  				        'selectedPageCssClass'=>'active',
			  				        'hiddenPageCssClass'=>'',
							        'header'=>'',
							        'firstPageLabel' => '首页',
							        'lastPageLabel' => '末页',
							        'prevPageLabel' => '上一页',
							        'nextPageLabel' => '下一页',
							        'pages' => $pages,
							        'maxButtonCount'=>13,
							        'htmlOptions'=>array(
							        		'class'=>'',
							        		'id'=>'',
							        	)
						        )
						    );
						?>
			</div>   
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->