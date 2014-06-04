<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		'Events' => array('index'),
		'Invited Events',
		);

require_once('_options.php');
?>

<h1>Invited Events</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
					
		array(
            'class'=>'CLinkColumn',
            'labelExpression'=>'$data->name',
						'urlExpression'=>'Yii::app()->createUrl("event/view", array("id"=>$data->id))',
            'header'=>'Name',
        ),
		array('name'=>'location','header'=>'Location'),
		array('name'=>'description','header'=>'Description'),
		array('value'=>'User::model()->findByPk($data->hostid)->username','header'=>'Organisator'),
		array(
            'class'=>'CLinkColumn',
            'label'=>'accept',
			'urlExpression'=>'Yii::app()->createUrl("event/accept", array("id"=>$data->id))',
            'header'=>'Accept',
        ),
		),			
	));

?>
