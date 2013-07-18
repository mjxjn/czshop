<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'root',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'level',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'lang',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'is_show',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'price_attr',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sort',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'seo_title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'seo_keywords',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'seo_description',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
