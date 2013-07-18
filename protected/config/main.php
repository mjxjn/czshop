<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(

	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Commerz Board',
	'theme'=>'bootstrap',
	// preloading 'log' component
	'preload'=>array('log , bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		'auth' => array(
			  'strictMode' => true, // when enabled authorization items cannot be assigned children of the same type.
			  'userClass' => 'admin', // the name of the user model class.
			  'userIdColumn' => 'admin_id', // the name of the user id column.
			  'userNameColumn' => 'admin_name', // the name of the user name column.
			  'appLayout' => 'application.views.layouts.main', // the layout used by the module.
			  'viewDir' => null, // the path to view files to use with this module.
		),
		// uncomment the following to enable the Gii tool
		'gii' => array(
			'class'=>'system.gii.GiiModule',
			'password'=>'commerz',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array(
                'bootstrap.gii',
            ),
		),
	),

	// application components
	'components'=>array(

		'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
            'responsiveCss' => true,
        ),
        'authManager' => array(
          	'class' => 'CDbAuthManager', // Provides support authorization item sorting.
		    'connectionID' => 'db',
		    'itemTable' => '{{authitem}}',
		    'itemChildTable' => '{{authitemchild}}',
		    'assignmentTable' => '{{authassignment}}',
		    'behaviors' => array(
		        'auth' => array(
		        	'class' => 'auth.components.AuthBehavior',
		        	'admins' => array('admin', 'foo', 'bar'), // users with full access
		        ),
		    ),
	    ),
	    'user' => array(
		    'class' => 'auth.components.AuthWebUser',
		    'allowAutoLogin' => true,
		    'loginUrl' => array('site/login'),
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
		/*
		'urlManager' => array(
		    'urlFormat' => 'path',
		    'showScriptName' => false,
		    'urlSuffix' => '/',
		    'rules' => array(
				
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		*/
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=commerz',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'cz_',
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