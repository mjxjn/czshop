<?php
$this->breadcrumbs=array(
	'Brands'=>array('index'),
	$model->brand_id,
);

$this->menu=array(
	array('label'=>'List Brand','url'=>array('index')),
	array('label'=>'Create Brand','url'=>array('create')),
	array('label'=>'Update Brand','url'=>array('update','id'=>$model->brand_id)),
	array('label'=>'Delete Brand','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->brand_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brand','url'=>array('admin')),
);
?>

<h1>View Brand #<?php echo $model->brand_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'brand_id',
		'brand_name',
		'brand_logo',
		'brand_desc',
		'brand_url',
		'sort',
		'is_show',
	),
)); ?>
