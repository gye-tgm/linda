<?php
/* @var $this TerminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Termins',
);

$this->menu=array(
	array('label'=>'Create Termin', 'url'=>array('create')),
	array('label'=>'Manage Termin', 'url'=>array('admin')),
);
?>

<h1>Termins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
