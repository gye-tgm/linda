<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Create',
);

require_once('_options.php');
?>

<h1>Create Event</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>