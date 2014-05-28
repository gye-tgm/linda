<?php
/* @var $this TerminController */
/* @var $model Termin */

$this->breadcrumbs=array(
	'Termins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Termin', 'url'=>array('index')),
	array('label'=>'Create Termin', 'url'=>array('create')),
	array('label'=>'View Termin', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Termin', 'url'=>array('admin')),
);
?>

<h1>Update Termin <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>