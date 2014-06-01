<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		'Events' => array('index'),
		'Invited Events',
		);

$this->menu=array(
		array('label'=>'Create Event', 'url'=>array('create'),'icon'=>'plus'),
		array('label'=>'Organized Events', 'url'=>array('organized'),'icon'=>'pencil'),
		array('label'=>'List Events', 'url'=>array('index'),'icon'=>'book'),
		);
?>

<h1>Invited Events</h1>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
		array('name'=>'id','header'=>'ID'),
        array('name'=>'name','header'=>'Name'),
		array('name'=>'location','header'=>'Location'),
		array('name'=>'description','header'=>'Description'),
		array('name'=>'hostid','header'=>'HostId'),
		array(
				'class'=>'CButtonColumn',
				'template' => '{delete}',
				),
    ),
));
?>

<?php /*$this->widget('bootstrap.widgets.TbListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_invited',
			)); */
?>
