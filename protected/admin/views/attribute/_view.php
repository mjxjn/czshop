<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->attr_id),array('view','id'=>$data->attr_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_name')); ?>:</b>
	<?php echo CHtml::encode($data->attr_name); ?>
	<br />


</div>