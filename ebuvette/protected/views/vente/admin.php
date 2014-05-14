<h1>Vue des Ventes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vente-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'date',
		array( 
                    'name'=>'article.nom', 
                    'value'=>'$data->article->nom', 
                    'type'=>'raw'
                    ),
            array( 
                    'name'=>'article.prix_de_vente_unitaire', 
                    'value'=>'$data->article->prix_de_vente_unitaire', 
                    'type'=>'raw'
                    ),
		array( 
                    'name'=>'user.username', 
                    'value'=>'$data->user->username', 
                    'type'=>'raw'
                    ),
		
	),
)); ?>
