<?php
$this->breadcrumbs=array(
	'Goods Attrs'=>array('index'),
	$model->goods_attr_id=>array('view','id'=>$model->goods_attr_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsAttr','url'=>array('index')),
	array('label'=>'Create GoodsAttr','url'=>array('create')),
	array('label'=>'View GoodsAttr','url'=>array('view','id'=>$model->goods_attr_id)),
	array('label'=>'Manage GoodsAttr','url'=>array('admin')),
);
?>

<h1>Update GoodsAttr <?php echo $model->goods_attr_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>