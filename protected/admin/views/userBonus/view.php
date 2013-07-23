<?php
$this->breadcrumbs=array(
	'User Bonuses'=>array('index'),
	$model->ub_id,
);

$this->menu=array(
	array('label'=>'List UserBonus','url'=>array('index')),
	array('label'=>'Create UserBonus','url'=>array('create')),
	array('label'=>'Update UserBonus','url'=>array('update','id'=>$model->ub_id)),
	array('label'=>'Delete UserBonus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->ub_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserBonus','url'=>array('admin')),
);
?>

<h1>View UserBonus #<?php echo $model->ub_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'ub_id',
		'bonus_id',
		'bonus_sn',
		'user_id',
		'used_time',
		'order_id',
		'add_time',
	),
)); ?>
