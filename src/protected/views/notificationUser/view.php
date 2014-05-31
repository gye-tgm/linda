<?php
$this->breadcrumbs=array(
	'Notification Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NotificationUser','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create NotificationUser','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Update NotificationUser','url'=>array('update','id'=>$model->id),'icon'=>'refresh'),
	array('label'=>'Delete NotificationUser','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'icon'=>'icon-trash'),
	array('label'=>'Manage NotificationUser','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>View NotificationUser #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'notificationid',
		'userid',
		'isread',
	),
)); ?>
