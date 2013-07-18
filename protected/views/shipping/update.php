<?php
$this->breadcrumbs=array(
	'Shippings'=>array('index'),
	$model->shipping_id=>array('view','id'=>$model->shipping_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shipping','url'=>array('index')),
	array('label'=>'Create Shipping','url'=>array('create')),
	array('label'=>'View Shipping','url'=>array('view','id'=>$model->shipping_id)),
	array('label'=>'Manage Shipping','url'=>array('admin')),
);
?>

<h1>Update Shipping <?php echo $model->shipping_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>