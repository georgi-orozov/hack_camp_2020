<?php
require_once ('Models/UserFunctions.php');
require_once ('Models/User.php');
$view = new stdClass();
$view->pageTitle = 'Buildings';
$user = new User();


require_once('Views/buildings.phtml');
