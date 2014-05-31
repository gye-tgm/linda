<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		'Events'=>array('index'),
		'Organized Events'=>array('organized'),
		'Invite',
		);

$this->menu=array(
		array('label'=>'Create Event', 'url'=>array('create')),
		array('label'=>'Manage Event', 'url'=>array('admin')),
		);
?>

<h1>Manage invitations</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider'=>$dataProvider,
		'type'=>'striped bordered condensed',
		'columns'=>array(
			array('name'=>'id', 'header'=>'#'),
			array('name'=>'username', 'header'=>'Name'),
			array('value'=>'"accepted"', 'header'=>'Appointment 1'),
			array(
				'class'=>'CButtonColumn',
				'template' => '{delete}',
				),
			),
		));
?>
<?php
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			));
?>

<?php echo $form->errorSummary($usermodel); ?>
<?php echo $form->textFieldRow($usermodel,'username',array('class'=>'span5','maxlength'=>255)); ?>

</br>
<?php 	$this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'Invite',
				'label'=>'Invite user'
				)); ?>

<?php $this->endWidget(); ?>

