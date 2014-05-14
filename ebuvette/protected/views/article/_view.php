<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prix_de_vente_unitaire')); ?>:</b>
	<?php echo CHtml::encode($data->prix_de_vente_unitaire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cout_unitaire')); ?>:</b>
	<?php echo CHtml::encode($data->cout_unitaire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_unite')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_unite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>