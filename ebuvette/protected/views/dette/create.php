<?php
/* @var $this DetteController */
/* @var $model Dette */

$this->breadcrumbs=array(
	'Dettes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dette', 'url'=>array('index')),
	array('label'=>'Manage Dette', 'url'=>array('admin')),
);
?>

<h1>Create Dette</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>