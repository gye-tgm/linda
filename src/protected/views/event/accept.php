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

require_once('_options.php');
?>

<h1>Accept Event</h1>

<?php echo $this->renderPartial('_useraccepted', array('model'=>$model)); ?>
<?php echo $this->renderPartial('_accept', array('model'=>$model)); ?>
			
