<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('og_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->og_id),array('view','id'=>$data->og_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_name')); ?>:</b>
	<?php echo CHtml::encode($data->goods_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_sn')); ?>:</b>
	<?php echo CHtml::encode($data->goods_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_number')); ?>:</b>
	<?php echo CHtml::encode($data->goods_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_attr_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_attr_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_name')); ?>:</b>
	<?php echo CHtml::encode($data->attr_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_price')); ?>:</b>
	<?php echo CHtml::encode($data->goods_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral')); ?>:</b>
	<?php echo CHtml::encode($data->integral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral_money')); ?>:</b>
	<?php echo CHtml::encode($data->integral_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_amount')); ?>:</b>
	<?php echo CHtml::encode($data->goods_amount); ?>
	<br />

	*/ ?>

</div>