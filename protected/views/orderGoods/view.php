<?php
$this->breadcrumbs=array(
	'Order Goods'=>array('index'),
	$model->og_id,
);

$this->menu=array(
	array('label'=>'List OrderGoods','url'=>array('index')),
	array('label'=>'Create OrderGoods','url'=>array('create')),
	array('label'=>'Update OrderGoods','url'=>array('update','id'=>$model->og_id)),
	array('label'=>'Delete OrderGoods','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->og_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderGoods','url'=>array('admin')),
);
?>

<h1>View OrderGoods #<?php echo $model->og_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'og_id',
		'order_id',
		'goods_id',
		'goods_name',
		'goods_sn',
		'goods_number',
		'goods_attr_id',
		'attr_name',
		'goods_price',
		'integral',
		'integral_money',
		'goods_amount',
	),
)); ?>
