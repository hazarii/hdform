<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- font awesome
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<!-- google material icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


<style>
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>

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
    echo "<script>setTimeout(function(){window.location.href = 'index.html';}, 3000); </script>";
    exit();

} 
$user = $app->UserDetails($_SESSION['user_id']); // get user details
?> <body>


  <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" <?php if(($user->usertype) < 3) { echo 'href="formreview.php?view="'; } else { echo 'href="#"'; } ?>>Hello, <?php echo $user->prefername; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <?php if(($user->usertype) < 3) { ?> 
        <li class="nav-item active">
          <a class="nav-link" href="formreview.php?view=">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="formreview.php?view=" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="formreview.php?view=Pending">Pending</a>
            <a class="dropdown-item" href="formreview.php?view=Approved">Approved</a>
            <a class="dropdown-item" href="formreview.php?view=Reject">Rejected</a>
          </div>
        </li>
        <?php } ?>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <input type="button" class="btn btn-danger my-2 my-sm-0" onclick="window.location.href = 'login/logout.php';" value="Logout"/>
      </form>
    </div>
  </nav>

<br><br>

<?php


$currentdt = date('Y-m-d') . ' ' . date('h:i:s');
$currentdate = date('Y-m-d');

$currentmonth = date('m');

?>
</head>

<body>