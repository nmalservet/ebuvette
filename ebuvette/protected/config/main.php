<?php

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'eBuvette',
        'language'=>'fr_FR',


	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
    'theme'=>'bootstrap',
	'modules'=>array(	
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'nicolas',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
						//tell the application to use your WebUser class instead of the default CWebUser
						'class'=>'WebUser',
						// enable cookie-based authentication
						'allowAutoLogin'=>true,
						'autoRenewCookie' => true,
						'authTimeout' => 31557600,//time in seconds to autologout
				),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ebuvette',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
            'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
            //authorisation manager
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
			),
		),
	),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'nicolas@malservet.eu',
	),
);