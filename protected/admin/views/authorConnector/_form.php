<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'author-connector-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'infos',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'logo',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'openId',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'source',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'accessToken',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'createTime',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'validate',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
