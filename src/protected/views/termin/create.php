<?php
/* @var $this TerminController */
/* @var $model Termin */

$this->breadcrumbs=array(
	'Termins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Termin', 'url'=>array('index')),
	array('label'=>'Manage Termin', 'url'=>array('admin')),
);
?>

<h1>Create Termin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>