<?php
/* @var $this NotificationController */
/* @var $model Notification */

$this->breadcrumbs=array(
	'Notifications'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Notification', 'url'=>array('index'),'icon'=>'book'),
	array('label'=>'Manage Notification', 'url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Create Notification</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>