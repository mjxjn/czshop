<?php

$admin = dirname(dirname(__FILE__));
$front = dirname($admin) . DIRECTORY_SEPARATOR . 'www';
$root = dirname($front);
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('root', $root);
Yii::setPathOfAlias('common', $root . DIRECTORY_SEPARATOR . 'common');
Yii::setPathOfAlias('admin', $root . DIRECTORY_SEPARATOR . 'admin');
Yii::setPathOfAlias('www', $root . DIRECTORY_SEPARATOR . 'www');
Yii::setPathOfAlias('comext', $root . DIRECTORY_SEPARATOR . 'common' . DIRECTORY_SEPARATOR . 'extensions');
Yii::setPathOfAlias('bootstrap', $root . DIRECTORY_SEPARATOR . 'common' . DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR . 'bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(

	'basePath'=>$admin,
	'name'=>'Commerz Board',
	'theme'=>'admin-bootcss',
            'language' => 'zh_cn',
            'runtimePath' => $admin . '/runtime',
            'defaultController'=>'index', //设置默认控制器类
	// autoloading model and component classes
	'import' => require(dirname(__FILE__) . '/imports.php'),

            'modules' => require(dirname(__FILE__) . '/modules.php'),

            // application components
            'components' =>  require(dirname(__FILE__) . '/components.php'),

            // preloading 'log' component
            'preload' => require(dirname(__FILE__) . '/preloads.php'),

            // application-level parameters that can be accessed
        	// using Yii::app()->params['paramName']
            'params' => require(dirname(__FILE__) . '/params.php'),

            'behaviors' => require(dirname(__FILE__) . '/behaviors.php'),

            'controllerMap' => require(dirname(__FILE__) . '/controllerMaps.php'),

            'aliases' => array(
                //assuming you extracted the files to the extensions folder
                //  'xupload' => 'ext.xupload',
    ),
);