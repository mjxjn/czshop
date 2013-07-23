<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tp_id),array('view','id'=>$data->tp_id)); ?>
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


</div>