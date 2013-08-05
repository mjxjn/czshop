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
			<h2> <i class="icon-edit"></i>
				编辑管理员
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
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'admin-user-form',
					'enableAjaxValidation'=>false,
					'htmlOptions'=>array('class'=>'form-horizontal'),
				)); ?>
				<fieldset>
					<legend>Fields with * are required.</legend>
					<p><?php echo $form->errorSummary($model); ?></p>
					<div class="control-group">
								<label class="control-label" for="disabledInput">管理员ID</label>
								<div class="controls">
								<?php echo $form->textField($model,'admin_id',array('class'=>'input-xlarge disabled','id'=>'disabledInput','disabled'=>'true')); ?>
								</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="admin_name">管理员帐号（*）：</label>
						<div class="controls">
							<?php echo $form->textField($model,'admin_name',array('class'=>'input-xlarge focused','id'=>'admin_name')); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">新密码：</label>
						<div class="controls">
							<?php echo $form->passwordField($model,'password',array('class'=>'input-xlarge focused','value'=>'','id'=>'password'));?>
							<p>留空不改变</p>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password2">确认新密码：</label>
						<div class="controls">
							<?php echo $form->passwordField($model,'password2',array('class'=>'input-xlarge focused','value'=>'','id'=>'password2'));?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email（*）：</label>
						<div class="controls">
							<input class="input-xlarge focused" id="email" type="text" value="<?php echo $model['email'];?>">
						</div>
					</div>
					<div class="control-group">
								<label class="control-label" for="lastLogin">最后登录时间</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="lastLogin" type="text" placeholder="<?php echo F::format_date($model['last_login']);?>" disabled="">
								</div>
					</div>

					<div class="control-group">
								<label class="control-label" for="lastIP">最后登录IP</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="lastIP" type="text" placeholder="<?php echo $model['last_ip'];?>" disabled="">
								</div>
					</div>
					<div class="control-group">
								<label class="control-label" for="addTime">创建时间</label>
								<div class="controls">
								  <input class="input-xlarge disabled" id="addTime" type="text" placeholder="<?php echo F::format_date($model['add_time']);?>" disabled="">
								</div>
					</div>
					<div class="form-actions">
						<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存',array('class'=>'btn btn-primary',)); ?>
						<?php echo CHtml::resetButton('取消',array('class'=>'btn')); ?>
					</div>
				</fieldset>
			<?php $this->endWidget(); ?>

		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->