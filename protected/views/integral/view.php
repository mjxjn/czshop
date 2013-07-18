<?php
$this->breadcrumbs=array(
	'Integrals'=>array('index'),
	$model->integral_id,
);

$this->menu=array(
	array('label'=>'List Integral','url'=>array('index')),
	array('label'=>'Create Integral','url'=>array('create')),
	array('label'=>'Update Integral','url'=>array('update','id'=>$model->integral_id)),
	array('label'=>'Delete Integral','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->integral_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Integral','url'=>array('admin')),
);
?>

<h1>View Integral #<?php echo $model->integral_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'integral_id',
		'integral_name',
		'integral',
		'integral_money',
		'status',
		'integral_type',
		'integral_config',
		'add_time',
	),
)); ?>
