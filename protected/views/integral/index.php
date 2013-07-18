<?php
$this->breadcrumbs=array(
	'Integrals',
);

$this->menu=array(
	array('label'=>'Create Integral','url'=>array('create')),
	array('label'=>'Manage Integral','url'=>array('admin')),
);
?>

<h1>Integrals</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
