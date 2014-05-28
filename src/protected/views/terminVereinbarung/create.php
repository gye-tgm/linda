<?php
/* @var $this TerminVereinbarungController */
/* @var $model TerminVereinbarung */

$this->breadcrumbs=array(
	'Termin Vereinbarungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TerminVereinbarung', 'url'=>array('index')),
	array('label'=>'Manage TerminVereinbarung', 'url'=>array('admin')),
);
?>

<h1>Create TerminVereinbarung</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>