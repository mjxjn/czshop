<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */

$this->breadcrumbs=array(
	'Admin Users'=>array('index'),
	$model->admin_id,
);

$this->menu=array(
	array('label'=>'List AdminUser', 'url'=>array('index')),
	array('label'=>'Create AdminUser', 'url'=>array('create')),
	array('label'=>'Update AdminUser', 'url'=>array('update', 'id'=>$model->admin_id)),
	array('label'=>'Delete AdminUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->admin_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AdminUser', 'url'=>array('admin')),
);
?>

<h1>View AdminUser #<?php echo $model->admin_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'admin_id',
		'admin_name',
		'password',
		'email',
		'last_login',
		'last_ip',
		'login_count',
		'add_time',
	),
)); ?>
