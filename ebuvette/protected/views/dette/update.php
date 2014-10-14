<?php
/* @var $this DetteController */
/* @var $model Dette */

$this->breadcrumbs=array(
	'Dettes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dette', 'url'=>array('index')),
	array('label'=>'Create Dette', 'url'=>array('create')),
	array('label'=>'View Dette', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dette', 'url'=>array('admin')),
);
?>

<h1>Update Dette <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>