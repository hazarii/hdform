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

<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
    <div class="form-control search-box" style="border:none">
    <br>
        <input type="text" autocomplete="off" placeholder="Search" class="form-control"/>
        <br>
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
    </div>
    

</div>
</div>
</div>
 <?php
  


 include('login/footer.php');

 ?>
