<?php

$view = new stdClass();

$view->pageTitle = 'Login';
require_once ('Models/Database.php');
require_once ('Models/member.php');

if(isset($_POST['login'])) {
    //Below Database class needed
    Database::getInstance()->getdbConnection();
    $conn= Database::getInstance()->getdbConnection();

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $login = new member();
    $result = $login->userLogin($username, $password);
}
else{
    echo false;
}
//here login form phtml is different to what you guys created
require_once('Views/login.phtml');
