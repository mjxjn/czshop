<?php
$this->breadcrumbs=array(
	'Shipping Areas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ShippingArea','url'=>array('index')),
	array('label'=>'Create ShippingArea','url'=>array('create')),
	array('label'=>'View ShippingArea','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ShippingArea','url'=>array('admin')),
);
?>

<h1>Update ShippingArea <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>