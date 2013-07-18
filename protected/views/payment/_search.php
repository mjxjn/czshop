<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'pay_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'pay_code',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'pay_logo',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'pay_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textAreaRow($model,'pay_desc',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pay_fee',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'is_cod',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'is_pos',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'pay_config',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
