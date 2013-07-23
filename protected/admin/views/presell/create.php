<?php
$this->breadcrumbs=array(
	'Presells'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Presell','url'=>array('index')),
	array('label'=>'Manage Presell','url'=>array('admin')),
);
?>

<h1>Create Presell</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>