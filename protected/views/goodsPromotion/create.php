<?php
$this->breadcrumbs=array(
	'Goods Promotions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoodsPromotion','url'=>array('index')),
	array('label'=>'Manage GoodsPromotion','url'=>array('admin')),
);
?>

<h1>Create GoodsPromotion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>