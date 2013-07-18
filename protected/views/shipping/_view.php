<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->shipping_id),array('view','id'=>$data->shipping_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_code')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_name')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_desc')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_cod')); ?>:</b>
	<?php echo CHtml::encode($data->is_cod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_gua')); ?>:</b>
	<?php echo CHtml::encode($data->is_gua); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_type')); ?>:</b>
	<?php echo CHtml::encode($data->pay_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_config')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_config); ?>
	<br />

	*/ ?>

</div>