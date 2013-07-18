<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallery_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gallery_id),array('view','id'=>$data->gallery_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_url')); ?>:</b>
	<?php echo CHtml::encode($data->img_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumb_url')); ?>:</b>
	<?php echo CHtml::encode($data->thumb_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_original')); ?>:</b>
	<?php echo CHtml::encode($data->img_original); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_default')); ?>:</b>
	<?php echo CHtml::encode($data->is_default); ?>
	<br />


</div>