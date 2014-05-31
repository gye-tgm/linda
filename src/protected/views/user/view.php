<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create User','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Update User','url'=>array('update','id'=>$model->id),'icon'=>'refresh'),
	array('label'=>'Delete User','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'icon'=>'icon-trash'),
	array('label'=>'Manage User','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
	),
)); ?>
