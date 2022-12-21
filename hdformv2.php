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

<style>
  
th, td {
  padding: 30px;
}

</style>

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
require __DIR__ . '/../login/database.php';
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
        <option value="HQ">Headquarters // Ibu Pejabat (Kota Bharu)</option>
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
    <label class="col-4">Are you from any company/organisation? <br><i>Adakah anda dari mana-mana syarikat/organisasi?</i></label> 
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
    <label for="nameconperson" class="col-4 col-form-label">Name of Contact Person at Ain Medicare Sdn Bhd<br><i>Nama orang yang dihubungi di Ain Medicare Sdn Bhd</i></label> 
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
    <label for="emailaddconperson" class="col-4 col-form-label">Email Address of Contact Person at Ain Medicare Sdn Bhd<br><i>E-mel orang yang dihubungi di Ain Medicare Sdn Bhd</i></label> 
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
<label align="justify">A. Are you exhibiting any of the symptoms listed below? <br><i>A. Adakah anda mempunyai simptom seperti berikut?</i></label>
<br>
<br>
<div class='container'>
   <input type='hidden' name='cough' value='No'><input type='checkbox' name='cough' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Cough / <i>Batuk</i></label>

        <br>
        
        <input type='hidden' name='diffbreathing' value='No'><input type='checkbox' name='diffbreathing' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Difficult Breathing / <i>Kesukaran Bernafas</i></label>

        <br>
     
        <input type='hidden' name='sense' value='No'><input type='checkbox' name='sense' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Loss of sense of smell / taste <i>Hilang deria rasa / bau</i></label>

        <br>

        <input type='hidden' name='fever' value='No'><input type='checkbox' name='fever' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Fever / <i>Chills</i></label>
        
        <br>
        <input type='hidden' name='sorethroat' value='No'><input type='checkbox' name='sorethroat' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Sore Throat / <i>Sakit Tekak</i></label>
        
        <br>
        <input type='hidden' name='nausea' value='No'><input type='checkbox' name='nausea' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Nausea or vomitting / <i>Loya atau muntah</i></label>
        
        <br>
        <input type='hidden' name='diarrhoea' value='No'><input type='checkbox' name='diarrhoea' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Diarrhoea / <i>Cirit-birit</i></label>
        
        <br>
        <input type='hidden' name='fatigue' value='No'><input type='checkbox' name='fatigue' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">Fatigue / <i>Keletihan</i></label>
        
        <br>
        <input type='hidden' name='flu' value='No'><input type='checkbox' name='flu' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Runny nose or nasal congestion / <i>Selesema atau hidung tersumbat</i></label>
        
        <br>
        <input type='hidden' name='rash' value='No'><input type='checkbox' name='rash' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Rash / <i>Ruam</i></label>
        
        <br>
        <input type='hidden' name='bodyache' value='No'><input type='checkbox' name='bodyache' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Muscle/Backache / <i>Sakit badan/belakang</i></label>
        
        <br>
        <input type='hidden' name='swollenlymph' value='No'><input type='checkbox' name='swollenlymph' class='form-check-input' value='Yes'></td> <td>
        <label class="form-check-label" for="flexCheckDefault">
        Swollen lymph nodes / <i>Benjolan kelenjar</i></label>
        
        <br>
        <input type='hidden' name='exhaustion' value='No'><input type='checkbox' name='exhaustion' class='form-check-input' value='Yes'>
        <label class="form-check-label" for="flexCheckDefault">
        Exhaustion / <i>Letih yang melampau</i></label>

    </div>
    </div>

    <hr>

  <div class="form-group">
    <label align="justify">B. Have you traveled abroad within the last 5 days?<br><i>B. Adakah anda berkunjung ke luar negara dalam tempoh 5 hari yang lepas?</i><small class="form-text text-muted">For Malaysian only / <i>Untuk warganegara sahaja</i></small></label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="chkYes" type="radio" class="custom-control-input" value="Yes"> 
        <label for="chkYes" class="custom-control-label">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio1" id="chkNo" type="radio" class="custom-control-input" value="No"> 
        <label for="chkNo" class="custom-control-label">No</label>
      </div>
    </div>

    <div id="dvChkYes" style="display: none">
  <div class="form-group row">
    <label for="doafromcountries" class="col-4 col-form-label">Date of arrival <br><i>Tarikh ketibaan </i></label> 
    <div class="col-8">
      <input id="doafromcountries" name="doafromcountries" type="date" class="form-control">
    </div>
  </div> 
  </div>
</div> 


<hr>

  <div class="form-group">
