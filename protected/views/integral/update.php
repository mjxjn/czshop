<?php
$this->breadcrumbs=array(
	'Integrals'=>array('index'),
	$model->integral_id=>array('view','id'=>$model->integral_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Integral','url'=>array('index')),
	array('label'=>'Create Integral','url'=>array('create')),
	array('label'=>'View Integral','url'=>array('view','id'=>$model->integral_id)),
	array('label'=>'Manage Integral','url'=>array('admin')),
);
?>

<h1>Update Integral <?php echo $model->integral_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>