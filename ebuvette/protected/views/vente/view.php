<?php
/* @var $this VenteController */
/* @var $model Vente */

$this->breadcrumbs=array(
	'Ventes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Vente', 'url'=>array('index')),
	array('label'=>'Create Vente', 'url'=>array('create')),
	array('label'=>'Update Vente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vente', 'url'=>array('admin')),
);
?>

<h1>View Vente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'article_id',
		'user_id',
		'date',
	),
)); ?>
