<?php
$this->breadcrumbs=array(
	'Bookings',
);

$this->menu=array(
	array('label'=>'Create Booking','url'=>array('create')),
	array('label'=>'Manage Booking','url'=>array('admin')),
);
?>

<h1>Bookings</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
