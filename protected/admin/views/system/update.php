<?php
$this->breadcrumbs=array(
	'Systems'=>array('index'),
	$model->varname=>array('view','id'=>$model->varname),
	'Update',
);

$this->menu=array(
	array('label'=>'List System','url'=>array('index')),
	array('label'=>'Create System','url'=>array('create')),
	array('label'=>'View System','url'=>array('view','id'=>$model->varname)),
	array('label'=>'Manage System','url'=>array('admin')),
);
?>

<h1>Update System <?php echo $model->varname; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>