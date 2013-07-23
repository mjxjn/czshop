<?php
$this->breadcrumbs=array(
	'Time Goods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TimeGoods','url'=>array('index')),
	array('label'=>'Manage TimeGoods','url'=>array('admin')),
);
?>

<h1>Create TimeGoods</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>