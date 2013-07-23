<?php
$this->breadcrumbs=array(
	'Goods Promotions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List GoodsPromotion','url'=>array('index')),
	array('label'=>'Create GoodsPromotion','url'=>array('create')),
	array('label'=>'Update GoodsPromotion','url'=>array('update','id'=>$model->gp_id)),
	array('label'=>'Delete GoodsPromotion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->gp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsPromotion','url'=>array('admin')),
);
?>

<h1>View GoodsPromotion #<?php echo $model->gp_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'gp_id',
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
