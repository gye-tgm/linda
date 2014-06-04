<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			'db'=>array(
				'connectionString'=>'mysql:host=localhost;dbname=lindatest',
				'emulatePrepare' => true,
				'username' => 'lindatest',
				'password' => 'passwd',
				'charset' => 'utf8',
			),
		),
	)
);
