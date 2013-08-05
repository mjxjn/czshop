<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'components' => array(
        'db'=>array(
            'connectionString' => 'mysql:host=mysql21.100ws.com;dbname=maxia5_czshop',
            'emulatePrepare' => true,
            'username' => 'maxia5_czshop',
            'password' => '7482925',
            'charset' => 'utf8',
            'tablePrefix' => 'cz_',
        ),
        )
    );