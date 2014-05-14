<?php
/* @var $this RetraitController */
/* @var $model Retrait */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'retrait-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'montant'); ?>
		<?php echo $form->textField($model,'montant',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'montant'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->