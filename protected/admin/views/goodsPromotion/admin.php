<?php
$this->breadcrumbs=array(
	'Goods Promotions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GoodsPromotion','url'=>array('index')),
	array('label'=>'Create GoodsPromotion','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('goods-promotion-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Goods Promotions</h1>

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
	'id'=>'goods-promotion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'gp_id',
		'name',
		'status',
		'start_time',
		'end_time',
		'infos',
		/*
		'op_type',
		'brand_id',
		'cid',
		'min_price',
		'bouns_id',
		'add_time',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
