<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- font awesome
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<!-- google material icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php


// Database connection
require __DIR__ . '/database.php';
$db = DB();

// library connection
require __DIR__ . '/lib/library.php';
$app = new DemoLib();



?> <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<a class="navbar-brand" href="formreview.php">AMSB | Hello, please login</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
</nav>
</head>


<?php


$login_error_message = '';

// check Login request
if (!empty($_POST['btnLogin'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == "") {
        $login_error_message = 'Username field is required!';
    } else if ($password == "") {
        $login_error_message = 'Password field is required!';
    } else {
        $user_id = $app->Login($username, $password); // check user login
        if($user_id > 0)
        {
            $_SESSION['user_id'] = $user_id; // Set Session
            echo "<script>setTimeout(function(){window.location.href = 'profile.php';}, 0); </script>";
        }
        else
        {
            $login_error_message = 'Invalid login details!';
        }
    }
}


?>
<br><br><br>
<div class="container">
    <div class="row">
    </div>

    <div class="row">
	<div class="col-md-3"></div>
        <div class="col-md-6 card card-body bg-light">
            <h4>Login</h4>
            <?php
            if ($login_error_message != "") {
                echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $login_error_message . '</div>';
            }
            ?>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnLogin" class="btn btn-primary" value="Login"/>
                </div>
					<div class="col-md-3"></div>
            </form>
        </div>
    </div>
</div>

<?php

// Header 
include('footer.php');

?>