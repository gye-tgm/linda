<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Organized Events'=>array('organized'),
	'Fixing Event',
);

$this->menu=array(
	array('label'=>'List Events','url'=>array('index'), 'icon'=>'book'),
	array('label'=>'Organized Events','url'=>array('organized'),'icon'=>'pencil'),
	array('label'=>'Create Event','url'=>array('create'),'icon'=>'plus'),
);
?>

<h1>Fixing Event</h1>

<?php echo $this->renderPartial('_useraccepted', array('model'=>$model)); ?>

