<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'op_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'start_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'end_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'infos',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'op_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'brand_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'min_price',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'bouns_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'add_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
