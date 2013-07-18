<?php
$this->breadcrumbs=array(
	'Time Goods',
);

$this->menu=array(
	array('label'=>'Create TimeGoods','url'=>array('create')),
	array('label'=>'Manage TimeGoods','url'=>array('admin')),
);
?>

<h1>Time Goods</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
