<?php 
session_start();

require_once("config/config.php");

require_once("helpers/db-helpers.php");
require_once("helpers/format-helpers.php");
require_once("helpers/system-helpers.php");

// Creating auto loader class

function __autoload($class_name){

	require_once('libraries/'.$class_name.'.php');
}
?>