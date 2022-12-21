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

<!-- boostrap toggle -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


<script>
$(function(){
    $('#thedate').datepicker({
      beforeShowDay: function(d) {
      	return [!(d.getDay()==0||d.getDay()==6)]
      }
    });
});
</script>

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
<i>Borang Pengisytiharan Kesihatan ini membantu kami memastikan pengalaman yang selamat untuk anda. Kami meminta anda untuk benar-benar teliti dalam memberikan kami maklumat yang diminta. Kegagalan untuk mendedahkan maklumat yang diperlukan boleh membahayakan anda dan juga proses kerja kami. Maklumat yang diberikan adalah sulit.
</i>
</p>

<h2>Personnel Information</h2>
<hr>
<form method="POST" enctype="multipart/form-data">
  <div class="form-group row">
    <label class="col-4 col-form-label" for="fullname">Full Name (Mr / Mrs.) <br><i>Nama Penuh (En / Puan / Cik)</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-file-earmark-person"></i>
          </div>
        </div> 
        <input id="fullname" name="fullname" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="mykad" class="col-4 col-form-label">MyKad / Passport No. <br><i>No. MyKad / Passport</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="bi bi-card-heading"></i>
          </div>
        </div> 
        <input id="mykad" name="mykad" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="visoffice" class="col-4 col-form-label">Visiting Office <br><i>Pejabat Kunjungan</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="bi bi-building"></i>
          </div>
        </div> 
        <select name="visoffice" class="form-control" required>
        <option value="HQ">Headquarters // Ibu Pejabat</option>
        <option value="Northern">Northern Branch // Cawangan Kulim</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">E-Mail <br><i>E-Mel</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-inbox"></i>
        </div>
        </div> 
        <input id="email" name="appemail" type="email" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="entryin" class="col-4 col-form-label">Date of Entry <br><i>Tarikh Masuk</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-box-arrow-in-right"></i>
         </div>
        </div>
        <input id="entryin" name="entryin" type="date" required="required" class="form-control" min="<?php echo $currentdate; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="entryout" class="col-4 col-form-label">Until <br><i>Sehingga</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-box-arrow-in-left"></i>          </div>
        </div> 
        <input id="entryout" name="entryout" type="date" required="required" class="form-control" max="<?php echo $maxdate; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Are you an individual applicant or from any organisation? <br><i>Adakah anda pemohon secara individu atau dari syarikat/organisasi?</i></label> 
    <div class="col-8">
    <div class="custom-control custom-radio custom-control-inline">
        <input name="radiocom" id="chkYescom" type="radio" class="custom-control-input" value="Organisation" required="required"> 
        <label for="chkYescom" class="custom-control-label">Organisation</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radiocom" id="chkNocom" type="radio" class="custom-control-input" value="Individual" required="required"> 
        <label for="chkNocom" class="custom-control-label">Individual</label>
      </div>
    </div>
  </div>
