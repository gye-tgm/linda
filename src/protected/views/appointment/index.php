<?php
/* @var $this AppointmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Appointments',
);

$this->menu=array(
	array('label'=>'Create Appointment', 'url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Manage Appointment', 'url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Appointments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
