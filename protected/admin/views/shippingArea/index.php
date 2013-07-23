<?php
$this->breadcrumbs=array(
	'Shipping Areas',
);

$this->menu=array(
	array('label'=>'Create ShippingArea','url'=>array('create')),
	array('label'=>'Manage ShippingArea','url'=>array('admin')),
);
?>

<h1>Shipping Areas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
