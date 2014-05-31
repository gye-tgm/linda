<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comment','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create Comment','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'View Comment','url'=>array('view','id'=>$model->id),'icon'=>'icon-eye-open'),
	array('label'=>'Manage Comment','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Update Comment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>