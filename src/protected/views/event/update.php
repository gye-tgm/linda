<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

require_once('_options.php');
?>

<h1>Update Event <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>