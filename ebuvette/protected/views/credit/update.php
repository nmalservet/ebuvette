<?php
/* @var $this CreditController */
/* @var $model Credit */

$this->breadcrumbs=array(
	'Credits'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Credit', 'url'=>array('index')),
	array('label'=>'Create Credit', 'url'=>array('create')),
	array('label'=>'View Credit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Credit', 'url'=>array('admin')),
);
?>

<h1>Update Credit <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>