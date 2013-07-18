<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_attr_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->goods_attr_id),array('view','id'=>$data->goods_attr_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_id')); ?>:</b>
	<?php echo CHtml::encode($data->attr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_name')); ?>:</b>
	<?php echo CHtml::encode($data->attr_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_sn')); ?>:</b>
	<?php echo CHtml::encode($data->attr_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_price')); ?>:</b>
	<?php echo CHtml::encode($data->attr_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrt_number')); ?>:</b>
	<?php echo CHtml::encode($data->arrt_number); ?>
	<br />


</div>