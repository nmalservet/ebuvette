<h1>Gestion des stocks</h1>

<div>
    <?php
    echo CHtml::link('Créer un article',array('create'));
    ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'article-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'prix_de_vente_unitaire',
		'nom',
		'cout_unitaire',
		'nombre_unite',
                'nombre_restant',
		'date',
	),
)); ?>
