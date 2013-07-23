<?php
$this->breadcrumbs=array(
	'Goods Attrs',
);

$this->menu=array(
	array('label'=>'Create GoodsAttr','url'=>array('create')),
	array('label'=>'Manage GoodsAttr','url'=>array('admin')),
);
?>

<h1>Goods Attrs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
