<?php

$userid=Yii::app()->user->getId();
$user=User::model()->findByPk($userid);

$this->menu=array(
	array('label'=>'Participant Options'),
	array('label'=>'Create Event','url'=>array('event/create'),'icon'=>'plus'),
	array('label'=>'List Event','url'=>array('event/index'),'icon'=>'book'),
	array('label'=>'Invited Events', 'url'=>array('event/invited'),'icon'=>'user'),
	array('label'=>'Organized Events', 'url'=>array('event/organized'),'icon'=>'pencil'),
);
if(isset($model)){
	if($userid===$model->hostid){
		array_push($this->menu, 
			array('label'=>'Organizer Options'),
			array('label'=>'Update Event','url'=>array('update','id'=>$model->id),'icon'=>'refresh'),
			array('label'=>'Delete Event','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'icon'=>'icon-trash')
		);
	}
}

if(isset($user) && $user->username==='admin'){
	array_push($this->menu, 
		array('label'=>'Admin Options'),
		array('label'=>'Manage Event','url'=>array('admin'),'icon'=>'pencil')
	);
}
?>
