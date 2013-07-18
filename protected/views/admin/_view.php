<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->admin_id),array('view','id'=>$data->admin_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_name')); ?>:</b>
	<?php echo CHtml::encode($data->admin_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login')); ?>:</b>
	<?php echo CHtml::encode($data->last_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_ip')); ?>:</b>
	<?php echo CHtml::encode($data->last_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_count')); ?>:</b>
	<?php echo CHtml::encode($data->login_count); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />

	*/ ?>

</div>