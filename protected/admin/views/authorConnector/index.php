<?php
$this->breadcrumbs=array(
	'Author Connectors',
);

$this->menu=array(
	array('label'=>'Create AuthorConnector','url'=>array('create')),
	array('label'=>'Manage AuthorConnector','url'=>array('admin')),
);
?>

<h1>Author Connectors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
