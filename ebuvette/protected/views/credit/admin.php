<?php
/* @var $this CreditController */
/* @var $model Credit */

$this->breadcrumbs=array(
	'Credits'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Credit', 'url'=>array('index')),
	array('label'=>'Create Credit', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#credit-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion des credits</h1>

<p>
Vous pouvez gérer ici les crédits alloués aux membres pour éviter de toujours avoir besoin de monnaie et avoir un peu de trésorerie.
</p>
<div>
    <?php
    echo CHtml::link('Créer un crédit',array('create'));
    ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'credit-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'nom',
		'somme',
		'date',
		array(
			'class'=>'CButtonColumn',
                    'template' =>'{update}{delete}'
		),
	),
)); ?>
