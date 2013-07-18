<?php
$this->breadcrumbs=array(
	'Order Promotions',
);

$this->menu=array(
	array('label'=>'Create OrderPromotion','url'=>array('create')),
	array('label'=>'Manage OrderPromotion','url'=>array('admin')),
);
?>

<h1>Order Promotions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
