<?php
$this->breadcrumbs=array(
	'Order Goods',
);

$this->menu=array(
	array('label'=>'Create OrderGoods','url'=>array('create')),
	array('label'=>'Manage OrderGoods','url'=>array('admin')),
);
?>

<h1>Order Goods</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
