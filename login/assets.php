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

<!-- font awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- google material icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php

date_default_timezone_set('UTC');

// Database connection
require __DIR__ . '/database.php';
$db = DB();

// library connection
require __DIR__ . '/lib/library.php';
$app = new DemoLib();

if(empty($_SESSION['user_id'])){
    $_SESSION['user_id'] = "";
    echo "<br><br><br><h3><center><font face='verdana' color='black'>Authorised personnel only.</font></h3></center>";
    echo "<script>setTimeout(function(){window.location.href = '../index.html';}, 3000); </script>";
    exit();

} 
$user = $app->UserDetails($_SESSION['user_id']); // get user details
?> <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<a class="navbar-brand" <?php if(($user->usertype) < 3) { echo 'href="formreview.php?view="'; } else { echo 'href="#"'; } ?>>AMSB | Hello, <?php echo $user->name; ?></a>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
  </ul>
  <div class="form-inline my-2 my-lg-0">
    <a href="login/logout.php"><button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button></a>
  </div>
</div>
</nav>
<?php


$currentdt = date('Y-m-d') . ' ' . date('h:i:s');
$currentdate = date('Y-m-d');

$currentmonth = date('m');

?>
</head>

<body>