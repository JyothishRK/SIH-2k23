<?php 
require_once('config.php');
require_once('controllers/homeController.php');

$controller = new homeController($db);
$controller->processForm();

?>