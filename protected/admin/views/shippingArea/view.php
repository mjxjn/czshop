<?php
$this->breadcrumbs=array(
	'Shipping Areas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ShippingArea','url'=>array('index')),
	array('label'=>'Create ShippingArea','url'=>array('create')),
	array('label'=>'Update ShippingArea','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ShippingArea','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ShippingArea','url'=>array('admin')),
);
?>

<h1>View ShippingArea #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status',
		'shipping_id',
		'shipping_config',
	),
)); ?>
