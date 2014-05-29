<?php
/* @var $this AppointmentArrangementController */
/* @var $model AppointmentArrangement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'appointment-arrangement-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'terminid'); ?>
		<?php echo $form->textField($model,'terminid'); ?>
		<?php echo $form->error($model,'terminid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userid'); ?>
		<?php echo $form->textField($model,'userid'); ?>
		<?php echo $form->error($model,'userid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eventid'); ?>
		<?php echo $form->textField($model,'eventid'); ?>
		<?php echo $form->error($model,'eventid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->