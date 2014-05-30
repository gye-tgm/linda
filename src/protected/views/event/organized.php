<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		'Events',
		);

$this->menu=array(
		array('label'=>'Create Event', 'url'=>array('create')),
		array('label'=>'Manage Event', 'url'=>array('admin')),
		);
?>

<h1>Organized Events</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>
