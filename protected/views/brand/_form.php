<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'brand-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'brand_name',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'brand_logo',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textAreaRow($model,'brand_desc',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'brand_url',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'sort',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'is_show',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
