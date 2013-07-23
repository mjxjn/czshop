<?php
$this->breadcrumbs=array(
	'Gifts'=>array('index'),
	$model->gift_id,
);

$this->menu=array(
	array('label'=>'List Gift','url'=>array('index')),
	array('label'=>'Create Gift','url'=>array('create')),
	array('label'=>'Update Gift','url'=>array('update','id'=>$model->gift_id)),
	array('label'=>'Delete Gift','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->gift_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gift','url'=>array('admin')),
);
?>

<h1>View Gift #<?php echo $model->gift_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'gift_id',
		'gift_name',
		'gift_cid',
		'gift_type',
		'gift_sn',
		'gift_code',
		'is_on_sale',
		'gift_number',
		'keywords',
		'gift_brief',
	),
)); ?>
