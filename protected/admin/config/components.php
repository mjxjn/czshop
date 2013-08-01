<?php
return array(
        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
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
		        	'admins' => array('admin'), // users with full access
		        ),
		    ),
	),

	    'user' => array(
		    'class' => 'auth.components.AuthWebUser',
		    'allowAutoLogin' => true,
		    'loginUrl' => array('index/login'),
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
		// uncomment the following to use a MySQL database
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'index/error',
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
);