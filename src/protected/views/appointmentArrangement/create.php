<?php
/* @var $this AppointmentArrangementController */
/* @var $model AppointmentArrangement */

$this->breadcrumbs=array(
	'Appointment Arrangements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AppointmentArrangement', 'url'=>array('index'),'icon'=>'book'),
	array('label'=>'Manage AppointmentArrangement', 'url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Create AppointmentArrangement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>