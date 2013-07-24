<?php
error_reporting(E_ALL & ~(E_STRICT | E_NOTICE));
// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
//$config = dirname(__FILE__) . '/protected/config/main-admin.php';
$local=require('./protected/config/main-db.php');
$base=require('./protected/admin/config/main.php');
$config=CMap::mergeArray($base, $local);
Yii::createWebApplication($config)->run();