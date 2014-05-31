<?php
/* @var $this NotificationController */
/* @var $model Notification */

$this->breadcrumbs=array(
	'Notifications'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Notification', 'url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create Notification', 'url'=>array('create'),'icon'=>'plus'),
	array('label'=>'View Notification', 'url'=>array('view', 'id'=>$model->id),'icon'=>'icon-eye-open'),
	array('label'=>'Manage Notification', 'url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Update Notification <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>