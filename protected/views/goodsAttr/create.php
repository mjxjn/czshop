<?php
$this->breadcrumbs=array(
	'Goods Attrs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoodsAttr','url'=>array('index')),
	array('label'=>'Manage GoodsAttr','url'=>array('admin')),
);
?>

<h1>Create GoodsAttr</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>