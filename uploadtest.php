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

<!-- boostrap toggle -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title>AMSB Health Declaration Form :: Home</title>

<?php




// Database connection
require __DIR__ . '/login/database.php';
$db = DB();

$currentdt = date('Y-m-d') . ' ' . date('h:i:s');
$currentdate = date('Y-m-d');
$maxdate = date("Y-m-d", strtotime("+1 week 6 days"));

?>

</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">

<br>

<table class="table table-bordered">
    <tr>
    <th scope="col" width="50%" style="text-align:center;"><img src="logoain.png" width="200px"></th>
      <th scope="col" style="text-align:center;">Health Declaration Form <br> (Visitors / Contractors / Service Providers)</th>
    </tr>
</table>

<p align="justify">This Health Declaration Form helps us to ensure a safe experience for you. We urge you to be completely thorough in providing us with the information requested. Failure to disclose any required information could be harmful to you and also our work process. Information provided will be kept in strict confidence.

<br><br>
<i>Borang Pengisytiharan Kesihatan ini membantu kami memastikan pengalaman yang selamat untuk anda. Kami meminta anda untuk benar-benar teliti dalam memberikan kami maklumat yang diminta. Kegagalan untuk mendedahkan maklumat yang diperlukan boleh membahayakan anda dan juga proses kerja kami. Maklumat yang diberikan adalah sulit.</i>
</p>

<h2>Personnel Information</h2>
<hr>
<form method="POST" enctype="multipart/form-data">

<hr>

<div class="form-group">
<label align="justify">D. Have you ever been tested for COVID-19? <br><i>D. Adakah anda pernah diuji untuk COVID-19? </i></label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="chkYes4" type="radio" class="custom-control-input" value="Yes" required="required"> 
        <label for="chkYes4" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio4" id="chkNo4" type="radio" class="custom-control-input" value="No" required="required"> 
        <label for="chkNo4" class="custom-control-label">No</label>
      </div>
    </div>

    <div id="dvChkYes4" style="display: none">

  <div class="form-group row">
    <label for="rescovid" class="col-4 col-form-label">Result <br> <i>Keputusan</i></label> 
    <div class="col-8">
  <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="rescovid" id="option1" autocomplete="off" value="Negative / Negatif" checked> Negative / Negatif
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="rescovid" id="option2" autocomplete="off" value="Positive / Positif"> Positive / Positif
  </label>
</div>
</div>
  </div> 


  <div class="form-group row">
    <label for="datetest" class="col-4 col-form-label">Date <br> <i>Tarikh</i></label> 
    <div class="col-8">
      <input id="datetest" name="datetest" type="date" class="form-control">
    </div>
  </div> 
  
  <div class="form-group row">
    <label for="loctest" class="col-4 col-form-label">Location of Testing <br> <i>Lokasi Ujian</i></label> 
    <div class="col-8">
      <input id="loctest" name="loctest" type="text" class="form-control">
    </div>
  </div> 
  
  <div class="form-group row">
  <label for="loctest" class="col-4 col-form-label">COVID-19 Test Result <br> <i>Keputusan Ujian COVID-10</i></label> 
    <div class="col-8">
    <input class="form-control" type="file" name="covtestresult" accept="image/*,.pdf" />
    </div>
  </div> 

  
  </div>
  

</div>

<br><br>

     <center> <button name="submitBtn" type="submit" class="btn btn-primary btn-block">Submit</button> </center>
  <br><br>

  </form>


</div>


<script>
$(function() {
   $("input[name='radio1']").click(function() {
     if ($("#chkYes").is(":checked")) {
       $("#dvChkYes").show();
     } else {
       $("#dvChkYes").hide();
     }
   });

   $("input[name='radio2']").click(function() {
     if ($("#chkYes2").is(":checked")) {
       $("#dvChkYes2").show();
     } else {
       $("#dvChkYes2").hide();
     }
   });

   $("input[name='radio4']").click(function() {
     if ($("#chkYes4").is(":checked")) {
       $("#dvChkYes4").show();
     } else {
       $("#dvChkYes4").hide();
     }
   });
 });

 $("input[name='radiocom']").click(function() {
     if ($("#chkYescom").is(":checked")) {
       $("#dvChkYescom").show();
     } else {
       $("#dvChkYescom").hide();
     }
   });
</script>


<?php


if(isset($_POST['submitBtn']))
{

    // test result document

    $imgFile = $_FILES['covtestresult']['name'];
    $tmp_dir = $_FILES['covtestresult']['tmp_name'];
    $imgSize = $_FILES['covtestresult']['size'];

    $upload_dir = 'uploadedfiles/'; // upload directory
   
   if($imgFile != ""){
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'jfif'); // valid extensions
  
   // rename uploading image
   $covtestresult = $imgFile;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '50MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$covtestresult);
    }
    else{
      echo '<script>alert("Your file is too large. Please try again. // Fail anda terlalu besar. Sila cuba lagi.");</script>';
    }
   }
   else{
    echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF & PDF files are allowed. // Maaf, hanya fail JPG, JPEG, PNG, GIF & PDF sahaja yang dibenarkan.");</script>';
   }
   } else {
       $covtestresult = "";
   }

   // file upload finish


   // get last id to create reference number

  $refnum = "";

   $getlastid = $db->prepare("SELECT hd_id FROM hd_0001 ORDER BY hd_id DESC LIMIT 1;");
   $getlastid->execute();
   $rowlastid=$getlastid->fetch(PDO::FETCH_ASSOC);
   if($rowlastid){
   if($rowlastid['hd_id'] == false || is_null($rowlastid['hd_id'])){
    $lastid = 1;
   } else {
     $lastid = $rowlastid['hd_id'] + 1;
   }
  
   $refnum = "HD" . date('y') . $lastid;
 }

   

    if($refnum == ""){
     $refnum = "HD" . date('y') . "1";
   }
    /*try {*/
      $query = $db->prepare("INSERT INTO hd_0001(covtestresult) VALUES (:covtestresult)");
      $query->bindParam("covtestresult", $covtestresult);
      
  

      if($query->execute())
      {
       // return $db->lastInsertId();

        echo $covtestresult;

      echo '<script>alert("[REFNUM: ' . $refnum . '] Your application has been recorded. Thank you. // Permohonan anda telah disimpan. Terima kasih.");</script>';

     // echo "<script>setTimeout(function(){window.location.href = 'hdform.php';}, 3000); </script>";


      } else {
        print_r($query->errorInfo());
      }



 /*   
    from try, to get error
  } catch (PDOException $e) {
      exit($e->getMessage());
  }

*/

  
}


    ?>
<br><br>

<?php

// Header 
include('login/footer.php');

?>