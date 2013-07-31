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
								<span class="add-on"><i class="icon-user"></i></span><?php echo $form->textField($model, 'username', array('class'=>'input-large span10', 'id'=>'username','value'=>'admin'));?><?php echo $form->error($model,'username'); ?>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><?php echo $form->passwordField($model,'password',array('class'=>'input-large span10','id'=>'id','value'=>'admin123456'));?><?php echo $form->error($model,'password'); ?>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><?php echo $form->checkBox($model,'rememberMe',array('id'=>'rememberMe','checked'=>'true'))?>Remember me</label>
							</div>
							<div class="clearfix"></div>

							<?php if(CCaptcha::checkRequirements()): ?>
							<div class="row">
								<?php echo $form->labelEx($model,'verifyCode'); ?>
								<div>
								<?php $this->widget('CCaptcha'); ?>
								<?php echo $form->textField($model,'verifyCode'); ?>
								</div>
							</div>
							<div class="clearfix"></div>
							<?php endif; ?>

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