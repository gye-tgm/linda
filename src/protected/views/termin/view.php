<?php
/* @var $this TerminController */
/* @var $model Termin */

$this->breadcrumbs=array(
	'Termins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Termin', 'url'=>array('index')),
	array('label'=>'Create Termin', 'url'=>array('create')),
	array('label'=>'Update Termin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Termin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Termin', 'url'=>array('admin')),
);
?>

<h1>View Termin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'eventid',
		'zeit',
	),
)); ?>
