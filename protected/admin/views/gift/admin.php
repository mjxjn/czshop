<?php
$this->breadcrumbs=array(
	'Gifts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Gift','url'=>array('index')),
	array('label'=>'Create Gift','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('gift-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gifts</h1>

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
	'id'=>'gift-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'gift_id',
		'gift_name',
		'gift_cid',
		'gift_type',
		'gift_sn',
		'gift_code',
		/*
		'is_on_sale',
		'gift_number',
		'keywords',
		'gift_brief',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
