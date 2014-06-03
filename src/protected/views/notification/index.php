<?php
/* @var $this NotificationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notifications',
);

require_once('_options.php');
?>

<h1>Notifications</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
		// name, da ruft man die korrespondierende Variable auf
		// value, da $data ist das Objekt in der Zeile
        array('value'=>'Notification::translate($data->eventid, $data->type)', 'header'=>'Message'),
        array('name'=>'time', 'header'=>'Time'),
		array(
			'class'=>'CButtonColumn',
			'template' => '{delete}',
		),
    ),
)); ?>

<!--<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>-->
