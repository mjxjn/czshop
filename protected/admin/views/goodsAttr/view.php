<?php
$this->breadcrumbs=array(
	'Goods Attrs'=>array('index'),
	$model->goods_attr_id,
);

$this->menu=array(
	array('label'=>'List GoodsAttr','url'=>array('index')),
	array('label'=>'Create GoodsAttr','url'=>array('create')),
	array('label'=>'Update GoodsAttr','url'=>array('update','id'=>$model->goods_attr_id)),
	array('label'=>'Delete GoodsAttr','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->goods_attr_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsAttr','url'=>array('admin')),
);
?>

<h1>View GoodsAttr #<?php echo $model->goods_attr_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'goods_attr_id',
		'goods_id',
		'attr_id',
		'attr_name',
		'attr_sn',
		'attr_price',
		'arrt_number',
	),
)); ?>
