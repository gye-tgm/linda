<?php
/* @var $this AppointmentArrangementController */
/* @var $model AppointmentArrangement */

$this->breadcrumbs=array(
	'Appointment Arrangements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AppointmentArrangement', 'url'=>array('index')),
	array('label'=>'Create AppointmentArrangement', 'url'=>array('create')),
	array('label'=>'View AppointmentArrangement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AppointmentArrangement', 'url'=>array('admin')),
);
?>

<h1>Update AppointmentArrangement <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>