<?php
$this->breadcrumbs=array(
	'Author Connectors'=>array('index'),
	$model->name=>array('view','id'=>$model->userId),
	'Update',
);

$this->menu=array(
	array('label'=>'List AuthorConnector','url'=>array('index')),
	array('label'=>'Create AuthorConnector','url'=>array('create')),
	array('label'=>'View AuthorConnector','url'=>array('view','id'=>$model->userId)),
	array('label'=>'Manage AuthorConnector','url'=>array('admin')),
);
?>

<h1>Update AuthorConnector <?php echo $model->userId; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>