<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>

		<br />

	
		<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	
		<?php echo CHtml::encode($data->name); ?>
	<br />

	
		<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	
		<?php echo CHtml::encode($data->location); ?>
	<br />

	
		<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	
		<?php echo CHtml::encode($data->description); ?>
	<br />

	
		<b><?php echo CHtml::encode($data->getAttributeLabel('hostid')); ?>:</b>
	
		<?php echo CHtml::encode($data->hostid); ?>
	<br />


</div>
