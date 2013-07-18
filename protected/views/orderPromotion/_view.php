<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->op_id),array('view','id'=>$data->op_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('infos')); ?>:</b>
	<?php echo CHtml::encode($data->infos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_type')); ?>:</b>
	<?php echo CHtml::encode($data->op_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brand_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::encode($data->cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_price')); ?>:</b>
	<?php echo CHtml::encode($data->min_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bouns_id')); ?>:</b>
	<?php echo CHtml::encode($data->bouns_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />

	*/ ?>

</div>