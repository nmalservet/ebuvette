<?php
/* @var $this VenteController */
/* @var $model Vente */

$this->breadcrumbs=array(
	'Ventes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vente', 'url'=>array('index')),
	array('label'=>'Create Vente', 'url'=>array('create')),
	array('label'=>'View Vente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vente', 'url'=>array('admin')),
);
?>

<h1>Update Vente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>