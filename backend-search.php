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

// Start Session
session_start();

// Database connection
require __DIR__ . '/login/database.php';
$db = DB();

// library connection
require __DIR__ . '/login/lib/library.php';
$app = new DemoLib();
$user = $app->UserDetails($_SESSION['user_id']); // get user details

?>

</head>

<?php

$statcolour = "";

// Header 


// Attempt search query execution
try{
    if(isset($_REQUEST["term"])){
        // create prepared statement

        $term = $_REQUEST["term"];
        $sql = "SELECT * FROM hd_0001 WHERE visoffice = '$user->ainloc' AND (fullname LIKE '%$term%' OR mykad LIKE '%$term%' OR entryin LIKE '%$term%' OR entryout LIKE '%$term%' OR company LIKE '%$term%' OR refnum LIKE '%$term%') ORDER BY dt_apply DESC";

        $stmt = $db->prepare($sql);
        // $term = $_REQUEST["term"] . '%';
        // bind parameters to statement
        // $stmt->bindParam(":term", $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
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
                echo "<td><a href='manageapplv2.php?view_id=$row[hd_id]'> <button type='button' class='btn btn-labeled btn-primary btn-sm'><span class='btn-label'><i class='fa fa-edit'></i></span></button></a></td></tr></tbody>";
            }
            echo "</table>";
        } else{
            echo "<p>No matches found</p>";
        }
    }  
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
?>