<?php
$this->breadcrumbs=array(
	'Events',
);

require_once('_options.php');
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
