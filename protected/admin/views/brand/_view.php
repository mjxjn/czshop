<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->brand_id),array('view','id'=>$data->brand_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_name')); ?>:</b>
	<?php echo CHtml::encode($data->brand_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_logo')); ?>:</b>
	<?php echo CHtml::encode($data->brand_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_desc')); ?>:</b>
	<?php echo CHtml::encode($data->brand_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_url')); ?>:</b>
	<?php echo CHtml::encode($data->brand_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_show')); ?>:</b>
	<?php echo CHtml::encode($data->is_show); ?>
	<br />


</div>