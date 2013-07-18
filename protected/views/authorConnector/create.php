<?php
$this->breadcrumbs=array(
	'Author Connectors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AuthorConnector','url'=>array('index')),
	array('label'=>'Manage AuthorConnector','url'=>array('admin')),
);
?>

<h1>Create AuthorConnector</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>