<?php
$this->breadcrumbs=array(
	'Shipping Areas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ShippingArea','url'=>array('index')),
	array('label'=>'Manage ShippingArea','url'=>array('admin')),
);
?>

<h1>Create ShippingArea</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>