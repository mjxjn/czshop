<?php
$this->breadcrumbs=array(
	'Time Promotions'=>array('index'),
	$model->name=>array('view','id'=>$model->tp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TimePromotion','url'=>array('index')),
	array('label'=>'Create TimePromotion','url'=>array('create')),
	array('label'=>'View TimePromotion','url'=>array('view','id'=>$model->tp_id)),
	array('label'=>'Manage TimePromotion','url'=>array('admin')),
);
?>

<h1>Update TimePromotion <?php echo $model->tp_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>