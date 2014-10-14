<?php
/* @var $this DetteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dettes',
);

$this->menu=array(
	array('label'=>'Create Dette', 'url'=>array('create')),
	array('label'=>'Manage Dette', 'url'=>array('admin')),
);
?>

<h1>Dettes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
