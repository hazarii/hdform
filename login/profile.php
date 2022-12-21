<?php

// Header 
include('assets.php');

?>


<!-- jquery
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="assets/jquery/jquery-3.5.1.min.js"></script>

<!-- bootstrap 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="assets/css/bootstrap.4.1.3.min.css"> 

<!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->

<script src="assets/jquery/bootstrap-toggle.2.2.2.min.js"></script>

<script src="assets/jquery/bootstrap.4.3.1.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php


// check user login
if(empty($_SESSION['user_id']))
{	echo "<br><br><br><h3><center><font face='verdana' color='black'>Authorised personnel only.</font></h3></center>";
    echo "<script>setTimeout(function(){window.location.href = '../index.php';}, 3000); </script>";

    ?>
    

      <?php

} else {
    
?>


<br><br><br>
    <div class="container">
        <div class="card card-body bg-light">

            <p>
                <h2>Hello <?php echo $user->prefername ?>,</h2> <br>redirecting to admin page..
            </p>
        </div>
    </div>


<?php


if(($user->usertype) < 3) {
echo "<script>setTimeout(function(){window.location.href = '../formreview.php?view=Pending';}, 3000); </script>";
} else {
    echo "<script>setTimeout(function(){window.location.href = '../searchappl.php';}, 3000); </script>"; 
}


}

?>

<?php

// Header 
// include('footer.php');

?>
