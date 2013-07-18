<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Order','url'=>array('index')),
	array('label'=>'Create Order','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('order-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orders</h1>

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
	'id'=>'order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'order_id',
		'order_sn',
		'order_type',
		'user_id',
		'add_time',
		'confirm_time',
		/*
		'order_status',
		'pay_time',
		'pay_status',
		'shipping_time',
		'shipping_code',
		'shipping_status',
		'consignee',
		'province',
		'city',
		'district',
		'address',
		'zipcode',
		'phone',
		'email',
		'shipping_id',
		'shipping_name',
		'pay_id',
		'pay_name',
		'goods_amount',
		'shipping_fee',
		'card_fee',
		'pay_fee',
		'money_paid',
		'bonus_id',
		'bonus_money',
		'integral_id',
		'integral_money',
		'order_amount',
		'pay_note',
		'invoice_no',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
