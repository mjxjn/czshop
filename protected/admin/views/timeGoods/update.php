<?php
$this->breadcrumbs=array(
	'Time Goods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TimeGoods','url'=>array('index')),
	array('label'=>'Create TimeGoods','url'=>array('create')),
	array('label'=>'View TimeGoods','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TimeGoods','url'=>array('admin')),
);
?>

<h1>Update TimeGoods <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>