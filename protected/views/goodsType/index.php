<?php
$this->breadcrumbs=array(
	'Goods Types',
);

$this->menu=array(
	array('label'=>'Create GoodsType','url'=>array('create')),
	array('label'=>'Manage GoodsType','url'=>array('admin')),
);
?>

<h1>Goods Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
