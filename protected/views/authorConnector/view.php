<?php
$this->breadcrumbs=array(
	'Author Connectors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AuthorConnector','url'=>array('index')),
	array('label'=>'Create AuthorConnector','url'=>array('create')),
	array('label'=>'Update AuthorConnector','url'=>array('update','id'=>$model->userId)),
	array('label'=>'Delete AuthorConnector','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->userId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AuthorConnector','url'=>array('admin')),
);
?>

<h1>View AuthorConnector #<?php echo $model->userId; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'userId',
		'name',
		'infos',
		'logo',
		'openId',
		'source',
		'accessToken',
		'createTime',
		'validate',
		'status',
	),
)); ?>
