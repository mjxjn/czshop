<?php
$this->breadcrumbs=array(
	'Payments'=>array('index'),
	$model->pay_id,
);

$this->menu=array(
	array('label'=>'List Payment','url'=>array('index')),
	array('label'=>'Create Payment','url'=>array('create')),
	array('label'=>'Update Payment','url'=>array('update','id'=>$model->pay_id)),
	array('label'=>'Delete Payment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->pay_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Payment','url'=>array('admin')),
);
?>

<h1>View Payment #<?php echo $model->pay_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'pay_id',
		'pay_code',
		'pay_logo',
		'pay_name',
		'pay_desc',
		'status',
		'pay_fee',
		'is_cod',
		'is_pos',
		'pay_config',
	),
)); ?>
