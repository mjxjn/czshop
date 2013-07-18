<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ub_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ub_id),array('view','id'=>$data->ub_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_id')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_sn')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('used_time')); ?>:</b>
	<?php echo CHtml::encode($data->used_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />


</div>