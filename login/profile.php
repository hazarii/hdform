<?php

// Header 
include('assets.php');


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
echo "<script>setTimeout(function(){window.location.href = '../formreview.php?view=';}, 3000); </script>";
} else {
    echo "<script>setTimeout(function(){window.location.href = '../searchappl.php';}, 3000); </script>"; 
}


}

?>

<?php

// Header 
include('footer.php');

?>
