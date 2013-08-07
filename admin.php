<?php
//目录安全访问机制
define('BUILD_DIR_SECURE', true); 
define('DIR_SECURE_FILENAME', 'index.html');
define('DIR_SECURE_CONTENT', 'deney Access!'); 

define('APP_NAME','admin');
define('APP_PATH','./admin/');
define('APP_DEBUG',TRUE); 
require './admin/ThinkPHP/ThinkPHP.php';