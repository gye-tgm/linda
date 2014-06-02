<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name,
);

require_once('_options.php');

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
<?php echo $this->renderPartial('_useraccepted', array('model'=>$model)); ?>

<h3>Comments</h3>

<?php 
foreach ($comment as $com)
        {
        $usr=User::model()->findByPk($com->userid);
        echo "<b>" . CHtml::encode($usr->getAttributeLabel('username')) . "</b>: ";
        echo CHtml::encode($usr->getAttribute('username')) . "</br>";
        echo "<b>" . CHtml::encode($com->getAttributeLabel('time')) . "</b>: ";
        echo CHtml::encode($com->time) . "</br></br>";
        echo "<b>" . CHtml::encode($com->getAttributeLabel('text')) . "</b>: ";
        echo CHtml::encode($com->text) . "</br></br>";
}?>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>


<fieldset> 
    <legend>New Comment</legend>

	<?php echo $form->textAreaRow($newcom, 'text', array('class'=>'span5','maxlength'=>255));?>

</fieldset>
	<div class="form-actions">
	    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Create')); ?>
	    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
	</div>
<?php $this->endWidget(); ?>
