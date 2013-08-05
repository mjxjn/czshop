<tr id="area_<?php echo CHtml::encode($data->area_id); ?>">
	<td width='20'><span class="icon icon-color icon-add" onclick="show_region(<?php echo CHtml::encode($data->area_id); ?>,2)"></span></td>
	<td class="center" colspan='2'><?php echo CHtml::encode($data->area_id); ?></td>
	<td class="center"><?php echo CHtml::encode($data->area_name); ?></td>
	<td class="center"><?php echo CHtml::encode($data->grade); ?></td>
	<td class="center"><?php echo CHtml::encode($data->sort); ?></td>
	<td class="center">
		<a href="javascript:void(0)" data-target="#showArea" role="button" class="btn btn-success" data-toggle="modal" val="<?php echo CHtml::encode($data->area_id); ?>" id="addChildren">
			<i class="icon-edit icon-white"></i>
			添加子地区
		</a>
		<a href="javascript:void(0)" data-target="#editAreaShow" role="button" class="btn btn-success" data-toggle="modal" onclick="editArea(<?php echo CHtml::encode($data->area_id); ?>)">
			<i class="icon-edit icon-white"></i>  
			Edit                                            
		</a>
		<a class="btn btn-danger" href="#">
			<i class=	"icon-trash icon-white"></i> 
			Delete
		</a>
	</td>
</tr>
