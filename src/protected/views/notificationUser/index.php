<?php
$this->breadcrumbs=array(
	'Notification Users',
);

$this->menu=array(
	array('label'=>'Create NotificationUser','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Manage NotificationUser','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Notification Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
