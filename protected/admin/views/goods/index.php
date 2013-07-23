<?php
$this->breadcrumbs=array(
	'Goods',
);

$this->menu=array(
	array('label'=>'Create Goods','url'=>array('create')),
	array('label'=>'Manage Goods','url'=>array('admin')),
);
?>

<h1>Goods</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
