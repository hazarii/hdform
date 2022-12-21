<?php


// Header 
include('login/assets.php');

  if(isset($_GET['view_id']) && !empty($_GET['view_id']))
	{
		$id = $_GET['view_id'];
		$stmt = $db->prepare("SELECT * FROM hd_0001 WHERE hd_id ='$id' OR refnum = '$id'");
		$stmt->execute();

	}
   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
   { extract($row);

    if(($doafromcountries == '0000-00-00') || ($doafromcountries == '1970-01-01')){
        $doafromcountries = "";
    }

    if(($datetest == '0000-00-00') || ($datetest == '1970-01-01')){
        $datetest = "";
    }

    if(($datetest == '0000-00-00') || ($datetest == '1970-01-01')){
        $datetest = "";
    }

    if(($coviddate == '0000-00-00') || ($coviddate == '1970-01-01')){
        $coviddate = "";
    }

    if(($influenzadate == '0000-00-00') || ($influenzadate == '1970-01-01')){
        $influenzadate = "";
    }

    if(($monkeypoxdate == '0000-00-00') || ($monkeypoxdate == '1970-01-01')){
        $monkeypoxdate = "";
    }

    if(($otherdisdate == '0000-00-00') || ($otherdisdate == '1970-01-01')){
        $otherdisdate = "";
    }

?>

<title>Manage Applications</title>

<body>


<div class="container">
<div class="row">
<div class="col-md-12">

<br>

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
    <div class="col-sm-8">
    </div>
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
    <label class="col-4">Are you from any company/organisation? <br><i>Adakah anda dari mana-mana syarikat/organisasi?</i></label> 
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
    <label align="justify">A. Are you exhibiting any of the symptoms listed below? <br><i>A. Adakah anda mempunyai simptom seperti berikut?</i></label> 

    <table class='table table-sm table-borderless'>
        <tr>
            <td>Cough / <i>Batuk</i></td>
            <td><b><?php echo $cough; ?></b></td>
            <td>Difficult Breathing / <i>Kesukaran Bernafas</i></td>
            <td><b><?php echo $diffbreathing; ?></b></td>
            <td>Cough / <i>Batuk</i></td>
            <td><b><?php echo $cough; ?></b></td>
            <td>Fever / <i>Chills</i></td>
            <td><b><?php echo $fever; ?></b></td>
            <td>Sore Throat / <i>Sakit Tekak</i></td>
            <td><b><?php echo $sorethroat; ?></b></td>
        </tr>
        <tr>
            <td>Nausea or vomitting / <i>Loya atau muntah</i></td>
            <td><b><?php echo $nausea; ?></b></td>
            <td>Diarrhoea / <i>Cirit-birit</i></td>
            <td><b><?php echo $diarrhoea; ?></b></td>
            <td>Fatigue / <i>Keletihan</i></td>
            <td><b><?php echo $fatigue; ?></b></td>
            <td>Runny nose or nasal congestion / <i>Selesema atau hidung tersumbat</i></td>
            <td><b><?php echo $flu; ?></b></td>
            <td>Rash</i></td>
            <td><b><?php echo $rash; ?></b></td>
        </tr>
        <tr>
            <td>Muscle/Back ache / <i>Sakit badan/belakang</i></td>
            <td><b><?php echo $bodyache; ?></b></td>
            <td>Swollen lymph nodes / <i>Benjolan kelenjar</i></td>
            <td><b><?php echo $swollenlymph; ?></b></td>
            <td>Exhaustion / <i>Letih yang melampau</i></td>
            <td><b><?php echo $exhaustion; ?></b></td>
        </tr>
    </table>

</div> 

<hr>

<div class="form-group">
<label align="justify">B. Have you traveled abroad within the last 5 days?<br><i>B. Adakah anda berkunjung ke luar negara dalam tempoh 5 hari yang lepas?</i><small class="form-text text-muted">For Malaysian only / <i>Untuk warganegara sahaja</i></small></label> <br>
<b><?php echo $radio1; ?></b>

   <div class="form-group row">
   <label for="areafrom" class="col-4 col-form-label">Date of arrival <br> <i>Tarikh ketibaan</i></label> 
    <div class="col-8">
        <b><?php echo $doafromcountries; ?></b>
    </div>
  </div>

  </div>

<hr>

  <div class="form-group">
<label align="justify">C. Have you ever been tested positive for COVID-19 / Influenza / Monkey Pox or any other transmitted diseases? <br><i>C. Adakah anda pernah disahkan positif COVID-19 / Influenza / Cacar Monyet atau lain-lain penyakit berjangkit?</i></label> 
<br>
<b><?php echo $radio4; ?></b>

<table class='table table-sm table-borderless'>
      <tr> <td>
        <label class="form-check-label" for="flexCheckDefault">
        COVID-19</label></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $covid; ?></b></td><td></td>
        <td><small class="form-text text-muted">Date of confirmed positive / <i>Tarikh disahkan positif</i></small><b><?php echo $coviddate; ?></b></td>
      </tr> 
      <tr> <td>
        <label class="form-check-label" for="flexCheckDefault">
        Influenza</label></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $influenza; ?></b></td><td></td>
        <td><small class="form-text text-muted">Date of confirmed positive / <i>Tarikh disahkan positif</i></small><b><?php echo $influenzadate; ?></b></td>
      </tr>
      <tr> <td>
        <label class="form-check-label" for="flexCheckDefault">
        Monkey Pox</label></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $monkeypox; ?></b></td><td></td>
        <td><small class="form-text text-muted">Date of confirmed positive / <i>Tarikh disahkan positif</i></small><b><?php echo $monkeypoxdate; ?></b></td>
      </tr>
      <tr> <td>
        <label class="form-check-label" for="flexCheckDefault">
        Other</label></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $otherdis; ?></b></td><td></td>
        <td><small class="form-text text-muted">Date of confirmed positive / <i>Tarikh disahkan positif</i></small><b><?php echo $otherdisdate; ?></b></td>
      </tr>
    </table>
  </div>
<hr>

<div class="form-group">
<label align="justify">D. Have you completed the COVID-19 vaccination? <br><i>D. Adakah anda telah lengkap vaksinasi COVID-19?</i></label>
<br>
<b><?php echo $radio2; ?></b>

<div class="form-group row">
   <label for="areafrom" class="col-4 col-form-label">Nama Vaksin <br> / Vaccine Name</label> 
    <div class="col-8">
        <b><?php echo $vaxname; ?></b>
    </div>
  </div>

<div class="form-group row">
   <label for="areafrom" class="col-4 col-form-label">Other Vaccine Name</label> 
    <div class="col-8">
        <b><?php echo $vaxother; ?></b>
    </div>
  </div>

  </div>

<hr>
<div class="form-group">
<label align="justify">E. Please upload your Health Screening Result <br> <i>E. Sila muatnaik Keputusan Ujian Kesihatan anda</i></label>


<table class='table table-sm table-borderless'>
    <tr>
        <td>Health Screening Result 1<br> <i>Keputusan Ujian Kesihatan 1</i></td>
        <td> <b><?php echo "<a href='uploadedfiles/$covtestresult' target='blank'>$covtestresult</a>"; ?></b></td>
    </tr>
    <tr>
        <td>Health Screening Result 2<br> <i>Keputusan Ujian Kesihatan 2</i></td>
        <td> <b><?php echo "<a href='uploadedfiles/$covtestresult2' target='blank'>$covtestresult2</a>"; ?></b></td>
    </tr>
</table>


  </div> 

<hr>
<div class="form-group">
<label align="justify">F. Besides the above, are you exhibiting any of the diseases listed below? <br> <i>F. Selain yang di atas, adakah anda mengalami penyakit seperti berikut?</i></label>

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
  </div> 
  </div> 

<?php if((($user->usertype) < 3) && ($applstatus == 'Pending')) {?>
<hr>
<form method="post">
<textarea name="remarks" class="form-control" cols="50" placeholder="Remarks (if any)"></textarea>
<div class="row justify-content-center">
    <div class="col-auto">
<table class="table table-borderless">
<tr>
<td><button name="submitBtnApp" type="submit" value="Approved" class="btn btn-success" onclick="return confirm('Please confirm approval.')">Approve</button></td>
<td><button name="submitBtnRej" type="submit" value="Rejected" class="btn btn-danger" onclick="return confirm('Please confirm to reject.')">Reject</button></td></tr>
</table>
</div>
</div>
</form>
 <?php
} 


$nid = $id*3;
$hashedid = hash('sha256', $nid);


if(isset($_POST['submitBtnApp']))
{
    $btnApp = 'Approved';
    $remarks = $_POST['remarks'];
    $query = $db->prepare("UPDATE hd_0001 SET 
    applstatus = :btnApp,
    remarks = :remarks,
    dt_updstatus = :currentdt, 
    dt_updsby = :dt_updsby
    WHERE hd_id = :hd_id");
    $query->bindParam("btnApp", $btnApp);
    $query->bindParam("remarks", $remarks);
    $query->bindParam("currentdt", $currentdt);
    $query->bindParam("dt_updsby", $user->user_id);
    $query->bindParam("hd_id", $hd_id);

    if($query->execute()){
    echo "<script>alert('Application is approved.');</script>";
    echo "<script>setTimeout(function(){window.location.href = '?view_id=".$hd_id."';}, 150); </script>";

/*  
      email functionality.
      only enable these lines in hosting, not working locally.

$from = "noreply@ainmedicare.com.my";
$to = $appemail; // applicant email
$to2 = $emailaddconperson; // pic email
$to3 = "security@ainmedicare.com.my";
$subject = "Health Declaration Form - APPROVED";
$message = " Salam and greetings. 

Glad to inform that your Health Declaration application ($refnum) to enter Ain Medicare facility has been approved. Form can be viewed as below

https://hdform.ainmedicare.com.my/printappl.php?view_id=$id&toprint=$hashedid

Remarks (if any): $remarks

Thank you. ";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
mail($to2,$subject,$message, $headers);
*/

      } else {
        print_r($query->errorInfo());
      }

}


if(isset($_POST['submitBtnRej']))
{
    $btnApp = 'Reject';
    $remarks = $_POST['remarks'];
    $query = $db->prepare("UPDATE hd_0001 SET 
    applstatus = :btnApp,
    remarks = :remarks,
    dt_updstatus = :currentdt, 
    dt_updsby = :dt_updsby
    WHERE hd_id = :hd_id");
    $query->bindParam("btnApp", $btnApp);
    $query->bindParam("remarks", $remarks);
    $query->bindParam("currentdt", $currentdt);
    $query->bindParam("dt_updsby", $user->user_id);
    $query->bindParam("hd_id", $hd_id);

    if($query->execute()){
    echo "<script>alert('Application is rejected.');</script>";
    echo "<script>setTimeout(function(){window.location.href = '?view_id=".$hd_id."';}, 150); </script>";

/*  
      email functionality.
      only enable these lines in hosting, not working locally.

$from = "noreply@ainmedicare.com.my";
$to = $appemail; // applicant email
$to2 = $emailaddconperson; // pic email
$subject = "Health Declaration Form - REJECT";
$message = " Salam and greetings. 

Regret to inform that your Health Declaration application ($refnum) to enter Ain Medicare facility has been denied.

Remarks (if any): $remarks

Thank you. ";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
mail($to2,$subject,$message, $headers);

*/

      } else {
        print_r($query->errorInfo());
      }

}

  }

 include('login/footer.php');

 ?>
