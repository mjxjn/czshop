<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'admin_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'admin_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textFieldRow($model,'last_login',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'last_ip',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'login_count',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'add_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
