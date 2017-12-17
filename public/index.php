<?php

/* Define a constant with the application path */
defined('APPLICATION_PATH') ||
    define('APPLICATION_PATH', realpath(__DIR__ . '/../app/'));

/* For compatibility with different OS */
const DS = DIRECTORY_SEPARATOR;

/* Require, because we can't continue without this configuration file */
require APPLICATION_PATH . DS . 'config' . DS . 'config.php';

/* Get param page, if not present, go to home */
$page  = get('page', 'home');

/**
 * Get the model and the view, from the request url
 */
$model = $config['MODEL_PATH'] . $page . '.php';
$view  = $config['VIEW_PATH'] . $page . '.phtml';
$_404  = $config['VIEW_PATH'] . '404.phtml';
$main_content = $_404;

if(file_exists($model))
{
    require $model;
}

if(file_exists($view))
{
    $main_content = $view;
}

/**
 * Load our layout
 */
include $config['VIEW_PATH'] . 'tb_layout.phtml';