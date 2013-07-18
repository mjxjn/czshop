<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_id')); ?>:</b>
	<?php echo CHtml::encode($data->tp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_code')); ?>:</b>
	<?php echo CHtml::encode($data->goods_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_name')); ?>:</b>
	<?php echo CHtml::encode($data->goods_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_attr')); ?>:</b>
	<?php echo CHtml::encode($data->goods_attr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_price')); ?>:</b>
	<?php echo CHtml::encode($data->goods_price); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('promotion_price')); ?>:</b>
	<?php echo CHtml::encode($data->promotion_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_number')); ?>:</b>
	<?php echo CHtml::encode($data->max_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />

	*/ ?>

</div>