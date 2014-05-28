<?php
/* @var $this KommentarController */
/* @var $model Kommentar */

$this->breadcrumbs=array(
	'Kommentars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kommentar', 'url'=>array('index')),
	array('label'=>'Create Kommentar', 'url'=>array('create')),
	array('label'=>'View Kommentar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kommentar', 'url'=>array('admin')),
);
?>

<h1>Update Kommentar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>