<?php
$this->breadcrumbs=array(
	'Tuans'=>array('index'),
	$model->tuan_id,
);

$this->menu=array(
	array('label'=>'List Tuan','url'=>array('index')),
	array('label'=>'Create Tuan','url'=>array('create')),
	array('label'=>'Update Tuan','url'=>array('update','id'=>$model->tuan_id)),
	array('label'=>'Delete Tuan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->tuan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tuan','url'=>array('admin')),
);
?>

<h1>View Tuan #<?php echo $model->tuan_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'tuan_id',
		'goods_id',
		'start_time',
		'end_time',
		'tuan_price',
		'min_number',
		'add_time',
	),
)); ?>
