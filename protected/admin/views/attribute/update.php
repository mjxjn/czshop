<?php
$this->breadcrumbs=array(
	'Attributes'=>array('index'),
	$model->attr_id=>array('view','id'=>$model->attr_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attribute','url'=>array('index')),
	array('label'=>'Create Attribute','url'=>array('create')),
	array('label'=>'View Attribute','url'=>array('view','id'=>$model->attr_id)),
	array('label'=>'Manage Attribute','url'=>array('admin')),
);
?>

<h1>Update Attribute <?php echo $model->attr_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>