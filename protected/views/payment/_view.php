<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pay_id),array('view','id'=>$data->pay_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_code')); ?>:</b>
	<?php echo CHtml::encode($data->pay_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_logo')); ?>:</b>
	<?php echo CHtml::encode($data->pay_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_name')); ?>:</b>
	<?php echo CHtml::encode($data->pay_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_desc')); ?>:</b>
	<?php echo CHtml::encode($data->pay_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_fee')); ?>:</b>
	<?php echo CHtml::encode($data->pay_fee); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_cod')); ?>:</b>
	<?php echo CHtml::encode($data->is_cod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_pos')); ?>:</b>
	<?php echo CHtml::encode($data->is_pos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_config')); ?>:</b>
	<?php echo CHtml::encode($data->pay_config); ?>
	<br />

	*/ ?>

</div>