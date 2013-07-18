<?php
$this->breadcrumbs=array(
	'Goods'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Goods','url'=>array('index')),
	array('label'=>'Create Goods','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('goods-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Goods</h1>

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
	'id'=>'goods-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'goods_id',
		'goods_name',
		'goods_sn',
		'goods_code',
		'cid',
		'brand_id',
		/*
		'is_onsale',
		'keywords',
		'goods_brief',
		'shop_price',
		'market_price',
		'cost_price',
		'integral',
		'goods_desc',
		'thumb_type',
		'goods_thumb',
		'goods_number',
		'warn_number',
		'goods_weight',
		'goods_type',
		'add_time',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
