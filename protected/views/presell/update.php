<?php
$this->breadcrumbs=array(
	'Presells'=>array('index'),
	$model->presell_id=>array('view','id'=>$model->presell_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Presell','url'=>array('index')),
	array('label'=>'Create Presell','url'=>array('create')),
	array('label'=>'View Presell','url'=>array('view','id'=>$model->presell_id)),
	array('label'=>'Manage Presell','url'=>array('admin')),
);
?>

<h1>Update Presell <?php echo $model->presell_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>