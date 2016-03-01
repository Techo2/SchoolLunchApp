<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),
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
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/     'mongodb' => array(
            'class' => 'EMongoDB',
            'connectionString' => 'mongodb://10.10.73.55:27017/test',
            'dbName' => 'test',
            'fsyncFlag' => true,
            'safeFlag' => true,
            'useCursor' => false,
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
);