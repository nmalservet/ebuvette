<?php
/* @var $this RetraitController */
/* @var $model Retrait */

$this->breadcrumbs=array(
	'Retraits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Retrait', 'url'=>array('index')),
	array('label'=>'Manage Retrait', 'url'=>array('admin')),
);
?>

<h1>Create Retrait</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>