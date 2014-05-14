<?php
/* @var $this VenteController */
/* @var $model Vente */

$this->breadcrumbs=array(
	'Ventes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vente', 'url'=>array('index')),
	array('label'=>'Manage Vente', 'url'=>array('admin')),
);
?>

<h1>Create Vente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>