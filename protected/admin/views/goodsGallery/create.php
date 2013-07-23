<?php
$this->breadcrumbs=array(
	'Goods Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoodsGallery','url'=>array('index')),
	array('label'=>'Manage GoodsGallery','url'=>array('admin')),
);
?>

<h1>Create GoodsGallery</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>