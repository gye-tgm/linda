<?php
/* @var $this TerminVereinbarungController */
/* @var $model TerminVereinbarung */

$this->breadcrumbs=array(
	'Termin Vereinbarungs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TerminVereinbarung', 'url'=>array('index')),
	array('label'=>'Create TerminVereinbarung', 'url'=>array('create')),
	array('label'=>'View TerminVereinbarung', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TerminVereinbarung', 'url'=>array('admin')),
);
?>

<h1>Update TerminVereinbarung <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>