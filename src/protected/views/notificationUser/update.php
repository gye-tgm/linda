<?php
$this->breadcrumbs=array(
	'Notification Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NotificationUser','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create NotificationUser','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'View NotificationUser','url'=>array('view','id'=>$model->id),'icon'=>'icon-eye-open'),
	array('label'=>'Manage NotificationUser','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Update NotificationUser <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>