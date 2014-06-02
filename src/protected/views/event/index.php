<?php
$this->breadcrumbs=array(
	'Events',
);

$userid=Yii::app()->user->getId();
$user=User::model()->findByPk($userid);

$this->menu=array(
	array('label'=>'User Options'),
	array('label'=>'Create Event','url'=>array('create'),'icon'=>'plus'),
	array('label'=>'List Event','url'=>array('index'),'icon'=>'book'),
	array('label'=>'Invited Events', 'url'=>array('invited'),'icon'=>'user'),
	array('label'=>'Organized Events', 'url'=>array('organized'),'icon'=>'pencil'),
);

if($user->username==='admin'){
	array_push($this->menu, 
		array('label'=>'Admin Options'),
		array('label'=>'Manage Event','url'=>array('admin'),'icon'=>'pencil')
	);
}
?>

<h1>Events</h1>

<p>
Howdy! On the right hand side you can see a navigation bar. 
Check out the events you have organized or the events you've been invited to. </br>
Or you can host your own event!
</p>

<p>
Have fun!
</br>
<?php

require dirname(__FILE__).'/../../extensions/rfreebern/Giphy.php';
$giphy = new \rfreebern\Giphy(); 

$numberOfGifs = 0;
for($i = 0; $i < $numberOfGifs; $i++){
	$result = $giphy->random('funny');
	echo '<img style="width: 50%; height: 50%;" src="'.$result->data->image_original_url.'"/>';
}
?>

</p>
<!--
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
-->
