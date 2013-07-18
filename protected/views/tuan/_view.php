<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tuan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tuan_id),array('view','id'=>$data->tuan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tuan_price')); ?>:</b>
	<?php echo CHtml::encode($data->tuan_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_number')); ?>:</b>
	<?php echo CHtml::encode($data->min_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />


</div>