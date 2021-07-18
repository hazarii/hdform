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
require __DIR__ . '/login/database.php';
$db = DB();

// library connection
require __DIR__ . '/login/lib/library.php';
$app = new DemoLib();
$user = $app->UserDetails($_SESSION['user_id']); // get user details


  if(isset($_GET['view_id']) && !empty($_GET['view_id']))
	{
		$id = $_GET['view_id'];
		$stmt = $db->prepare("SELECT * FROM hd_0001 WHERE hd_id ='$id' OR refnum = '$id'");
		$stmt->execute();
        $hashedid = $_GET['toprint'];
	}
   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
   { extract($row);

    if(($doafromcountries == '0000-00-00') || ($doafromcountries == '1970-01-01')){
        $doafromcountries = "";
    }

    if(($datetest == '0000-00-00') || ($datetest == '1970-01-01')){
        $datetest = "";
    }

    $nid = $id * 3;
    $hashedidr = hash('sha256', $nid);
    
if($hashedid != $hashedidr){
        echo "<br><br><br><h3><center><font face='verdana' color='black'>Authorised personnel only.</font></h3></center>";
        echo "<script>setTimeout(function(){window.location.href = 'index.html';}, 3000); </script>";
        exit();
    } 

?>

<title>Print Application</title>

<body>

<div class="container">
<div class="row">
<div class="col-md-12">

<br>
<div class="d-print-none">
<center><button class='btn btn-info btn-lg' onclick='window.print();'>Print or Save as PDF</button></center>
<hr>
</div>

<table class="table table-bordered">
    <tr>
      <th scope="col" width="50%" style="text-align:center;"><img src="logoain.png" width="180px"></th>
      <th scope="col" style="text-align:center;">Health Declaration Form <br> (Visitors / Contractors / Service Providers)</th>
    </tr>
</table>

<p align="justify">This Health Declaration Form helps us to ensure a safe experience for you. We urge you to be completely thorough in providing us with the information requested. Failure to disclose any required information could be harmful to you and also our work process. Information provided will be kept in strict confidence.
<br><br>
<i>Borang Pengisytiharan Kesihatan ini membantu kami memastikan pengalaman yang selamat untuk anda. Kami meminta anda untuk benar-benar teliti dalam memberikan kami maklumat yang diminta. Kegagalan untuk mendedahkan maklumat yang diperlukan boleh membahayakan anda dan juga proses kerja kami. Maklumat yang diberikan adalah sulit.</i>
</p>

<div class="container">
  <div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
    Ref. No: <b><?php echo $refnum; ?></b><br>
    Application Date: <b><?php echo $dt_apply; ?></b><br>
    Status: <b><?php echo $applstatus; ?></b><br>
    Status Date: <b><?php echo $dt_updstatus; ?></b><br>
    Remarks: <b><?php echo $remarks; ?></b>
    </div>
  <div>
<div>

<h2>Personnel Information</h2>
<hr>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="fullname">Full Name (Mr / Mrs.) <br><i>Nama Penuh (En / Puan / Cik)</i></label> 
    <div class="col-8">
        <b><?php echo $fullname; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="mykad" class="col-4 col-form-label">MyKad / Passport No. <br><i>No. MyKad / Passport</i></label> 
    <div class="col-8">
    <b> <?php echo $mykad; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="visoffice" class="col-4 col-form-label">Visiting Office<br><i>Pejabat Kunjungan</i></label> 
    <div class="col-8">
    <b> <?php echo $visoffice; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">E-Mail <br><i>E-Mel</i></label> 
    <div class="col-8">
    <b><?php echo $appemail; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="entryin" class="col-4 col-form-label">Date of Entry <br><i>Tarikh Masuk</i></label> 
    <div class="col-8">
    <b><?php echo $entryin; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="entryout" class="col-4 col-form-label">Until <br><i>Sehingga</i></label> 
    <div class="col-8">
    <b><?php echo $entryout; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Are you an individual applicant or from any organisation? <br><i>Adakah anda pemohon secara individu atau dari syarikat/organisasi?</i></label> 
    <div class="col-8">
    <b><?php echo $radiocom; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="company" class="col-4 col-form-label">Company / Department <br><i>Organisasi / Syarikat</i></label> 
    <div class="col-8">
    <b><?php echo $company; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="caddress" class="col-4 col-form-label">Address <br><i>Alamat</i></label> 
    <div class="col-8">
    <b><?php echo $caddress; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="ccity" class="col-4 col-form-label">City <br><i>Bandar</i></label> 
    <div class="col-8">
    <b><?php echo $ccity; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="cstate" class="col-4 col-form-label">State <br><i>Negeri</i></label> 
    <div class="col-8">
        <b><?php echo $cstate; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="cpostal" class="col-4 col-form-label">Postal Code <br><i>Poskod</i></label> 
    <div class="col-8">
    <b><?php echo $cpostal; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="telno" class="col-4 col-form-label">Telephone No.<br><i>No. Telefon</i></label> 
    <div class="col-8">
    <b><?php echo $telno; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="reasonentry" class="col-4 col-form-label">Reason of Entry <br><i>Nama orang yang dihubungi</i></label> 
    <div class="col-8">
    <b><?php echo $reasonentry; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="nameconperson" class="col-4 col-form-label">Name of Contact Person <br><i>Alamat email orang yang dihubungi</i></label> 
    <div class="col-8">
    <b><?php echo $nameconperson; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="emailaddconperson" class="col-4 col-form-label">Email Address of Contact Person</label> 
    <div class="col-8">
       <b><?php echo $emailaddconperson; ?></b>
    </div>
  </div> 

  <hr>

  <div class="form-group">
    <label align="justify">A. Please declare if you or any family members staying with you have been travelling to the countries affected by COVID-19 within 14 days of the declaration. <br><i>A. Sila nyatakan jika anda atau mana-mana ahli keluarga yang tinggal bersama anda telah melawat ke negara yang terkena wabak COVID-19 dalam masa 14 hari dari pengisytiharan ini.</i></label> 
        <b><?php echo $radio1; ?></b>

    <div class="form-group row">
    <label for="country" class="col-4 col-form-label">Countries <br><i>Negara</i></label> 
    <div class="col-8">
        <b><?php echo $country; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="doafromcountries" class="col-4 col-form-label">Date of arrivals from the state countries <br><i>Tarikh ketibaan dari negara tersebut</i></label> 
    <div class="col-8">
        <b><?php echo $doafromcountries; ?></b>
    </div>
  </div> 
</div> 

<hr>

<div class="form-group">
<label align="justify">B. Please declare if you or any family member staying with you have been travelling to the COVID-19 red zone / MCO / CMCO areas within 14 days of the declaration. <br><i>B. Sila nyatakan jika anda atau mana-mana ahli keluarga yang tinggal bersama anda telah pergi ke / dari kawasan zon merah COVID-19 / PKP / PKPD dalam masa 14 hari dari pengisytiharan ini.</i></label> 
<b><?php echo $radio2; ?></b>

   <div class="form-group row">
   <label for="areafrom" class="col-4 col-form-label">Zone <br> <i>Zon</i></label> 
    <div class="col-8">
        <b><?php echo $radiozone; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label for="areafrom" class="col-4 col-form-label">Area <br> <i>Kawasan</i></label> 
    <div class="col-8">
        <b><?php echo $areafrom; ?></b>
    </div>
  </div> 
  </div>

<hr>

  <div class="form-group">
<label align="justify">C. Do you have any CLOSE CONTACT with a POSITIVE COVID-19 individual? <br><i>C. Adakah anda mempunyai KONTAK RAPAT dengan individu POSITIF COVID-19?</i></label> 
<br>
<b><?php echo $radio3; ?></b>


<hr>

<div class="form-group">
<label align="justify">D. Have you ever been tested for COVID-19? <br><i>D. Adakah anda pernah diuji untuk COVID-19? </i></label> 
<br>
<b><?php echo $radio4; ?></b>

   
    <div class="form-group row">
    <label for="rescovid" class="col-4 col-form-label">Result <br> <i>Keputusan</i></label> 
    <div class="col-8">
        <b><?php echo $rescovid; ?></b>
    </div>
  </div> 

  <div class="form-group row">
    <label for="datetest" class="col-4 col-form-label">Date <br> <i>Tarikh</i></label> 
    <div class="col-8">
        <b><?php echo $datetest; ?></b>
    </div>
  </div> 
  
  <div class="form-group row">
    <label for="loctest" class="col-4 col-form-label">Location of Testing <br> <i>Lokasi Ujian</i></label> 
    <div class="col-8">
        <b><?php echo $loctest; ?></b>
    </div>
  </div> 
  
  <div class="form-group row">
    <label for="loctest" class="col-4 col-form-label">COVID-19 Test Result <br> <i>Keputusan Ujian COVID-10</i></label> 
    <div class="col-8">
        <b><?php echo "<a href='uploadedfiles/$covtestresult' target='blank'>$covtestresult</a>"; ?></b>
    </div>
  </div> 

  </div>


<br><br>

<h2>Symptoms</h2>
<hr>
  <div class="form-group row">
    <label class="col-4">Cough <br><i>Batuk / Batuk Kering</i></label> 
    <div class="col-8">
        <b><?php echo $cough; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Difficult Breathing <br><i>Kesukaran Bernafas</i></label> 
    <div class="col-8">
        <b><?php echo $diffbreathing; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Fever <br><i>Demam</i></label> 
    <div class="col-8">
        <b><?php echo $fever; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Flu <br><i>Selesema</i></label> 
    <div class="col-8">
        <b><?php echo $flu; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Sore Throat <br><i>Sakit Tekak</i></label> 
    <div class="col-8">
        <b><?php echo $sorethroat; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Loss of sense of smell / taste <br><i>Hilang deria rasa / bau</i></label> 
    <div class="col-8">
        <b><?php echo $sense; ?></b>
    </div>
  </div>
  <div class="form-group row">
    <table class="table">
      <tr>
        <td>Whooping cough <br><i>Batuk kokol</i></td>
        <td><b><?php echo $wcough; ?></b></td>
        <td>Poliomielities <br><i>Poliomielities</i></td>
        <td><b><?php echo $poliom; ?></b></td>
      </tr>
      <tr>
        <td>Measles <br><i>Campak</i></td>
        <td><b><?php echo $measles; ?></b></td>
        <td>Rabies <br><i>Rabies</i></td>
        <td><b><?php echo $rabies; ?></b></td>
      </tr>
      <tr>
        <td>Chancroid <br><i>Chancroid</i></td>
        <td><b><?php echo $chancroid; ?></b></td>
        <td>Relapsing fever <br><i>Demam berulang</i></td>
        <td><b><?php echo $rfever; ?></b></td>
      </tr>
      <tr>
        <td>Dengue fever <br><i>Demam denggi</i></td>
        <td><b><?php echo $dfever; ?></b></td>
        <td>Syphilis <br><i>Sifilis</i></td>
        <td><b><?php echo $syphilis; ?></b></td>
      </tr>
      <tr>
        <td>Yellow fever <br><i>Demam kuning</i></i></td>
        <td><b><?php echo $yfever; ?></b></td>
        <td>Tetanus <br><i>Tetanus</i></td>
        <td><b><?php echo $tetanus; ?></b></td>
      </tr>
      <tr>
        <td>Diphtheria <br><i>Difteria</i></td>
        <td><b><?php echo $diphtheria; ?></b></td>
        <td>Typhoid fever <br><i>Demam kepialu</i></td>
        <td><b><?php echo $tfever; ?></b></td>
      </tr>
      <tr>
        <td>Dysentries <br><i>Dysentries</i></td>
        <td><b><?php echo $dysentries; ?></b></td>
        <td>Tuberculosis <br><i> Tuberkulosis (TB)</i></td>
        <td><b><?php echo $tuberculosis; ?></b></td>
      </tr>
      <tr>
        <td>Gonococcal infections <br><i> Jangkitan gonokokus</i></td>
        <td><b><?php echo $goninfections; ?></b></td>
        <td>Hepatitis (A/B/C) <br><i> Hepatitis (A/B/C) </i></td>
        <td><b><?php echo $hep; ?></b></td>
      </tr>
      <tr>
        <td>Ebola <br><i> Ebola</i></td>
        <td><b><?php echo $ebola; ?></b></td>
        <td>Conjunctivitis <br><i> Konjungtivitis</i></td>
        <td><b><?php echo $conjunc; ?></b></td>
      </tr>
      <tr>
        <td>Food poisoning <br><i> Keracunan makanan</i></td>
        <td><b><?php echo $foodpoi; ?></b></td>
        <td>Infectious Skin Disorder <br><i> Gangguan kulit berjangkit</i></td>
        <td><b><?php echo $isd; ?></b></td>
      </tr>
      <tr>
        <td>HFMD <br><i> Penyakit tangan, kaki, dan mulut</i></td>
        <td><b><?php echo $hfmd; ?></b></td>
        <td>Leprosy <br><i> Kusta</i></td>
        <td><b><?php echo $leprosy; ?></b></td>
      </tr>
      <tr>
        <td>Cholera <br><i> Kolera</i></td>
        <td><b><?php echo $cholera; ?></b></td>
        <td>Plague <br><i> Wabak</i></td>
        <td><b><?php echo $plague; ?></b></td>
      </tr>
    </table>
  </div> 
<?php


  }

 include('login/footer.php');

 ?>
