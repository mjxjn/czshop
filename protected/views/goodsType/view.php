<?php
$this->breadcrumbs=array(
	'Goods Types'=>array('index'),
	$model->type_id,
);

$this->menu=array(
	array('label'=>'List GoodsType','url'=>array('index')),
	array('label'=>'Create GoodsType','url'=>array('create')),
	array('label'=>'Update GoodsType','url'=>array('update','id'=>$model->type_id)),
	array('label'=>'Delete GoodsType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsType','url'=>array('admin')),
);
?>

<h1>View GoodsType #<?php echo $model->type_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'type_id',
		'type_name',
		'is_show',
		'sort',
	),
)); ?>
