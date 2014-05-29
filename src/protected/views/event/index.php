<?php
$this->breadcrumbs=array(
	'Events',
);

$this->menu=array(
	array('label'=>'Create Event','url'=>array('create')),
	array('label'=>'Manage Event','url'=>array('admin')),
);
?>

<h1>Events</h1>

<p>
Howdy! Check out the events you have organized or the events you've been invited to. </br>
<?php $this->widget('bootstrap.widgets.TbButton', array(
			'label'=>'Organized Events',
			'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
			'size'=>'normal', // null, 'large', 'small' or 'mini'
			'url'=>array('organized'),
			)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
			'label'=>'Invited Events',
			'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
			'size'=>'normal', // null, 'large', 'small' or 'mini'
			'url'=>array('invited'),
			)); ?>
</p>

<p>
Or you can host your own event! </br>
<?php $this->widget('bootstrap.widgets.TbButton', array(
			'label'=>'Create a new Event',
			'type'=>'danger', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
			'size'=>'normal', // null, 'large', 'small' or 'mini'
			'url'=>array('create'),
			)); ?>
</p>

<!--
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
-->
