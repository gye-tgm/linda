<?php
/* @var $this EventController */
/* @var $event Event */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		'Events'=>array('index'),
		'Organized Events'=>array('organized'),
		'Invite',
		);

$this->menu=array(
		array('label'=>'Create Event', 'url'=>array('create')),
		array('label'=>'Manage Event', 'url'=>array('admin')),
		);
?>

<h1>Manage invitations</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider'=>$dataProvider,
		'type'=>'striped bordered condensed',
		'columns'=>array(
			array('name'=>'id', 'header'=>'#'),
			array('name'=>'username', 'header'=>'Name'),
			array('value'=>'"accepted"', 'header'=>'Appointment 1'),
			array(
				'class'=>'CButtonColumn',
				'template' => '{delete}',
				),
			),
		));

?>
