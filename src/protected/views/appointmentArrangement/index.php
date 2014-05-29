<?php
/* @var $this AppointmentArrangementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Appointment Arrangements',
);

$this->menu=array(
	array('label'=>'Create AppointmentArrangement', 'url'=>array('create')),
	array('label'=>'Manage AppointmentArrangement', 'url'=>array('admin')),
);
?>

<h1>Appointment Arrangements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