<div id="dvChkYescom" style="display: none">
  <div class="form-group row">
    <label for="company" class="col-4 col-form-label">Company / Department <br><i>Organisasi / Syarikat</i></label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-briefcase"></i>
          </div>
        </div> 
        <select name="company" class="form-control">
         <?php 
		 $stmt = $db->prepare("SELECT DISTINCT company FROM hd_0001");
		 $stmt->execute();
     echo "<option value='' selected>List of Company // Senarai Organisasi</option>";
		 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		 { 
	     extract($row);
		 ?>
           <option value="<?php echo $company; ?>"><?php echo $company; 
		 }
		 ?></option>
         </select>
      </div>
      <br>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-briefcase"></i>
          </div>
        </div> 
        <input id="company" name="company2" type="text" class="form-control" placeholder="Only fill if your company is not listed // Hanya isi jika organisasi anda tidak tersenarai">
      </div><br>
    </div>
    </div>
    
  </div>
  <div class="form-group row">
    <label for="caddress" class="col-4 col-form-label">Address <br><i>Alamat</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-pin-map"></i>
          </div>
        </div> 
        <input id="caddress" name="caddress" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ccity" class="col-4 col-form-label">City <br><i>Bandar</i></label> 
    <div class="col-8">
      <input id="ccity" name="ccity" type="text" required="required" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="cstate" class="col-4 col-form-label">State <br><i>Negeri</i></label> 
    <div class="col-8">
      <input id="cstate" name="cstate" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="cpostal" class="col-4 col-form-label">Postal Code <br><i>Poskod</i></label> 
    <div class="col-8">
      <input id="cpostal" name="cpostal" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="telno" class="col-4 col-form-label">Telephone No.<br><i>No. Telefon</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-telephone-inbound"></i>
          </div>
        </div> 
        <input id="telno" name="telno" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="reasonentry" class="col-4 col-form-label">Reason of Entry <br><i>Sebab Untuk Masuk</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-person-plus"></i>
          </div>
        </div> 
        <input id="reasonentry" name="reasonentry" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nameconperson" class="col-4 col-form-label">Name of Contact Person <br><i>Nama orang yang dihubungi</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-person-badge"></i>
          </div>
        </div> 
        <input id="nameconperson" name="nameconperson" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="emailaddconperson" class="col-4 col-form-label">Email Address of Contact Person <br><i>E-mel orang yang dihubungi</i></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-envelope-check"></i>
          </div>
        </div> 
        <input id="emailaddconperson" name="emailaddconperson" type="email" class="form-control">
      </div>
    </div>
  </div> 

  <hr>

  <div class="form-group">
    <label align="justify">A. Please declare if you or any family members staying with you have been travelling to the countries affected by COVID-19 within 14 days of the declaration. <br><i>A. Sila nyatakan jika anda atau mana-mana ahli keluarga yang tinggal bersama anda telah melawat ke negara yang terkena wabak COVID-19 dalam masa 14 hari dari pengisytiharan ini.</i></label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="chkYes" type="radio" class="custom-control-input" value="Yes" required="required"> 
        <label for="chkYes" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="chkNo" type="radio" class="custom-control-input" value="No" required="required"> 
        <label for="chkNo" class="custom-control-label">No</label>
      </div>
    </div>

    <div id="dvChkYes" style="display: none">
    <div class="form-group row">
    <label for="country" class="col-4 col-form-label">Countries <br><i>Negara</i></label> 
    <div class="col-8">
      <input id="country" name="country" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="doafromcountries" class="col-4 col-form-label">Date of arrivals from the state countries <br><i>Tarikh ketibaan dari negara tersebut</i></label> 
    <div class="col-8">
      <input id="doafromcountries" name="doafromcountries" type="date" class="form-control">
    </div>
  </div> 
  </div>
</div> 

<hr>

<div class="form-group">
<label align="justify">B. Please declare if you or any family member staying with you have been travelling to the COVID-19 red zone / MCO / CMCO areas within 14 days of the declaration. <br><i>B. Sila nyatakan jika anda atau mana-mana ahli keluarga yang tinggal bersama anda telah pergi ke / dari kawasan zon merah COVID-19 / PKP / PKPD dalam masa 14 hari dari pengisytiharan ini.</i></label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="chkYes2" type="radio" class="custom-control-input" value="Yes" required="required"> 
        <label for="chkYes2" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio2" id="chkNo2" type="radio" class="custom-control-input" value="No" required="required"> 
        <label for="chkNo2" class="custom-control-label">No</label>
      </div>
    </div>

    <div id="dvChkYes2" style="display: none">

    <div class="form-group row">
    <label for="areafrom" class="col-4 col-form-label">Zone <br> <i>Zon</i></label> 
    <div class="col-8">
