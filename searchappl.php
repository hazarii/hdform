<?php

// Header 
include('login/assets.php');


?>

<title>Search Applications</title>
<script>
    window.onload = function(){
    document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
    };
};
</script>
<style>
.announcebox:hover {
    box-shadow: 2px 2px 5px rgba(0,0,0,.2);

}

    #close {
    float:right;
    display:inline-block;
    padding:2px 5px;
    background:#ccc;
}

#close:hover {
        float:right;
        display:inline-block;
        padding:2px 5px;
        background:#ccc;
    color:#fff;
    }
</style>

<body>

<div class="container">
<div class="row">
<div class="col-md-12">

</head>
<body>
    <form method='get'>
    <br>
        <input type="text" autocomplete="off" placeholder="Search" name="searchval" class="form-control" required/>
        <br>
        <button name="submitBtn" type="submit" class="btn btn-primary btn-block"><i class="bi bi-search"></i>&nbsp;&nbsp;Search / Cari</button>
    </form>
    <hr>
    <div class="alert alert-info announcebox" id="announce"> 
    <button class="close" onclick="document.getElementById('announce').style.display='none'" >X</button>
    <div class="row justify-content-center">
    <div class="col-auto">
    <table class="table table-sm table-borderless table-responsive">
        <tr><td><strong>Search can be made based on</strong>:</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><strong>Carian boleh dibuat berdasarkan</strong>:</td></tr>
    <tr>
            <td>
             <ol>
                <li>Name</li>
                <li>Reference number</li>
                <li>MyKad / Passport </li>
                <li>Application date</li>
                <li>Entry In date</li>
                <li>Company name</li>
                </ol>
            </td>
            <td></td>
            <td> 
<ol>
    <li>Nama</li>
    <li>Nombor Rujukan</li>
    <li>MyKad / Passport </li>
    <li>Tarikh Permohonan</li>
    <li>Tarikh Masuk</li>
    <li>Nama Syarikat</li>
</ol>
            </td>
    </tr>
</table>
</div>
</div>
</div>
        <div class="result"></div>

        <?php
if(isset($_GET['submitBtn']))
{

    $term = $_GET['searchval'];

    $sql = "SELECT * FROM hd_0001 WHERE visoffice = '$user->ainloc' AND (fullname LIKE '%$term%' OR mykad LIKE '%$term%' OR entryin LIKE '%$term%' OR entryout LIKE '%$term%' OR company LIKE '%$term%' OR refnum LIKE '%$term%') ORDER BY dt_apply DESC";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $count = $stmt->rowCount();
        echo "<b>$count</b> search result for: <b>\"$term\"</b><br><br>";
        echo "<table class='table'>
        <thead class='thead-dark'><tr>
        <td><b>#</b></td>
        <td><b>Ref</b></td>
        <td><b>Name</b></td>
        <td><b>MyKad / Passport</b></td>
        <td><b>Date Applied</b></td>
        <td><b>Entry In</b></td>
        <td><b>Entry Out</b></td>
        <td><b>Company</b></td>
        <td><b>Status</b></td>
        <td><b>Location</b></td>
        <td><b>View</b></td></tr>
        </thead>";
        $counter = "1";
        while($row = $stmt->fetch()){

            if($row["applstatus"] == 'Approved'){
                $statcolour = "green";
            } else if ($row["applstatus"] == 'Pending'){
                $statcolour = "orange";
            } else {
                $statcolour = "red";
            }
            echo "<tbody><tr><td>" . $counter; $counter++ . "</td>";
            echo "<td>" . $row["refnum"] . "</td>";
            echo "<td>" . $row["fullname"] . "</td>";
            echo "<td>" . $row["mykad"] . "</td>";
            echo "<td>" . $row["dt_apply"] . "</td>";
            echo "<td>" . $row["entryin"] . "</td>";
            echo "<td>" . $row["entryout"] . "</td>";
            echo "<td>" . $row["company"] . "</td>";
            echo "<td style='color:$statcolour';>" . $row["applstatus"] . "</td>";
            echo "<td>" . $row["visoffice"] . "</td>";
            echo "<td><a href='manageappl.php?view_id=$row[hd_id]'> <button type='button' class='btn btn-labeled btn-primary btn-sm'><span class='btn-label'><i class='bi bi-arrow-up-right'></i></span></button></a></td></tr></tbody>";
        }
        echo "</table>";
    } else{
        echo "<p class='text-center'>Tiada hasil carian <br><br> No matches found</p>";
    }


}
    ?>


</div>
</div>
</div>
 <?php
  


 include('login/footer.php');

 ?>
