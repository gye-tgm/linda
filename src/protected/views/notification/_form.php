<?php
/* @var $this NotificationController */
/* @var $model Notification */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notification-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'eventid'); ?>
		<?php echo $form->textField($model,'eventid'); ?>
		<?php echo $form->error($model,'eventid'); ?>
	
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
		<?php echo $form->error($model,'time'); ?>
	
		<p>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    		'label'=>$model->isNewRecord ? 'Create' : 'Save',
    		'type'=>'primary',
    		'size'=>'null',
		)); ?>
	

<?php $this->endWidget(); ?>

</div>