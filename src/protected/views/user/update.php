<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create User','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'View User','url'=>array('view','id'=>$model->id),'icon'=>'icon-eye-open'),
	array('label'=>'Manage User','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Update User <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>