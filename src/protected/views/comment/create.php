<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comment','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Manage Comment','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>Create Comment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>