<?php
$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->booking_id,
);

$this->menu=array(
	array('label'=>'List Booking','url'=>array('index')),
	array('label'=>'Create Booking','url'=>array('create')),
	array('label'=>'Update Booking','url'=>array('update','id'=>$model->booking_id)),
	array('label'=>'Delete Booking','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->booking_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Booking','url'=>array('admin')),
);
?>

<h1>View Booking #<?php echo $model->booking_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'booking_id',
		'user_id',
		'email',
		'phone',
		'goods_id',
		'goods_name',
		'booking_time',
		'status',
	),
)); ?>
