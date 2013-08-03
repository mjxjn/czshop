<tr>
	<td><?php echo CHtml::link(CHtml::encode($data->area_id),array('view','id'=>$data->area_id)); ?></td>
	<td class="center"><?php echo CHtml::encode($data->pid); ?></td>
	<td class="center"><?php echo CHtml::encode($data->path); ?></td>
	<td class="center"><?php echo CHtml::encode($data->area_name); ?></td>
	<td class="center"><?php echo CHtml::encode($data->grade); ?></td>
	<td class="center"><?php echo CHtml::encode($data->sort); ?></td>
	<td class="center">
		<a class="btn btn-success" href="#">
			<i class="icon-zoom-in icon-white"></i>  
			View                                            
		</a>
		<a class="btn btn-info" href="#">
			<i class="icon-edit icon-white"></i>  
			Edit                                            
		</a>
		<a class="btn btn-danger" href="#">
			<i class="icon-trash icon-white"></i> 
			Delete
		</a>
	</td>
</tr>