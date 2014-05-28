<?php
/* @var $this EventController */
/* @var $data Event */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ort')); ?>:</b>
	<?php echo CHtml::encode($data->ort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beschreibung')); ?>:</b>
	<?php echo CHtml::encode($data->beschreibung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organisatorid')); ?>:</b>
	<?php echo CHtml::encode($data->organisatorid); ?>
	<br />


</div>