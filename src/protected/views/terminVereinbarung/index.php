<?php
/* @var $this TerminVereinbarungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Termin Vereinbarungs',
);

$this->menu=array(
	array('label'=>'Create TerminVereinbarung', 'url'=>array('create')),
	array('label'=>'Manage TerminVereinbarung', 'url'=>array('admin')),
);
?>

<h1>Termin Vereinbarungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
