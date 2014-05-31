<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Event','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create Event','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Update Event','url'=>array('update','id'=>$model->id),'icon'=>'refresh'),
	array('label'=>'Delete Event','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'icon'=>'icon-trash'),
	array('label'=>'Manage Event','url'=>array('admin'),'icon'=>'pencil'),
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
