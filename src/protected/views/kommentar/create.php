<?php
/* @var $this KommentarController */
/* @var $model Kommentar */

$this->breadcrumbs=array(
	'Kommentars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kommentar', 'url'=>array('index')),
	array('label'=>'Manage Kommentar', 'url'=>array('admin')),
);
?>

<h1>Create Kommentar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>