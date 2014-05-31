<?php
/* @var $this AppointmentArrangementController */
/* @var $model AppointmentArrangement */

$this->breadcrumbs=array(
	'Appointment Arrangements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AppointmentArrangement', 'url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create AppointmentArrangement', 'url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Update AppointmentArrangement', 'url'=>array('update', 'id'=>$model->id),'icon'=>'refresh'),
	array('label'=>'Delete AppointmentArrangement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'icon'=>'icon-trash'),
	array('label'=>'Manage AppointmentArrangement', 'url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>View AppointmentArrangement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'terminid',
		'userid',
		'eventid',
	),
)); ?>
