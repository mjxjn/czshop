<?php
$this->breadcrumbs=array(
	'Presells',
);

$this->menu=array(
	array('label'=>'Create Presell','url'=>array('create')),
	array('label'=>'Manage Presell','url'=>array('admin')),
);
?>

<h1>Presells</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
