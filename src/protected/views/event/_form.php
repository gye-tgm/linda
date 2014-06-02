

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
	<?php
		if($model->isNewRecord){
			Yii::app()->user->setFlash('info', 'You can invite the users after you have created the event.');
		}
	?>
	<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
	<?php echo $form->errorSummary($model); ?>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
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
				<?php
					foreach($model->appointments as $ap){
						$value = date('Y-m-d\TH:i:s', strtotime($ap->time));
						// echo $value;
						
						echo "<div id='onetimeprop'><input style='height:20px;' id='publishDate' type='datetime-local' name='appointments[]' class='datetime' value='$value'> <br/> </div>";
					}
				?>
				<div id="onetimeprop"><input style="height:20px;" id="publishDate" type="datetime-local" name="appointments[]" class="datetime"> <br/></div>
		</div>
	</div>
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
			$this->widget('bootstrap.widgets.TbButton', array(
						'buttonType'=>'link',
						'type'=>'danger',
						'url'=>$this->createUrl('fix', array('id'=>$model->id)),
						'label'=>'Fix'
						));
		}



		?>
	</div>

<?php $this->endWidget(); ?>