<div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary">
    <input type="radio" name="radiozone" id="option1" autocomplete="off" value="Red Zone / Zon Merah"> Red Zone / Zone Merah
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="radiozone" id="option2" autocomplete="off" value="MCO / PKP"> MCO / PKP
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="radiozone" id="option3" autocomplete="off" value="CMCO / PKPD"> CMCO / PKPB
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="radiozone" id="option3" autocomplete="off" value="EMCO / PKPD"> EMCO / PKPD
  </label>
  <label class="btn btn-secondary active">
    <input type="radio" name="radiozone" id="option4" autocomplete="off" value="None / Tiada" checked> None / Tiada
  </label>
</div>
 </div>
  </div> 

    
  <div class="form-group row">
    <label for="areafrom" class="col-4 col-form-label">Area <br> <i>Kawasan</i></label> 
    <div class="col-8">
      <input id="areafrom" name="areafrom" type="text" class="form-control">
    </div>
  </div> 
  </div>
</div>

<hr>

  <div class="form-group">
<label align="justify">C. Do you have any CLOSE CONTACT with a POSITIVE COVID-19 individual? <br><i>C. Adakah anda mempunyai KONTAK RAPAT dengan individu POSITIF COVID-19?</i></label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="chkYes3" type="radio" class="custom-control-input" value="Yes" required="required"> 
        <label for="chkYes3" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio3" id="chkNo3" type="radio" class="custom-control-input" value="No" required="required"> 
        <label for="chkNo3" class="custom-control-label">No</label>
      </div>
    </div>
</div>


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

<h2>Symptoms</h2>
<hr>
  <div class="form-group row">
    <label class="col-4">Cough <br><i>Batuk / Batuk Kering</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary">
    <input type="radio" name="cough" id="option1" autocomplete="off" value="Yes" required> Yes
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="cough" id="option2" autocomplete="off" value="No"> No
  </label>
</div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Difficult Breathing <br><i>Kesukaran Bernafas</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary">
    <input type="radio" name="diffbreathing" id="option1" autocomplete="off" value="Yes" required> Yes
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="diffbreathing" id="option2" autocomplete="off" value="No"> No
  </label>
</div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Fever <br><i>Demam</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary">
    <input type="radio" name="" id="option1" autocomplete="off" value="Yes" required> Yes
  </label>fever
  <label class="btn btn-secondary">
    <input type="radio" name="fever" id="option2" autocomplete="off" value="No"> No
  </label>
</div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Flu <br><i>Selesema</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary">
    <input type="radio" name="flu" id="option1" autocomplete="off" value="Yes" required> Yes
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="flu" id="option2" autocomplete="off" value="No"> No
  </label>
</div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Sore Throat <br><i>Sakit Tekak</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="sorethroat" id="option1" autocomplete="off" value="Yes" required> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="sorethroat" id="option2" autocomplete="off" value="No"> No
    </label>
  </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Loss of sense of smell / taste <br><i>Hilang deria rasa / bau</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="sense" id="option1" autocomplete="off" value="Yes" required> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="sense" id="option2" autocomplete="off" value="No"> No
    </label>
  </div>
    </div>
  </div>

  
