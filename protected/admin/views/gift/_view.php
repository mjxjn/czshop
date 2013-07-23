<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gift_id),array('view','id'=>$data->gift_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_name')); ?>:</b>
	<?php echo CHtml::encode($data->gift_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_cid')); ?>:</b>
	<?php echo CHtml::encode($data->gift_cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_type')); ?>:</b>
	<?php echo CHtml::encode($data->gift_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_sn')); ?>:</b>
	<?php echo CHtml::encode($data->gift_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_code')); ?>:</b>
	<?php echo CHtml::encode($data->gift_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_on_sale')); ?>:</b>
	<?php echo CHtml::encode($data->is_on_sale); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_number')); ?>:</b>
	<?php echo CHtml::encode($data->gift_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
	<?php echo CHtml::encode($data->keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_brief')); ?>:</b>
	<?php echo CHtml::encode($data->gift_brief); ?>
	<br />

	*/ ?>

</div>