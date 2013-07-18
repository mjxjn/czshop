<?php
$this->breadcrumbs=array(
	'Goods Promotions',
);

$this->menu=array(
	array('label'=>'Create GoodsPromotion','url'=>array('create')),
	array('label'=>'Manage GoodsPromotion','url'=>array('admin')),
);
?>

<h1>Goods Promotions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
