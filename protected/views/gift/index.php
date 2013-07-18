<?php
$this->breadcrumbs=array(
	'Gifts',
);

$this->menu=array(
	array('label'=>'Create Gift','url'=>array('create')),
	array('label'=>'Manage Gift','url'=>array('admin')),
);
?>

<h1>Gifts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
