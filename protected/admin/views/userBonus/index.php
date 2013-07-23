<?php
$this->breadcrumbs=array(
	'User Bonuses',
);

$this->menu=array(
	array('label'=>'Create UserBonus','url'=>array('create')),
	array('label'=>'Manage UserBonus','url'=>array('admin')),
);
?>

<h1>User Bonuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
