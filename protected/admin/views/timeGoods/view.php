<?php
$this->breadcrumbs=array(
	'Time Goods'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TimeGoods','url'=>array('index')),
	array('label'=>'Create TimeGoods','url'=>array('create')),
	array('label'=>'Update TimeGoods','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TimeGoods','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TimeGoods','url'=>array('admin')),
);
?>

<h1>View TimeGoods #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tp_id',
		'goods_id',
		'goods_code',
		'goods_name',
		'goods_attr',
		'goods_price',
		'promotion_price',
		'max_number',
		'add_time',
	),
)); ?>
