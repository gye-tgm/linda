<?php
/* @var model Event */
foreach($model->users as $user){
	$row['id'] = $user->username;
	foreach($model->appointments as $app){
		$row[strval($app->id)] = AppointmentArrangement::model()->count('userid=:userid and terminid=:terminid',
				array('userid'=>$user->id,
							'terminid'=>$app->id,
							));
	}
	$termin[] = $row; 
}
if(isset($termin))
	var_dump($termin);

$gridDataProvider = new CArrayDataProvider($termin);
$columns[] = 	array('name'=>'id', 'header'=>'User');
foreach($model->appointments as $app){
	$columns[] = array('name'=>$app->id, 'header'=>$app->time);
}

$this->widget('bootstrap.widgets.TbGridView', array(
			'type'=>'striped bordered condensed',
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>$columns,
			));

?>
