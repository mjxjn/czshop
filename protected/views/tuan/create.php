<?php
$this->breadcrumbs=array(
	'Tuans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tuan','url'=>array('index')),
	array('label'=>'Manage Tuan','url'=>array('admin')),
);
?>

<h1>Create Tuan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>