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
			<h2> <i class="icon-eye-open"></i>
				<?php echo $model['admin_name']; ?>
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
			<form class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="focusedInput">帐号</label>
						<div class="controls">
							<?php echo $model['admin_name']; ?></div>
					</div>
					<div class="control-group">
						<label class="control-label">Email</label>
						<div class="controls">
							<?php echo $model['email']; ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="disabledInput">最后登录时间</label>
						<div class="controls">
							<?php echo $model['last_login']; ?></div>
					</div>
					<div class="control-group">
						<label class="control-label" for="optionsCheckbox2">最后登录IP</label>
						<div class="controls">
								<?php echo $model['last_ip']; ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="optionsCheckbox2">总登录次数</label>
						<div class="controls">
								<?php echo $model['login_count']; ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="optionsCheckbox2">创建时间</label>
						<div class="controls">
								<?php echo $model['add_time']; ?>
						</div>
					</div>
					<div class="form-actions">
						<?php echo CHtml::link("返回",array('adminuser/index'),array(
							'class'=>'btn btn-primary',
						));
						?>
					</div>
				</fieldset>
			</form>

		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->