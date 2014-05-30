<?php
$this->breadcrumbs=array(
	'Notification Users',
);

$this->menu=array(
	array('label'=>'Create NotificationUser','url'=>array('create')),
	array('label'=>'Manage NotificationUser','url'=>array('admin')),
);
?>

<h1>Notification Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