<label align="justify">C. Have you ever been tested positive for COVID-19 / Influenza / Monkey Pox or any other transmitted diseases? <br><i>C. Adakah anda pernah disahkan positif COVID-19 / Influenza / Cacar Monyet atau lain-lain penyakit berjangkit?</i>
       
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

    <br><div class='container'>
    <table class='table table-sm table-borderless'>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='hidden' name='covid' value='No'><input type='checkbox' name='covid' class='form-check-input' value='Yes'></td> <td>
        <label class="form-check-label" for="flexCheckDefault">
        COVID-19</label></td><td></td>
        <td><small class="form-text text-muted">Date of confirmed positive / <i>Tarikh disahkan positif</i></small><input name="coviddate" type="date" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='hidden' name='influenza' value='No'><input type='checkbox' name='influenza' class='form-check-input' value='Yes'> </td> <td>
        <label class="form-check-label" for="flexCheckDefault">
        Influenza</label></td><td></td>
        <td><small class="form-text text-muted">Date of confirmed positive / <i>Tarikh disahkan positif</i></small><input name="influenzadate" type="date" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='hidden' name='monkeypox' value='No'><input type='checkbox' name='monkeypox' class='form-check-input' value='Yes'> </td> <td>
        <label class="form-check-label" for="flexCheckDefault">
        Monkey Pox</label></td><td></td>
        <td><small class="form-text text-muted">Date of confirmed positive / <i>Tarikh disahkan positif</i></small><input name="monkeypoxdate" type="date" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='hidden' name='otherdis' value='No'><input type='checkbox' name='otherdis' class='form-check-input' value='Yes'> </td> <td>
        <input type='text' class='form-control form-control-sm' placeholder='Others'></td><td></td>
        <td><small class="form-text text-muted">Date of confirmed positive / <i>Tarikh disahkan positif</i></small><input name="otherdisdate" type="date" class="form-control"></td>
      </tr>
    </table>

</div>
</div>

    </div>
<hr>


  <div class="form-group">
<label align="justify">D. Have you completed the COVID-19 vaccination? <br><i>D. Adakah anda telah lengkap vaksinasi COVID-19?</i></label>

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

<br><div class='container'>

<div class="form-group row">
    <label class="col-4">Nama Vaksin <br> / Vaccine Name</label> 
    <div class="col-8">
      <select class='form-control' name='vaxname'>
        <option value='AstraZeneca'>AstraZeneca</option>
        <option value='CanSino'>CanSino</option>
        <option value='Janssen (Johnson & Johnson)'>Janssen (Johnson & Johnson)</option>
        <option value='Moderna'>Moderna</option>
        <option value='Novanax'>Novanax</option>
        <option value='Pfizer/BioNTech'>Pfizer/BioNTech</option>
        <option value='Sinopharm'>Sinopharm</option>
        <option value='Sinovac'>Sinovac</option>
        <option value='Others'>Others</option>
      </select>
      <input type='text' name='vaxother' class='form-control' placeholder='Other Vaccine Name'>
    </div>
  </div>

</div>
</div>
</div>

<hr>


<label align="justify">E. Please upload your Health Screening Result <br> <i>E. Sila muatnaik Keputusan Ujian Kesihatan anda</i></label>


<div class="form-group row">
  <label for="loctest" class="col-4 col-form-label">Health Screening Result 1<br> <i>Keputusan Ujian Kesihatan 1</i></label> 
    <div class="col-8">
    <input class="form-control" type="file" name="covtestresult" accept="image/*,.pdf" />
    </div>
  </div> 

  <div class="form-group row">
  <label for="loctest" class="col-4 col-form-label">Health Screening Result 2<br> <i>Keputusan Ujian Kesihatan 2</i></label> 
    <div class="col-8">
    <input class="form-control" type="file" name="covtestresult2" accept="image/*,.pdf" />
    </div>
  </div> 

<hr>

