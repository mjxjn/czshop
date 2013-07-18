<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'admin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'admin_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textFieldRow($model,'last_login',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'last_ip',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'login_count',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'add_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
