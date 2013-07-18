<?php
$this->breadcrumbs=array(
	'Goods Galleries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GoodsGallery','url'=>array('index')),
	array('label'=>'Create GoodsGallery','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('goods-gallery-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Goods Galleries</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'goods-gallery-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'gallery_id',
		'goods_id',
		'img_url',
		'thumb_url',
		'img_original',
		'is_default',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
