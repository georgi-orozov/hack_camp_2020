<?php
require_once ('Models/UserFunctions.php');
require_once ('Models/User.php');
$view = new stdClass();
$view->pageTitle = 'Homepage';
$user = new User();

if(isset($_POST['register'])) {

    $userDetails =[];

    $userDetails['fullName'] = htmlentities($_POST['fullName'], ENT_QUOTES);
    $userDetails['email'] = htmlentities($_POST['email'], ENT_QUOTES);

    if($_POST['password'] != $_POST['password_check']) {
        $error = 'The two passwords did not match.';
        $view->displayError = $error;
    }
    else {
        $userDetails['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    $userFunctions = new UserFunctions();
    $result = $userFunctions->register($userDetails);

//    return $result;
    if($result) {
        header('location: index.php');
    }
    else {
        $view->displayError = $error;
        header('location: index.php');
    }
}

if(isset($_POST['logout'])) {
// remove all session variables
    session_unset();

// destroy the session
    session_destroy();

// redirect to index.php
    header('location: index.php');
}
require_once('Views/index.phtml');
