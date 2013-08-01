<?php
return array(
	'auth' => array(
	    	'class' => 'admin.modules.auth.AuthModule', // Path to module in backend.
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
	
);