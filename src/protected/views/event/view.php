<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Event','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Create Event','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'Update Event','url'=>array('update','id'=>$model->id),'icon'=>'refresh'),
	array('label'=>'Delete Event','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'icon'=>'icon-trash'),
	array('label'=>'Manage Event','url'=>array('admin'),'icon'=>'pencil'),
);
?>

<h1>View Event #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'location',
		'description',
		'hostid',
	),
)); ?>

<h3>Comments</h3>

<?php 
foreach ($comment as $com)
        {
        //echo "<b>" . CHtml::encode($com->getAttributeLabel('id')) . "</b>: ";
        //echo CHtml::encode($com->id) . "</br>";
        echo "<b>" . CHtml::encode($com->getAttributeLabel('userid')) . "</b>: ";
        echo CHtml::encode($com->userid) . "</br>";
        echo "<b>" . CHtml::encode($com->getAttributeLabel('text')) . "</b>: ";
        echo CHtml::encode($com->text) . "</br></br>";
}?>

<?php /** @var BootActiveForm $form */
$test = new Comment;
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>

<fieldset> 
    <legend>New Comment</legend>

	<?php echo $form->textAreaRow($test, 'text', array('class'=>'span5','maxlength'=>255)); ?>

</fieldset>
	<div class="form-actions">
	    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
	    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
	</div>
<?php $this->endWidget(); ?>