<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'area-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'pid',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'path',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'area_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'grade',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sort',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
