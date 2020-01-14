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

if(isset($_POST['login'])) {

    if(isset($_POST['email'])) {
        $email = htmlentities($_POST['email'], ENT_QUOTES);
    }

    if(isset($_POST['password'])) {
        $password = htmlentities($_POST['password'], ENT_QUOTES);
    }

    $userFunctions = new UserFunctions();
    $result = $userFunctions->login($email, $password);


    if ($result) {
        //set SESSION
        $_SESSION['email'] = $email;

        //redirect to index.php
        header('location: index.php');
    }
    else {
        //display error
        var_dump($result);
        die();
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

function callAPI($method, $url, $data){
    $curl = curl_init();
    switch ($method){
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(

        'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
}
$get_data = callAPI('GET', 'http://3.11.108.65/api/v1/utilities/', false);

$response = json_decode($get_data, true);
$view->count = 0;
$view->row = 1;
$view->utilities = $response['utilities'];
//var_dump($response['utilities'][1]['dependencies']);
//die();
require_once('Views/index.phtml');