<label align="justify">F. Besides the above, are you exhibiting any of the diseases listed below? <br> <i>F. Selain yang di atas, adakah anda mengalami penyakit seperti berikut?</i></label>

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
      echo '<script>alert("Please review entry in/out dates. // Sila lihat semula tarikh keluar/masuk");</script>';
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
		$cough = $_POST['cough'];
		$diffbreathing = $_POST['diffbreathing'];
		$sense = $_POST['sense'];
		$fever = $_POST['fever'];
		$sorethroat = $_POST['sorethroat'];
		$nausea = $_POST['nausea'];
		$diarrhoea = $_POST['diarrhoea'];
		$fatigue = $_POST['fatigue'];
		$flu = $_POST['flu'];
		$rash = $_POST['rash'];
		$bodyache = $_POST['bodyache'];
		$swollenlymph = $_POST['swollenlymph'];
		$exhaustion = $_POST['exhaustion'];
		$radio1 = $_POST['radio1'];
		$doafromcountries = strtotime($_POST['doafromcountries']);
		$doafromcountries = date('Y-m-d', $doafromcountries);
		$radio4 = $_POST['radio4'];
    $covid = $_POST['covid'];
		$coviddate = strtotime($_POST['coviddate']);
		$coviddate = date('Y-m-d', $coviddate);
    $influenza = $_POST['influenza'];
		$influenzadate = strtotime($_POST['influenzadate']);
		$influenzadate = date('Y-m-d', $influenzadate);
    $monkeypox = $_POST['monkeypox'];
		$monkeypoxdate = strtotime($_POST['monkeypoxdate']);
		$monkeypoxdate = date('Y-m-d', $monkeypoxdate);
    $otherdis = $_POST['otherdis'];
		$otherdisdate = strtotime($_POST['otherdisdate']);
		$otherdisdate = date('Y-m-d', $otherdisdate);
		$radio2 = $_POST['radio2'];
		$vaxname = $_POST['vaxname'];
		$vaxother = $_POST['vaxother'];
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
      echo '<script>alert("Your Health Screening Result 1 is too large. Please try again. // Keputusan Ujian Kesihatan 1 anda terlalu besar. Sila cuba lagi.");</script>';
    }
   }
   else{
    echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF & PDF files are allowed. // Maaf, hanya fail JPG, JPEG, PNG, GIF & PDF sahaja yang dibenarkan.");</script>';
   }
   } else {
       $covtestresult = "";
   }

   // file 2

    $imgFile = $_FILES['covtestresult2']['name'];
    $tmp_dir = $_FILES['covtestresult2']['tmp_name'];
    $imgSize = $_FILES['covtestresult2']['size'];

    $upload_dir = 'uploadedfiles/'; // upload directory
   
   if($imgFile != ""){
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'HEVC', 'HEIC', 'JPEG', 'JPG', 'jfif', 'JFIF'); // valid extensions
  
   // rename uploading image
   $covtestresult2 = $imgFile;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$covtestresult2);
    }
    else{
      echo '<script>alert("Your Health Screening Result 2 is too large. Please try again. // Keputusan Ujian Kesihatan 2 anda terlalu besar. Sila cuba lagi.");</script>';
    }
   }
   else{
    echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF & PDF files are allowed. // Maaf, hanya fail JPG, JPEG, PNG, GIF & PDF sahaja yang dibenarkan.");</script>';
   }
   } else {
       $covtestresult2 = "";
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
      $query = $db->prepare("INSERT INTO hd_0001(refnum,fullname,mykad,visoffice,appemail,entryin,entryout,company,caddress,ccity,cstate,cpostal,telno,reasonentry,nameconperson,emailaddconperson,cough,diffbreathing,sense,fever,sorethroat,nausea,diarrhoea,fatigue,flu,rash,bodyache,swollenlymph,exhaustion,radio1,country,doafromcountries,radio4,covid,coviddate,influenza,influenzadate,monkeypox,monkeypoxdate,otherdis,otherdisdate,radio2,vaxname,vaxother,covtestresult,covtestresult2,wcough,poliom,measles,rabies,chancroid,rfever,dfever,syphilis,yfever,tetanus,diphtheria,tfever,dysentries,tuberculosis,goninfections,hep,ebola,conjunc,foodpoi,isd,hfmd,leprosy,cholera,plague,dt_apply) VALUES (:refnum,:fullname,:mykad,:visoffice,:appemail,:entryin,:entryout,:company,:caddress,:ccity,:cstate,:cpostal,:telno,:reasonentry,:nameconperson,:emailaddconperson,:cough,:diffbreathing,:sense,:fever,:sorethroat,:nausea,:diarrhoea,:fatigue,:flu,:rash,:bodyache,:swollenlymph,:exhaustion,:radio1,:country,:doafromcountries,:radio4,:covid,:coviddate,:influenza,:influenzadate,:monkeypox,:monkeypoxdate,:otherdis,:otherdisdate,:radio2,:vaxname,:vaxother,:covtestresult,:covtestresult2,:wcough,:poliom,:measles,:rabies,:chancroid,:rfever,:dfever,:syphilis,:yfever,:tetanus,:diphtheria,:tfever,:dysentries,:tuberculosis,:goninfections,:hep,:ebola,:conjunc,:foodpoi,:isd,:hfmd,:leprosy,:cholera,:plague,:dt_apply)");
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
      $query->bindParam("cough", $cough);
      $query->bindParam("diffbreathing", $diffbreathing);
      $query->bindParam("sense", $sense);
      $query->bindParam("fever", $fever);
      $query->bindParam("sorethroat", $sorethroat);
      $query->bindParam("nausea", $nausea);
      $query->bindParam("diarrhoea", $diarrhoea);
      $query->bindParam("fatigue", $fatigue);
      $query->bindParam("flu", $flu);
      $query->bindParam("rash", $rash);
      $query->bindParam("bodyache", $bodyache);
      $query->bindParam("swollenlymph", $swollenlymph);
      $query->bindParam("exhaustion", $exhaustion);
      $query->bindParam("radio1", $radio1);
      $query->bindParam("country", $country);
      $query->bindParam("doafromcountries", $doafromcountries);
      $query->bindParam("radio4", $radio4);
      $query->bindParam("covid", $covid);
      $query->bindParam("coviddate", $coviddate);
      $query->bindParam("influenza", $influenza);
      $query->bindParam("influenzadate", $influenzadate);
      $query->bindParam("monkeypox", $monkeypox);
      $query->bindParam("monkeypoxdate", $monkeypoxdate);
      $query->bindParam("otherdis", $otherdis);
      $query->bindParam("otherdisdate", $otherdisdate);
      $query->bindParam("radio2", $radio2);
      $query->bindParam("vaxname", $vaxname);
      $query->bindParam("vaxother", $vaxother);
      $query->bindParam("covtestresult", $covtestresult);
      $query->bindParam("covtestresult2", $covtestresult2);
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
      $query->bindParam("dt_apply", $dt_apply);
      
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