<div class="form-group">
<label align="justify">Please declare if you are now having the symptom or on the medication for the following infectious diseases <br><i>Sila nyatakan jika anda sekarang mengalami simptom atau menggunakan ubat berikut untuk penyakit berjangkit seperti berikut </i></label> 
    </div>

    <div class="form-group row">
    <label class="col-4">Whooping cough <br><i>Batuk kokol</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="wcough" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="wcough" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div>

    <div class="form-group row">
    <label class="col-4">Poliomielities <br><i>Poliomielities</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="poliom" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="poliom" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Measles <br><i>Campak</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="measles" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="measles" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Rabies <br><i>Rabies</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="rabies" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="rabies" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Chancroid <br><i>Chancroid</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="chancroid" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="chancroid" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Relapsing fever <br><i>Demam berulang</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="rfever" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="rfever" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Dengue fever <br><i>Demam denggi</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="dfever" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="dfever" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Syphilis <br><i>Sifilis</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="syphilis" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="syphilis" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Yellow fever <br><i>Demam kuning</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="yfever" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="yfever" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Tetanus <br><i>Tetanus</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="tetanus" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="tetanus" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Diphtheria <br><i>Difteria</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="diphtheria" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="diphtheria" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Typhoid fever <br><i>Demam kepialu</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="tfever" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="tfever" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Dysentries <br><i>Dysentries</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="dysentries" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="dysentries" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Tuberculosis <br><i> Tuberkulosis (TB)</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="tuberculosis" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="tuberculosis" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Gonococcal infections <br><i> Jangkitan gonokokus</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="goninfections" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="goninfections" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Hepatitis (A/B/C) <br><i> Hepatitis (A/B/C) </i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="hep" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="hep" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Ebola <br><i> Ebola</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="ebola" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="ebola" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Conjunctivitis <br><i> Konjungtivitis</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="conjunc" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="conjunc" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Food poisoning <br><i> Keracunan makanan</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="foodpoi" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="foodpoi" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Infectious Skin Disorder <br><i> Gangguan kulit berjangkit</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="isd" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="isd" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">HFMD <br><i> Penyakit tangan, kaki, dan mulut</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="hfmd" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="hfmd" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Leprosy <br><i> Kusta</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="leprosy" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="leprosy" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Cholera <br><i> Kolera</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="cholera" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="cholera" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 

    <div class="form-group row">
    <label class="col-4">Plague <br><i> Wabak</i></label> 
    <div class="col-8">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
      <input type="radio" name="plague" id="option1" autocomplete="off" value="Yes"> Yes
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="plague" id="option2" autocomplete="off" value="No" required> No
    </label>
  </div>
    </div>
  </div> 
  <br>

<h2>
    Declaration and Disclaimer
</h2>
<hr>
<p align="justify">I hereby declare that the information provided are complete and true. I am aware that I will be responsible for all the information given. Should the information declared are found incorrect or manipulated I hereby undertake to take full responsibility and shall be liable for any action taken by the company against me. I am physically fit to participate in this activity, implying that I have no medical or physical conditions. I have consulted a doctor in advance, and I am willing to assume and bear the consequential costs of any risks that may be created, directly or indirectly, by any such condition. By submitting this declaration form, I agree to the collection, use and disclosure of my personal, movement, close contact persons and health information above by Ain Medicare Sdn. Bhd. or other authorised parties by Ain Medicare Sdn. Bhd. for precautionary measure against COVID-19 or other infectious diseases. I shall not take any legal actions against Ain Medicare Sdn. Bhd. or other authorised parties by Ain Medicare Sdn. Bhd. if my personal data being used for any purpose by any parties or disclosure by any parties for whatsoever reason to public without written approval from Ain Medicare Sdn. Bhd. </p>

