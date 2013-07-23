<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'gift_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'gift_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'gift_cid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'gift_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'gift_sn',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'gift_code',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'is_on_sale',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'gift_number',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'keywords',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'gift_brief',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
