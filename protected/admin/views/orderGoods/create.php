<?php
$this->breadcrumbs=array(
	'Order Goods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderGoods','url'=>array('index')),
	array('label'=>'Manage OrderGoods','url'=>array('admin')),
);
?>

<h1>Create OrderGoods</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>