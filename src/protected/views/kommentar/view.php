<?php
/* @var $this KommentarController */
/* @var $model Kommentar */

$this->breadcrumbs=array(
	'Kommentars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kommentar', 'url'=>array('index')),
	array('label'=>'Create Kommentar', 'url'=>array('create')),
	array('label'=>'Update Kommentar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kommentar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kommentar', 'url'=>array('admin')),
);
?>

<h1>View Kommentar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'text',
		'zeit',
		'userid',
		'eventid',
	),
)); ?>
