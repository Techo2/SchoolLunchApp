<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'EAT APP',
  //'defaultController' => 'admin',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
             'ext.YiiMongoDbSuite.*',
        'application.models.*',
        'application.components.*',
        'application.models.mongo.*',
        'ext.yiireport.*'

             //'ext.yii-mail.YiiMailMessage',

	),


	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
            'mail' => array(
  'class' => 'ext.yii-mail.YiiMail',
 
  //'viewPath' => 'application.views.mail',
  'logging' => true,
  'dryRun' => false
  ),


		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat' => 'path',
'showScriptName' => false,
'rules'=>array(
'<controller:\w+>/<id:\d+>'=>'<controller>/view',
'<controller:\w+>/<action:\w+>/<name:[^\/]+>'=>'<controller>/<action>',
'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
),
),
   
         
            'mongodb' => array(
            'class' => 'EMongoDB',
            'connectionString' => 'mongodb://127.0.0.1:27017/EAT',
            'dbName' => 'test',
            'fsyncFlag' => true,
            'safeFlag' => true,
            'useCursor' => false,
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
//	'params'=>array(
//		// this is used in contact page
//		'adminEmail'=>'webmaster@example.com',
//                'intervalTimeToLoadBookingDetails' => 10000,
//            "uploadPath" => "/usr/share/nginx/www/GangOfFour/profilePicture/"
//	),
);
