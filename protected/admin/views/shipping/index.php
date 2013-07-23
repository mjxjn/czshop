<?php
$this->breadcrumbs=array(
	'Shippings',
);

$this->menu=array(
	array('label'=>'Create Shipping','url'=>array('create')),
	array('label'=>'Manage Shipping','url'=>array('admin')),
);
?>

<h1>Shippings</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
