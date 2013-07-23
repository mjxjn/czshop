<?php
$this->breadcrumbs=array(
	'Presells'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Presell','url'=>array('index')),
	array('label'=>'Create Presell','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('presell-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Presells</h1>

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
	'id'=>'presell-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'presell_id',
		'goods_id',
		'start_time',
		'end_time',
		'presell_price',
		'presell_payment',
		/*
		'presell_people_one',
		'presell_price_one',
		'presell_people_two',
		'presell_price_two',
		'presell_people_three',
		'presell_price_three',
		'infos',
		'add_time',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
