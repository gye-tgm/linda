<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Event','url'=>array('index')),
	array('label'=>'Create Event','url'=>array('create')),
	array('label'=>'Update Event','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Event','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Event','url'=>array('admin')),
);
?>

<h1>View Event #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'location',
		'description',
		'hostid',
	),
)); ?>
