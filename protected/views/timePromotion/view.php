<?php
$this->breadcrumbs=array(
	'Time Promotions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TimePromotion','url'=>array('index')),
	array('label'=>'Create TimePromotion','url'=>array('create')),
	array('label'=>'Update TimePromotion','url'=>array('update','id'=>$model->tp_id)),
	array('label'=>'Delete TimePromotion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->tp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TimePromotion','url'=>array('admin')),
);
?>

<h1>View TimePromotion #<?php echo $model->tp_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'tp_id',
		'name',
		'status',
		'start_time',
		'end_time',
		'infos',
	),
)); ?>
