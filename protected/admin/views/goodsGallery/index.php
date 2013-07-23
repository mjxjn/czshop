<?php
$this->breadcrumbs=array(
	'Goods Galleries',
);

$this->menu=array(
	array('label'=>'Create GoodsGallery','url'=>array('create')),
	array('label'=>'Manage GoodsGallery','url'=>array('admin')),
);
?>

<h1>Goods Galleries</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
