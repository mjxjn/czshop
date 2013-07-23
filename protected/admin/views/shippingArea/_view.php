<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_id')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_config')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_config); ?>
	<br />


</div>