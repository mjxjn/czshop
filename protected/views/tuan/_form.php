<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tuan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'goods_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'start_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'end_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tuan_price',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'min_number',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'add_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
