<?php
$this->breadcrumbs=array(
	'Order Promotions'=>array('index'),
	$model->name=>array('view','id'=>$model->op_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderPromotion','url'=>array('index')),
	array('label'=>'Create OrderPromotion','url'=>array('create')),
	array('label'=>'View OrderPromotion','url'=>array('view','id'=>$model->op_id)),
	array('label'=>'Manage OrderPromotion','url'=>array('admin')),
);
?>

<h1>Update OrderPromotion <?php echo $model->op_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>