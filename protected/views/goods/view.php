<?php
$this->breadcrumbs=array(
	'Goods'=>array('index'),
	$model->goods_id,
);

$this->menu=array(
	array('label'=>'List Goods','url'=>array('index')),
	array('label'=>'Create Goods','url'=>array('create')),
	array('label'=>'Update Goods','url'=>array('update','id'=>$model->goods_id)),
	array('label'=>'Delete Goods','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->goods_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Goods','url'=>array('admin')),
);
?>

<h1>View Goods #<?php echo $model->goods_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'goods_id',
		'goods_name',
		'goods_sn',
		'goods_code',
		'cid',
		'brand_id',
		'is_onsale',
		'keywords',
		'goods_brief',
		'shop_price',
		'market_price',
		'cost_price',
		'integral',
		'goods_desc',
		'thumb_type',
		'goods_thumb',
		'goods_number',
		'warn_number',
		'goods_weight',
		'goods_type',
		'add_time',
	),
)); ?>
