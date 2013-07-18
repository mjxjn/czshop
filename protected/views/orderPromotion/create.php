<?php
$this->breadcrumbs=array(
	'Order Promotions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderPromotion','url'=>array('index')),
	array('label'=>'Manage OrderPromotion','url'=>array('admin')),
);
?>

<h1>Create OrderPromotion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>