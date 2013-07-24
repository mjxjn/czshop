<?php
/**
 * 后台主配置文件
 * User: maxiang
 */
return array(
    	'components' => array(
    		'urlManager' => array(
    			'urlFormat' => 'path',
    		),
    		'user' => array(
    			'class' => 'auth.components.AuthWebUser',
    			'allowAutoLogin' => true,
    			'stateKeyPrefix' => 'admin',
    			'loginUrl' => array('site/login'),
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
    	),
    	'params' => array(
            'layout' => '//adminLayouts/main',
        ),
);