<?php
$this->breadcrumbs=array(
	'Tuans',
);

$this->menu=array(
	array('label'=>'Create Tuan','url'=>array('create')),
	array('label'=>'Manage Tuan','url'=>array('admin')),
);
?>

<h1>Tuans</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
