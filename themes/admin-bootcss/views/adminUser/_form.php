<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admin-user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_name'); ?>
		<?php echo $form->textField($model,'admin_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'admin_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login'); ?>
		<?php echo $form->textField($model,'last_login',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'last_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_ip'); ?>
		<?php echo $form->textField($model,'last_ip',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'last_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_count'); ?>
		<?php echo $form->textField($model,'login_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'login_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_time'); ?>
		<?php echo $form->textField($model,'add_time'); ?>
		<?php echo $form->error($model,'add_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->