<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		'Events' => array('index'),
		'Invited Events',
		);

$userid=Yii::app()->user->getId();
$user=User::model()->findByPk($userid);

$this->menu=array(
	array('label'=>'User Options'),
	array('label'=>'Create Event','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'List Event','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Invited Events', 'url'=>array('invited'),'icon'=>'user'),
	array('label'=>'Organized Events', 'url'=>array('organized'),'icon'=>'pencil'),
);

if($user->username==='admin'){
	array_push($this->menu, 
		array('label'=>'Admin Options'),
		array('label'=>'Manage Event','url'=>array('admin'),'icon'=>'pencil')
	);
}
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
