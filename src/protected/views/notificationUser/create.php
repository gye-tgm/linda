<?php
$this->breadcrumbs=array(
	'Notification Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NotificationUser','url'=>array('index')),
	array('label'=>'Manage NotificationUser','url'=>array('admin')),
);
?>

<h1>Create NotificationUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>