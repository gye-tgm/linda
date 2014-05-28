<?php
/* @var $this NotificationController */
/* @var $data Notification */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventid')); ?>:</b>
	<?php echo CHtml::encode($data->eventid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('typ')); ?>:</b>
	<?php echo CHtml::encode($data->typ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zeit')); ?>:</b>
	<?php echo CHtml::encode($data->zeit); ?>
	<br />


</div>