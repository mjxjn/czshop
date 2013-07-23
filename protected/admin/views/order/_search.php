<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'order_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'order_sn',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'order_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'add_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'confirm_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'order_status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pay_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pay_status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'shipping_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'shipping_code',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'shipping_status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'consignee',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'province',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'district',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'zipcode',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'shipping_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'shipping_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'pay_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pay_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'goods_amount',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'shipping_fee',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'card_fee',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'pay_fee',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'money_paid',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'bonus_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bonus_money',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'integral_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'integral_money',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'order_amount',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'pay_note',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'invoice_no',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
