<?php
$this->breadcrumbs=array(
	'Order Promotions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List OrderPromotion','url'=>array('index')),
	array('label'=>'Create OrderPromotion','url'=>array('create')),
	array('label'=>'Update OrderPromotion','url'=>array('update','id'=>$model->op_id)),
	array('label'=>'Delete OrderPromotion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->op_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderPromotion','url'=>array('admin')),
);
?>

<h1>View OrderPromotion #<?php echo $model->op_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'op_id',
		'name',
		'status',
		'start_time',
		'end_time',
		'infos',
		'op_type',
		'brand_id',
		'cid',
		'min_price',
		'bouns_id',
		'add_time',
	),
)); ?>
