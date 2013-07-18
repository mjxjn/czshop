<?php
$this->breadcrumbs=array(
	'Goods Promotions'=>array('index'),
	$model->name=>array('view','id'=>$model->gp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsPromotion','url'=>array('index')),
	array('label'=>'Create GoodsPromotion','url'=>array('create')),
	array('label'=>'View GoodsPromotion','url'=>array('view','id'=>$model->gp_id)),
	array('label'=>'Manage GoodsPromotion','url'=>array('admin')),
);
?>

<h1>Update GoodsPromotion <?php echo $model->gp_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>