<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comment','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create Comment','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Update Comment','url'=>array('update','id'=>$model->id),'icon'=>'refresh'),
	array('label'=>'Delete Comment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'icon'=>'icon-trash'),
	array('label'=>'Manage Comment','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>View Comment #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'text',
		'time',
		'userid',
		'eventid',
	),
)); ?>
