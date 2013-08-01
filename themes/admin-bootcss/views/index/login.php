	<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Charisma</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Username and Password.
					</div>
					<!-- <form class="form-horizontal" action="index.html" method="post"> -->
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'login-form',
						'enableAjaxValidation'=>true,
						'enableClientValidation'=>true,
						//'focus'=>array($model,'username'),
						'htmlOptions'=>array('class'=>'form-horizontal'),
						'clientOptions'=>array(
							'validateOnSubmit'=>true,
						),
					)); ?>
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><?php echo $form->textField($model, 'username', array('class'=>'input-large span10','value'=>'admin'));?><?php echo $form->error($model,'username'); ?>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><?php echo $form->passwordField($model,'password',array('class'=>'input-large span10','value'=>'admin123456'));?><?php echo $form->error($model,'password'); ?>
							</div>
							<div class="clearfix"></div>

							<?php if(CCaptcha::checkRequirements()): ?>
							<div class="input-prepend">
								<?php echo $form->labelEx($model,'verifyCode',array('class' => 'span3', 'style'=>'line-height: 28px;'));?>
								<?php echo $form->textField($model,'verifyCode',array('class'=>'input-large span5')); ?>
								<?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?><?php echo $form->error($model,'verifyCode'); ?>
							</div>
							<div class="clearfix"></div>
							<?php endif; ?>

							<div class="input-prepend">
							<label class="remember" for="remember"><?php echo $form->checkBox($model,'rememberMe',array('id'=>'rememberMe','checked'=>'true'))?>Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					<?php $this->endWidget(); ?>
					<!-- </form> -->
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->