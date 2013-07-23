<?php
$this->breadcrumbs=array(
	'User Bonuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserBonus','url'=>array('index')),
	array('label'=>'Manage UserBonus','url'=>array('admin')),
);
?>

<h1>Create UserBonus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>