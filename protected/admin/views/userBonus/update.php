<?php
$this->breadcrumbs=array(
	'User Bonuses'=>array('index'),
	$model->ub_id=>array('view','id'=>$model->ub_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserBonus','url'=>array('index')),
	array('label'=>'Create UserBonus','url'=>array('create')),
	array('label'=>'View UserBonus','url'=>array('view','id'=>$model->ub_id)),
	array('label'=>'Manage UserBonus','url'=>array('admin')),
);
?>

<h1>Update UserBonus <?php echo $model->ub_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>