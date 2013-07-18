<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'presell-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'goods_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'start_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'end_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'presell_price',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'presell_payment',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'presell_people_one',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'presell_price_one',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'presell_people_two',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'presell_price_two',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'presell_people_three',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'presell_price_three',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'infos',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'add_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
