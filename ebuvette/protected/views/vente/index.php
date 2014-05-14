<?php
/* @var $this VenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ventes',
);

$this->menu=array(
	array('label'=>'Create Vente', 'url'=>array('create')),
	array('label'=>'Manage Vente', 'url'=>array('admin')),
);
?>

<h1>Ventes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
