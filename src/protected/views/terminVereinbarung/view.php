<?php
/* @var $this TerminVereinbarungController */
/* @var $model TerminVereinbarung */

$this->breadcrumbs=array(
	'Termin Vereinbarungs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TerminVereinbarung', 'url'=>array('index')),
	array('label'=>'Create TerminVereinbarung', 'url'=>array('create')),
	array('label'=>'Update TerminVereinbarung', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TerminVereinbarung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TerminVereinbarung', 'url'=>array('admin')),
);
?>

<h1>View TerminVereinbarung #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'terminid',
		'userid',
		'eventid',
	),
)); ?>
