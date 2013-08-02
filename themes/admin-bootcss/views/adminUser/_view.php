<?php
/* @var $this AdminUserController */
/* @var $data AdminUser */
?>
	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->admin_id), array('view', 'id'=>$data->admin_id)); ?></td>
		<td class="center">
			<?php echo CHtml::encode($data->admin_name); ?></td>
		<td class="center">
			<?php echo CHtml::encode($data->email); ?></td>
		<td class="center">
			<?php echo CHtml::encode($data->last_login); ?></td>
		<td class="center">
			<?php echo CHtml::encode($data->last_ip); ?></td>
		<td class="center">
			<?php echo CHtml::encode($data->login_count); ?></td>
		<td class="center">
			<?php echo CHtml::encode($data->add_time); ?></td>
		<td class="center">
			<a class="btn btn-success" href="#"> <i class="icon-zoom-in icon-white"></i>
				View
			</a>
			<a class="btn btn-info" href="#"> <i class="icon-edit icon-white"></i>
				Edit
			</a>
			<a class="btn btn-danger" href="#">
				<i class="icon-trash icon-white"></i>
				Delete
			</a>
		</td>
	</tr>