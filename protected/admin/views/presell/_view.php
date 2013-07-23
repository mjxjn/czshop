<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->presell_id),array('view','id'=>$data->presell_id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_price')); ?>:</b>
	<?php echo CHtml::encode($data->presell_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_payment')); ?>:</b>
	<?php echo CHtml::encode($data->presell_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_people_one')); ?>:</b>
	<?php echo CHtml::encode($data->presell_people_one); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_price_one')); ?>:</b>
	<?php echo CHtml::encode($data->presell_price_one); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_people_two')); ?>:</b>
	<?php echo CHtml::encode($data->presell_people_two); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_price_two')); ?>:</b>
	<?php echo CHtml::encode($data->presell_price_two); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_people_three')); ?>:</b>
	<?php echo CHtml::encode($data->presell_people_three); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presell_price_three')); ?>:</b>
	<?php echo CHtml::encode($data->presell_price_three); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('infos')); ?>:</b>
	<?php echo CHtml::encode($data->infos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />

	*/ ?>

</div>