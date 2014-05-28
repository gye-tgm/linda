<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ort'); ?>
		<?php echo $form->textField($model,'ort',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beschreibung'); ?>
		<?php echo $form->textField($model,'beschreibung',array('size'=>60,'maxlength'=>8192)); ?>
		<?php echo $form->error($model,'beschreibung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organisatorid'); ?>
		<?php echo $form->textField($model,'organisatorid'); ?>
		<?php echo $form->error($model,'organisatorid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->