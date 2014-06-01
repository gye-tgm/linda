<?php
/* @var $this EventController */
/* @var $model Event */
?>

<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Invited Events'=>array('invited'),
	'Accepting '.$model->name,
);

$this->menu=array(
	array('label'=>'List Events','url'=>array('index'), 'icon'=>'book'),
	array('label'=>'Organized Events','url'=>array('organized'),'icon'=>'pencil'),
	array('label'=>'Create Event','url'=>array('create'),'icon'=>'plus'),
);
?>

<h1>Accept Event</h1>

<?php echo $this->renderPartial('_accept', array('model'=>$model)); ?>
			
