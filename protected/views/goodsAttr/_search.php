<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'goods_attr_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'goods_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'attr_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'attr_name',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'attr_sn',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'attr_price',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'arrt_number',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
