<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Eventid')); ?>:</b>

	<?php echo CHtml::link(CHtml::encode($data->eventid),array('view','id'=>$data->eventid)); ?>

</div>