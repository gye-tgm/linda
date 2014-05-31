

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'event-form',
	'enableAjaxValidation'=>false,
));

Yii::app()->clientScript->registerScript('search', "
$('#btn-add-time').click(function(){
	$('#onetimeprop:first').clone().appendTo('#timeprops');	
	return false;
});

$('#btn-add-user').click(function(){
	$('#oneuser:first').clone().appendTo('#userinvs');	
	return false;
});


");
// http://stackoverflow.com/questions/8298138/cloning-elements-avoiding-more-than-one-clone-at-a-time-when-adding
?>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'location',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textAreaRow($model,'description',array('class'=>'span8', 'rows'=>5, 'maxlength'=>8192)); ?>
<br/>
	<div id="timeproposal">
		Time proposals 
		<?php $this->widget('bootstrap.widgets.TbButton', array(
					'label'=>'+',
					'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
					'size'=>'mini', // null, 'large', 'small' or 'mini'
					'htmlOptions'=>array('id'=>'btn-add-time')
					)); ?>
		<br/>

		<!-- todo: we have to load the old data first! -->

		<div id="timeprops">
			<div id="onetimeprop">
				<input style="height:20px;" id="publishDate" type="datetime-local" name="appointments[]" class="datetime"> <br/>
			</div>
		</div>
	</div>


<!--
	<div id="userinvitations">
		Invite users 
		<?php $this->widget('bootstrap.widgets.TbButton', array(
					'label'=>'+',
					'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
					'size'=>'mini', // null, 'large', 'small' or 'mini'
					'htmlOptions'=>array('id'=>'btn-add-user')
					)); ?>
		<br/>

		<div id="userinvs">
			<div id="oneuser">
				<input style="height:20px;" type="textfield" name="users[]">  <br/>
			</div>
		</div>
	</div>
-->

<?php 
/*	
	$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'publishDate',
				// additional javascript options for the date picker plugin
				'options'=>array(
					'showAnim'=>'fold',
					),
				'htmlOptions'=>array(
					'style'=>'height:20px;'
					),
				));

*/
?>
 
 <!--  No need for host id, it is the current users id.	
 		<?php echo $form->textFieldRow($model,'hostid',array('class'=>'span5')); ?> 
 -->

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		));
		
		if(!$model->isNewRecord){
			$this->widget('bootstrap.widgets.TbButton', array(
						'buttonType'=>'link',
						'type'=>'inverse',
						'url'=>$this->createUrl('invite', array('id'=>$model->id)),
						'label'=>'Invite users'
						));
		}
		?>
	</div>

<?php $this->endWidget(); ?>
