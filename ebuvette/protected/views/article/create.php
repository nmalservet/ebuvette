<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Article', 'url'=>array('admin')),
);
?>

<h1>Créer un article(ou lots)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>