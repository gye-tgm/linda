<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		'Events'=>array('index'),
		'Organized',
		);

$this->menu=array(
		array('label'=>'Create Event', 'url'=>array('create'),'icon'=>'plus'),
		array('label'=>'Invited Events', 'url'=>array('invited'),'icon'=>'user'),
		array('label'=>'List Events', 'url'=>array('index'),'icon'=>'book'),
		);
?>

<h1>Organized Events</h1>

<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider'=>$dataProvider,
		'type'=>'striped bordered condensed',
		'columns'=>array(
			array('name'=>'id', 'header'=>'#'),
			array('name'=>'name', 'header'=>'Name'),
			array('name'=>'location', 'header'=>'Location'),
			array('header'=>'Progress', 
				'class'=>'application.components.BootProgressColumn',
				'animated' => true,
				'striped' => true,
				'value' => 'Event::calcProgress($data->id)', // TODO: acceptedUsers / invitedUsers
			),
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'htmlOptions'=>array('style'=>'width: 50px'),
				),
			),
		));
?>
