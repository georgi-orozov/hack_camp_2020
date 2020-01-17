<?php
require_once ('Models/UserFunctions.php');
require_once ('Models/User.php');
$view = new stdClass();
$view->pageTitle = 'Utilities';
$user = new User();


require_once('Views/utilities.phtml');
