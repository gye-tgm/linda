<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'Linda',

		// preloading 'log' component
		'preload'=>array('log'),

		// autoloading model and component classes
		'import'=>array(
			'application.models.*',
			'application.components.*',
			),

		'theme'=>'bootstrap',
		'modules'=>array(
			// uncomment the following to enable the Gii tool
			'gii'=>array(
				'class'=>'system.gii.GiiModule',
				'password'=>'passwd',
				// If removed, Gii defaults to localhost only. Edit carefully to taste.
				'ipFilters'=>array('*.*.*.*'),
				'generatorPaths'=>array(
					'bootstrap.gii',
					),
				),
			),
		// bootstrap
		// application components
		'components'=>array(
				'bootstrap'=>array(
					'class'=>'bootstrap.components.Bootstrap',
				),

				'fixture'=>array(
					'class'=>'system.test.CDbFixtureManager',
					),
				'user'=>array(
					// enable cookie-based authentication
					'allowAutoLogin'=>true,
					// 'class' => 'WebUser',
					),
				// uncomment the following to enable URLs in path-format
				/*
					 'urlManager'=>array(
					 'urlFormat'=>'path',
					 'rules'=>array(
					 '<controller:\w+>/<id:\d+>'=>'<controller>/view',
					 '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
					 '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
					 ),
					 ),
				 */
				/* Using SQLite 
					 'db'=>array(
					 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
					 ),
				 */
				// uncomment the following to use a MySQL database
				'db'=>array(
						'connectionString' => 'mysql:host=localhost;dbname=linda',
						'emulatePrepare' => true,
						'username' => 'linda',
						'password' => 'passwd',
						'charset' => 'utf8',
						),
				// Used for the authManager component, for more: http://www.yiiframework.com/doc/guide/1.1/en/topics.auth
				// We can access authManager with Yii::app()->authManager now.
				'authManager'=>array(
						'class'=>'CDbAuthManager',
						'connectionID'=>'db',
						),
				'errorHandler'=>array(
						// use 'site/error' action to display errors
						'errorAction'=>'site/error',
						),
				'log'=>array(
						'class'=>'CLogRouter',
						'routes'=>array(
							array(
								'class'=>'CFileLogRoute',
								'levels'=>'error, warning',
								),
							// uncomment the following to show log messages on web pages
							/*
								 array(
								 'class'=>'CWebLogRoute',
								 ),
							 */
							),
						),
				),

				// application-level parameters that can be accessed
				// using Yii::app()->params['paramName']
				'params'=>array(
						// this is used in contact page
						'adminEmail'=>'webmaster@example.com',
						),
				);
