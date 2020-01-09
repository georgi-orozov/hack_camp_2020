
<?php include "init.php"; ?>

<?php if(isset($_SESSION['id'])): ?>
    <?php header("location:home.html"); ?>
<?php endif; ?>
<?php
if(isset($_POST['login'])){

    $data = [
        'email'           => $_POST['email'],
        'password'       => $_POST['password'],
        'email_error'    => '',
        'password_error' => ''

    ];
//checks if email field is empty.
    if(empty($data['email'])){
        $data['email_error'] = "Email is required";
    }
//checks if password field is empty.
    if(empty($data['password'])){
        $data['password_error'] = "Password is required";
    }

    /*
        * Submit the login form
    */

    if(empty($data['email_error']) && empty($data['password_error'])){
        //checks the dadatbase for the email entered.
        if($source->Query("SELECT * FROM users WHERE user_email = ?", [$data['email']])){
            if($source->CountRows() > 0){
                $row = $source->Single();
                $user_id = $row->user_id;
                $user_pass = $row->user_pass;
                $user_name = $row->user_name;
                //password verification.
                if(password_verify($data['password'], $user_pass)){

                    $_SESSION['login_success'] = "Hi ".$name . " You are successfully login";
                    $_SESSION['user_id'] = $user_id;
                    header("location:home.html");

                } else {
                    $data['password_error'] = "Please enter correct password";
                }
            } else {
                $data['email_error'] = "Please enter correct email";
            }

        }
    }

}


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Singup Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <h1>Simple Forum</h1>
            </div>

        </div>
    </nav>
</head>
<body>
<div class="container">
    <div class="form">
        <div class="form-section">
            <form action="" method="POST">
                <div class="group">
                    <?php

                    if(isset($_SESSION['account_created'])):?>
                        <div class="success">
                            <?php echo $_SESSION['account_created']; ?>
                        </div>
                    <?php endif; ?>
                    <?php unset($_SESSION['account_created']); ?>


                </div>
                <div class="group">
                    <h3 class="heading">User Login</h3>
                </div>

                <div class="group">
                    <input type="email" name="email" class="control" placeholder="Enter Email.." value="<?php if(!empty($data['email'])): echo $data['email']; endif;?>">
                    <div class="error">
                        <?php if(!empty($data['email_error'])): ?>
                            <?php echo $data['email_error']; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="group">
                    <input type="password" name="password" class="control" placeholder="Create Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif;?>">
                    <div class="error">
                        <?php if(!empty($data['password_error'])): ?>
                            <?php echo $data['password_error']; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="group m20">
                    <input type="submit" name="login" class="btn" value="Login &rarr;">
                </div>
                <div class="group m20">
                    <a href="index.php" class="link">Create new account ?</a>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
