<?php

$admin=dirname(dirname(__FILE__));
$front=dirname($admin);
$root = dirname($front);
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('root', $root);
Yii::setPathOfAlias('front', $front);
Yii::setPathOfAlias('back', $admin);
Yii::setPathOfAlias('bootstrap', $front . DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR . 'bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(

	'basePath'=>$front,
	'name'=>'Commerz Board',
	'theme'=>'admin-new',
            'language' => 'zh_cn',
            'controllerPath' => $admin . DIRECTORY_SEPARATOR . 'controllers',
            'viewPath' => $admin . DIRECTORY_SEPARATOR . 'views',
            'runtimePath' => $admin . DIRECTORY_SEPARATOR . 'runtime',
            'defaultController'=>'index', //设置默认控制器类
	// autoloading model and component classes
	'import' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'imports.php'),

            'modules' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'modules.php'),

            // application components
            'components' =>  require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'components.php'),

            // preloading 'log' component
            'preload' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'preloads.php'),

            // application-level parameters that can be accessed
        	// using Yii::app()->params['paramName']
            'params' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params.php'),

            'behaviors' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'behaviors.php'),

            'controllerMap' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'controllerMaps.php'),

            'aliases' => array(
                //assuming you extracted the files to the extensions folder
                //  'xupload' => 'ext.xupload',
                'auth' => 'back.modules.auth',
            ),
);