<h1>Gestion des Retraits</h1>
<div>
    <?php
    echo CHtml::link('retirer une somme',array('create'));
    ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'retrait-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'date',
		'montant',
		array( 
                    'name'=>'user.username', 
                    'value'=>'$data->user->username', 
                    'type'=>'raw'
                    ),
		
	),
)); ?>
