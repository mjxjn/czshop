<?php
$this->breadcrumbs=array(
	'Goods Galleries'=>array('index'),
	$model->gallery_id,
);

$this->menu=array(
	array('label'=>'List GoodsGallery','url'=>array('index')),
	array('label'=>'Create GoodsGallery','url'=>array('create')),
	array('label'=>'Update GoodsGallery','url'=>array('update','id'=>$model->gallery_id)),
	array('label'=>'Delete GoodsGallery','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->gallery_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsGallery','url'=>array('admin')),
);
?>

<h1>View GoodsGallery #<?php echo $model->gallery_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'gallery_id',
		'goods_id',
		'img_url',
		'thumb_url',
		'img_original',
		'is_default',
	),
)); ?>
