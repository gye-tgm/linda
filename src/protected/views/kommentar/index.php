<?php
/* @var $this KommentarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kommentars',
);

$this->menu=array(
	array('label'=>'Create Kommentar', 'url'=>array('create')),
	array('label'=>'Manage Kommentar', 'url'=>array('admin')),
);
?>

<h1>Kommentars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
