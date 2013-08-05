<?php
$this->breadcrumbs=array(
	'Systems'=>array('index'),
	$model->varname,
);

$this->menu=array(
	array('label'=>'List System','url'=>array('index')),
	array('label'=>'Create System','url'=>array('create')),
	array('label'=>'Update System','url'=>array('update','id'=>$model->varname)),
	array('label'=>'Delete System','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->varname),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage System','url'=>array('admin')),
);
?>

<h1>View System #<?php echo $model->varname; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'varname',
		'info',
		'groupid',
		'value',
		'lang',
	),
)); ?>
