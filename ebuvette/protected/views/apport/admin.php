
<h1>Gestion des Apports</h1>
<div>
    <?php
    echo CHtml::link('Apporter une somme',array('create'));
    ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'apport-grid',
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
