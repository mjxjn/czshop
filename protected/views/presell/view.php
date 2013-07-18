<?php
$this->breadcrumbs=array(
	'Presells'=>array('index'),
	$model->presell_id,
);

$this->menu=array(
	array('label'=>'List Presell','url'=>array('index')),
	array('label'=>'Create Presell','url'=>array('create')),
	array('label'=>'Update Presell','url'=>array('update','id'=>$model->presell_id)),
	array('label'=>'Delete Presell','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->presell_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Presell','url'=>array('admin')),
);
?>

<h1>View Presell #<?php echo $model->presell_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'presell_id',
		'goods_id',
		'start_time',
		'end_time',
		'presell_price',
		'presell_payment',
		'presell_people_one',
		'presell_price_one',
		'presell_people_two',
		'presell_price_two',
		'presell_people_three',
		'presell_price_three',
		'infos',
		'add_time',
	),
)); ?>
