<?php

require '../config.php';

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.DB_HOSTNAME.';dbname='.DB_DATABASE,
    'username' => DB_USERNAME,
    'password' => DB_PASSWORD,
    'charset' => 'utf8',
];