<br><p align="justify"><i>
Dengan ini saya menyatakan bahawa maklumat yang diberikan adalah lengkap dan benar. Saya sedar bahawa saya akan bertanggungjawab untuk semua maklumat yang diberikan. Sekiranya maklumat yang dinyatakan didapati salah atau dimanipulasi, dengan ini saya berjanji untuk mengambil tanggungjawab penuh dan akan bertanggungjawab atas tindakan yang diambil oleh syarikat terhadap saya. Saya sihat secara fizikal untuk menyertai aktiviti ini, yang bermaksud bahawa saya tidak mempunyai keadaan perubahan atau fizikal dan saya bersedia untuk menanggung kos akibat risiko yang mungkin terhasil secara langsung atau tidak langsung, oleh keadaan sedemikian. Dengan menghantar borang perisytiharan ini, saya bersetuju dengan pengumpulan, penggunaan dan pendedahan peribadi, pergerakan, kontak rapat dan maklumat kesihatan di atas oleh AIN Medicare Sdn.Bhd. atau pihak lain yang diberi kuasa oleh AIN Medicare Sdn. Bhd. untuk langkah berjaga-jaga terhadap COVID-19 atau penyakit berjangkit lain. Saya tidak akan mengambil sebarang tindakan undang-undang terhadap AIN Medicare Sdn. Bhd. atau pihak lain yang diberi kuasa oleh AIN Medicare Sdn.Bhd. sekiranya maklumat peribadi saya digunakan untuk apa-apa tujuan oleh mana-mana pihak atau pendedahan oleh mana-mana pihak dengan alasan apa pun kepada pihak awam tanpa kebenaran bertulis dari AIN Medicare Sdn. Bhd.</i></p>

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
    $entryin = strtotime($_POST['entryin']);
    $entryin = date('Y-m-d', $entryin); 
    $entryout = strtotime($_POST['entryout']);
    $entryout = date('Y-m-d', $entryout); 

    if (($entryin != $entryout) && ($entryin > $entryout)){
      echo '<script>alert("Please review entry in/out dates. // Sila lihat semua tarikh keluar/masuk");</script>';
      exit();
    }

		$fullname = $_POST['fullname'];
		$mykad = $_POST['mykad'];
		$visoffice = $_POST['visoffice'];
		$appemail = $_POST['appemail'];
		$radiocom = $_POST['radiocom'];
		$company = $_POST['company'];
		$company2 = $_POST['company2'];
		$caddress = $_POST['caddress'];
		$ccity = $_POST['ccity'];
		$cstate = $_POST['cstate'];
		$cpostal = $_POST['cpostal'];
		$telno = $_POST['telno'];
		$reasonentry = $_POST['reasonentry'];
		$nameconperson = $_POST['nameconperson'];
		$emailaddconperson = $_POST['emailaddconperson'];
		$radio1 = $_POST['radio1'];
		$country = $_POST['country'];
		$doafromcountries = strtotime($_POST['doafromcountries']);
		$doafromcountries = date('Y-m-d', $doafromcountries); 
		$radio2 = $_POST['radio2'];
		$radiozone = $_POST['radiozone'];
		$areafrom = $_POST['areafrom'];
		$radio3 = $_POST['radio3'];
		$radio4 = $_POST['radio4'];
		$rescovid = $_POST['rescovid'];
		$datetest = strtotime($_POST['datetest']);
		$datetest = date('Y-m-d', $datetest); 
		$loctest = $_POST['loctest'];
		$cough = $_POST['cough'];
		$diffbreathing = $_POST['diffbreathing'];
		$fever = $_POST['fever'];
		$flu = $_POST['flu'];
		$sorethroat = $_POST['sorethroat'];
		$sense = $_POST['sense'];
		$wcough = $_POST['wcough'];
		$poliom = $_POST['poliom'];
		$measles = $_POST['measles'];
		$rabies = $_POST['rabies'];
		$chancroid = $_POST['chancroid'];
		$rfever = $_POST['rfever'];
		$dfever = $_POST['dfever'];
		$syphilis = $_POST['syphilis'];
		$yfever = $_POST['yfever'];
		$tetanus = $_POST['tetanus'];
    $diphtheria = $_POST['diphtheria'];
    $tfever = $_POST['tfever'];
    $dysentries = $_POST['dysentries'];
    $tuberculosis = $_POST['tuberculosis'];
    $goninfections = $_POST['goninfections'];
    $hep = $_POST['hep'];
    $ebola = $_POST['ebola'];
    $conjunc = $_POST['conjunc'];
    $foodpoi = $_POST['foodpoi'];
    $isd = $_POST['isd'];
    $hfmd = $_POST['hfmd'];
    $leprosy = $_POST['leprosy'];
    $cholera = $_POST['cholera'];
    $plague = $_POST['plague'];

    $dt_apply = $currentdt;

    // company name

    if(($company != "") && ($company2 != "")){
      $company = $company;
    } else if($company != ""){
      $company = $company;
    } else {
      $company = $company2;
    }

    // test result document

    $imgFile = $_FILES['covtestresult']['name'];
    $tmp_dir = $_FILES['covtestresult']['tmp_name'];
    $imgSize = $_FILES['covtestresult']['size'];

    $upload_dir = 'uploadedfiles/'; // upload directory
   
   if($imgFile != ""){
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'HEVC', 'HEIC', 'JPEG', 'JPG', 'jfif', 'JFIF'); // valid extensions
  
   // rename uploading image
   $covtestresult = $imgFile;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
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
      $query = $db->prepare("INSERT INTO hd_0001(refnum,fullname,mykad,visoffice,appemail,entryin,entryout,company,caddress,ccity,cstate,cpostal,telno,reasonentry,nameconperson,emailaddconperson,radio1,country,doafromcountries,radio2,areafrom,radio3,radio4,rescovid,datetest,loctest,cough,diffbreathing,fever,flu,sorethroat,dt_apply,covtestresult,radiocom,radiozone,sense,wcough,poliom,measles,rabies,chancroid,rfever,dfever,syphilis,yfever,tetanus,diphtheria,tfever,dysentries,tuberculosis,goninfections,hep,ebola,conjunc,foodpoi,isd,hfmd,leprosy,cholera,plague) VALUES (:refnum,:fullname,:mykad,:visoffice,:appemail,:entryin,:entryout,:company,:caddress,:ccity,:cstate,:cpostal,:telno,:reasonentry,:nameconperson,:emailaddconperson,:radio1,:country,:doafromcountries,:radio2,:areafrom,:radio3,:radio4,:rescovid,:datetest,:loctest,:cough,:diffbreathing,:fever,:flu,:sorethroat,:dt_apply,:covtestresult,:radiocom,:radiozone,:sense,:wcough,:poliom,:measles,:rabies,:chancroid,:rfever,:dfever,:syphilis,:yfever,:tetanus,:diphtheria,:tfever,:dysentries,:tuberculosis,:goninfections,:hep,:ebola,:conjunc,:foodpoi,:isd,:hfmd,:leprosy,:cholera,:plague)");
      $query->bindParam("refnum", $refnum);
      $query->bindParam("fullname", $fullname);
      $query->bindParam("mykad", $mykad);
      $query->bindParam("visoffice", $visoffice);
      $query->bindParam("appemail", $appemail);
      $query->bindParam("entryin", $entryin);
      $query->bindParam("entryout", $entryout);
      $query->bindParam("company", $company);
      $query->bindParam("caddress", $caddress);
      $query->bindParam("ccity", $ccity);
      $query->bindParam("cstate", $cstate);
      $query->bindParam("cpostal", $cpostal);
      $query->bindParam("telno", $telno);
      $query->bindParam("reasonentry", $reasonentry);
      $query->bindParam("nameconperson", $nameconperson);
      $query->bindParam("emailaddconperson", $emailaddconperson);
      $query->bindParam("radio1", $radio1);
      $query->bindParam("country", $country);
      $query->bindParam("doafromcountries", $doafromcountries);
      $query->bindParam("radio2", $radio2);
      $query->bindParam("areafrom", $areafrom);
      $query->bindParam("radio3", $radio3);
      $query->bindParam("radio4", $radio4);
      $query->bindParam("rescovid", $rescovid);
      $query->bindParam("datetest", $datetest);
      $query->bindParam("loctest", $loctest);
      $query->bindParam("cough", $cough);
      $query->bindParam("diffbreathing", $diffbreathing);
      $query->bindParam("fever", $fever);
      $query->bindParam("flu", $flu);
      $query->bindParam("sorethroat", $sorethroat);
      $query->bindParam("dt_apply", $dt_apply);
      $query->bindParam("covtestresult", $covtestresult);
      $query->bindParam("radiocom", $radiocom);
      $query->bindParam("radiozone", $radiozone);
      $query->bindParam("sense", $sense);
      $query->bindParam("wcough", $wcough);
      $query->bindParam("poliom", $poliom);
      $query->bindParam("measles", $measles);
      $query->bindParam("rabies", $rabies);
      $query->bindParam("chancroid", $chancroid);
      $query->bindParam("rfever", $rfever);
      $query->bindParam("dfever", $dfever);
      $query->bindParam("syphilis", $syphilis);
      $query->bindParam("yfever", $yfever);
      $query->bindParam("tetanus", $tetanus);
      $query->bindParam("diphtheria", $diphtheria);
      $query->bindParam("tfever", $tfever);
      $query->bindParam("dysentries", $dysentries);
      $query->bindParam("tuberculosis", $tuberculosis);
      $query->bindParam("goninfections", $goninfections);
      $query->bindParam("hep", $hep);
      $query->bindParam("ebola", $ebola);
      $query->bindParam("conjunc", $conjunc);
      $query->bindParam("foodpoi", $foodpoi);
      $query->bindParam("isd", $isd);
      $query->bindParam("hfmd", $hfmd);
      $query->bindParam("leprosy", $leprosy);
      $query->bindParam("cholera", $cholera);
      $query->bindParam("plague", $plague);
      
     if($visoffice == 'HQ'){
      $hremail1 = "azman@ainmedicare.com.my"; 
      $hremail2 = "hadi@ainmedicare.com.my";
     } else {
      $hremail1 = "nursalikin@ainmedicare.com.my";
      $hremail2 = "khairul.anwar@ainmedicare.com.my"; 
      $hremail3 = "shaamim@ainmedicare.com.my";
     }

      if($query->execute())
      {
       // return $db->lastInsertId();

      echo '<script>alert("[REFNUM: ' . $refnum . '] Your application has been recorded. Thank you. // Permohonan anda telah disimpan. Terima kasih.");</script>';

      echo "<script>setTimeout(function(){window.location.href = 'hdform.php';}, 3000); </script>";
/*  
      email functionality.
      only enable these lines in hosting, not working locally.

      $from = "noreply@ainmedicare.com.my";
      $tohr1 = $hremail1; // hr email 
      $tohr2 = $hremail2; // hr email
      $tohr3 = $hremail3; // hr email
      $to1 = $appemail; // applicant
      $to2 = $emailaddconperson; // contact person email
      $subject = "Health Declaration Form - New Application";
      
      // hr
      $message = "
      Salam and greetings.
      
      A Health Declaration Form has been submitted for Reference No. : $refnum. Form can be viewed in the link below. Please be noted to login prior reviewing.
      
      Personnel Information
      Full Name: $fullname
      MyKad / Passport No.: $mykad
      Date of Entry: $entryin until $entryout
      Company / Department: $company
      Working Address: $cadress, $ccity
      Telephone Number: $telno
      Reason of Entry: $reasonentry
      Status: Pending Approval

      https://hdform.ainmedicare.com.my/manageappl.php?view_id=$refnum

      Thank you. ";
      
      // applicant and pic
      $message2 = "
      Salam and greetings. 

      A Health Declaration Form has been submitted for Reference No. : $refnum. Details are as follows:
      
      Personnel Information
      Full Name: $fullname
      MyKad / Passport No.: $mykad
      Date of Entry: $entryin until $entryout
      Company / Department: $company
      Working Address: $cadress, $ccity
      Telephone Number: $telno
      Reason of Entry: $reasonentry
      Status: Pending Approval

      Thank you. ";
      $headers = "From:" . $from;
      mail($tohr1,$subject,$message, $headers); // internal - hr
      mail($tohr2,$subject,$message, $headers); // internal - hr
      mail($tohr3,$subject,$message, $headers); // internal - hr
      mail($to2,$subject,$message2, $headers); // internal - pic
      mail($to1,$subject,$message2, $headers); // external - applicant

      */
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