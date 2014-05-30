<?php
$this->breadcrumbs=array(
	'Notification Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NotificationUser','url'=>array('index')),
	array('label'=>'Create NotificationUser','url'=>array('create')),
	array('label'=>'View NotificationUser','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage NotificationUser','url'=>array('admin')),
);
?>

<h1>Update NotificationUser <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>