<?php
/* @var $this NotificationController */
/* @var $model Notification */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eventid'); ?>
		<?php echo $form->textField($model,'eventid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'typ'); ?>
		<?php echo $form->textField($model,'typ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zeit'); ?>
		<?php echo $form->textField($model,'zeit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->