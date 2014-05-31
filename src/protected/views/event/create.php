<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Events','url'=>array('index'), 'icon'=>'book'),
	array('label'=>'Organized Events','url'=>array('organized'),'icon'=>'pencil'),
	array('label'=>'Create Event','url'=>array('create'),'icon'=>'plus'),
);
?>

<h1>Create Event</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>