<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Manage User','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
