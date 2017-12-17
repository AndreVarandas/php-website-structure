<?php

/**
 * Here, we define an array containing the paths
 * for our folders inside configuration folder.
 */
$config = [
    'MODEL_PATH' => APPLICATION_PATH . DS . 'model' . DS,
    'VIEW_PATH' => APPLICATION_PATH . DS . 'views' . DS,
    'LIB_PATH' => APPLICATION_PATH . DS . 'lib' . DS,
];

/**
 * Require lib files, one by one.
 */
require $config['LIB_PATH'] . DS . 'functions.php';