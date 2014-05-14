<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

    
                <i>Le prix de vente unitaire est le prix pour une unité du produit qui sera affiché au client:
                    <br> exemple pour un pack de 6 bouteilles de coca, c'est le prix de chaque bouteille de coca<br><br></i>
	<div class="row">

		<?php echo $form->labelEx($model,'prix_de_vente_unitaire'); ?>
		<?php echo $form->textField($model,'prix_de_vente_unitaire',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'prix_de_vente_unitaire'); ?>
	</div>

	<div class="row">
            <i>Le nom affiché dans le tableau de bord des commandes<br></i>
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
            <i>Le cout unitaire ets le cout pour chaque produit: exemple, j'ai acheté 6 bouteilels de coca 3 euros, le prix unitaires est de 0.5 euros.
                <br>Pour le cas particulier de grande bouteille, calculer le cout unitaire d'une dose, d'un verre etc.<br></i>
		<?php echo $form->labelEx($model,'cout_unitaire'); ?>
		<?php echo $form->textField($model,'cout_unitaire',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cout_unitaire'); ?>
	</div>

	<div class="row">
            <i>le nombre d'unité est le nombre d'article de ce type rentrés dans les stockes. Exemple, j'ai acheté mon pack de 6 bouteilles de coca, alors saisir 6.
                <br>ça évite la resaisie de chaque article quand on reçoit un lot</i>
		<?php echo $form->labelEx($model,'nombre_unite'); ?>
		<?php echo $form->textField($model,'nombre_unite'); ?>
		<?php echo $form->error($model,'nombre_unite'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->