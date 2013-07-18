<?php
$this->breadcrumbs=array(
	'Attributes'=>array('index'),
	$model->attr_id,
);

$this->menu=array(
	array('label'=>'List Attribute','url'=>array('index')),
	array('label'=>'Create Attribute','url'=>array('create')),
	array('label'=>'Update Attribute','url'=>array('update','id'=>$model->attr_id)),
	array('label'=>'Delete Attribute','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->attr_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attribute','url'=>array('admin')),
);
?>

<h1>View Attribute #<?php echo $model->attr_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'attr_id',
		'type_id',
		'attr_name',
	),
)); ?>
