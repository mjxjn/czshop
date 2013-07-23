<?php
$this->breadcrumbs=array(
	'Order Goods'=>array('index'),
	$model->og_id=>array('view','id'=>$model->og_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderGoods','url'=>array('index')),
	array('label'=>'Create OrderGoods','url'=>array('create')),
	array('label'=>'View OrderGoods','url'=>array('view','id'=>$model->og_id)),
	array('label'=>'Manage OrderGoods','url'=>array('admin')),
);
?>

<h1>Update OrderGoods <?php echo $model->og_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>