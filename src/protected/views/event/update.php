<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Event','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create Event','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'View Event','url'=>array('view','id'=>$model->id),'icon'=>'icon-eye-open'),
	array('label'=>'Manage Event','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Update Event <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>