<?php
/* @var $this DetteController */
/* @var $model Dette */

$this->breadcrumbs=array(
	'Dettes'=>array('index'),
	'Manage',
);


?>

<h1>Gestion des dettes</h1>

<p>
Vous pouvez gérer ici les crédits alloués aux membres pour éviter de toujours avoir besoin de monnaie et avoir un peu de trésorerie.
</p>
<div>
    <?php
    echo CHtml::link('Créer une dette',array('create'));
    ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dette-grid',
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
