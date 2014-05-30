<?php
$this->breadcrumbs=array(
	'Notification Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NotificationUser','url'=>array('index')),
	array('label'=>'Create NotificationUser','url'=>array('create')),
	array('label'=>'Update NotificationUser','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete NotificationUser','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NotificationUser','url'=>array('admin')),
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
