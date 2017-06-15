<?php
session_cache_limiter("nocache");
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1); 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
 
if (isset($_GET['url']) ) {
	$url = rtrim($_GET['url']);
} else {
	$url = "main/index";
}
 
require_once (ROOT . DS . 'config' . DS . 'config.php');
require_once (ROOT . DS . 'libraries' . DS . 'init.php');
