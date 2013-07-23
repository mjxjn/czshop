<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->integral_id),array('view','id'=>$data->integral_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral_name')); ?>:</b>
	<?php echo CHtml::encode($data->integral_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral')); ?>:</b>
	<?php echo CHtml::encode($data->integral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral_money')); ?>:</b>
	<?php echo CHtml::encode($data->integral_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral_type')); ?>:</b>
	<?php echo CHtml::encode($data->integral_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral_config')); ?>:</b>
	<?php echo CHtml::encode($data->integral_config); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />

	*/ ?>

</div>