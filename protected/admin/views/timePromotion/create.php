<?php
$this->breadcrumbs=array(
	'Time Promotions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TimePromotion','url'=>array('index')),
	array('label'=>'Manage TimePromotion','url'=>array('admin')),
);
?>

<h1>Create TimePromotion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>