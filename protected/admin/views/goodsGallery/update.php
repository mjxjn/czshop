<?php
$this->breadcrumbs=array(
	'Goods Galleries'=>array('index'),
	$model->gallery_id=>array('view','id'=>$model->gallery_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsGallery','url'=>array('index')),
	array('label'=>'Create GoodsGallery','url'=>array('create')),
	array('label'=>'View GoodsGallery','url'=>array('view','id'=>$model->gallery_id)),
	array('label'=>'Manage GoodsGallery','url'=>array('admin')),
);
?>

<h1>Update GoodsGallery <?php echo $model->gallery_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>