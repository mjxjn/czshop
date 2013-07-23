<?php
$this->breadcrumbs=array(
	'Time Promotions',
);

$this->menu=array(
	array('label'=>'Create TimePromotion','url'=>array('create')),
	array('label'=>'Manage TimePromotion','url'=>array('admin')),
);
?>

<h1>Time Promotions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
