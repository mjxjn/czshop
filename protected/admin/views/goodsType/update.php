<?php
$this->breadcrumbs=array(
	'Goods Types'=>array('index'),
	$model->type_id=>array('view','id'=>$model->type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsType','url'=>array('index')),
	array('label'=>'Create GoodsType','url'=>array('create')),
	array('label'=>'View GoodsType','url'=>array('view','id'=>$model->type_id)),
	array('label'=>'Manage GoodsType','url'=>array('admin')),
);
?>

<h1>Update GoodsType <?php echo $model->type_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>