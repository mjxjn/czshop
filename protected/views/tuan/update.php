<?php
$this->breadcrumbs=array(
	'Tuans'=>array('index'),
	$model->tuan_id=>array('view','id'=>$model->tuan_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tuan','url'=>array('index')),
	array('label'=>'Create Tuan','url'=>array('create')),
	array('label'=>'View Tuan','url'=>array('view','id'=>$model->tuan_id)),
	array('label'=>'Manage Tuan','url'=>array('admin')),
);
?>

<h1>Update Tuan <?php echo $model->tuan_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>