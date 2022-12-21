<?php

// Header 
include('login/assets.php');

/*
20/05/2021

Warning: Undefined array key "view"
error happens when another page (or same page) returns to formreview.php without '?view=' value at the end of the url
please try to fix. 
*/

if($_GET['view'] == ""){
  $toview = "%%";
} else {
$toview = $_GET['view']; 
}

?>

<title>Home</title>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
            </ul>

            <ul class="nav flex-column mb-2">

            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="formreview.php?view=">  
                <span data-feather="file-text"></span>
              <i class="fa fa-home fa-lg"></i> Home </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="?view=Pending">  
                <span data-feather="file-text"></span>
              <i class="fa fa-arrows-h fa-lg"></i> Pending </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="?view=Approved">  
                <span data-feather="file-text"></span>
              <i class="fa fa-check fa-lg"></i> Approved </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="?view=Reject">  
                <span data-feather="file-text"></span>
              <i class="fa fa-times fa-lg"></i> Rejected </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    

<?php

if($_GET['view'] == ""){
  $toview = "%%";
} else {
$toview = $_GET['view']; 
}

    $limit = 100;
    $s = $db->prepare("SELECT * FROM hd_0001 WHERE applstatus LIKE '$toview' AND visoffice = '$user->ainloc'");
    $s->execute();
    $allResp = $s->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // var_dump($allResp);
    $total_results = $s->rowCount();
    $total_pages = ceil($total_results/$limit);
    
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }


    $start = ($page-1)*$limit;
//echo "SELECT * FROM hd_0001 WHERE applstatus LIKE '$toview' AND visoffice = '$user->ainloc' ORDER BY hd_id";
    $stmt = $db->prepare("SELECT * FROM hd_0001 WHERE applstatus LIKE '$toview' AND visoffice = '$user->ainloc' ORDER BY hd_id DESC LIMIT $start, $limit");
    $stmt->execute();

    // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    
    $results = $stmt->fetchAll();
       
    $conn = null;
    
    // var_dump($results);
    
    $no = $page > 1 ? $start+1 : 1;

if($toview == "%%") {
  $toviewn = "All";
} else {
  $toviewn = $toview;
}
?>

  <h2 class="">Health Declaration Form (<?php echo $toviewn; ?>)<span class="badge">Total: <?php echo $total_results; ?></span> | <a href="searchappl.php">Search applications</a></h2>
<?php

echo "Page $page";


?>
  <table class="table table-striped table-responsive center">
    <thead>
      <tr>
        <th>#</th>
        <th>Ref</th>
        <th>Name</th>
        <th>Email</th>
        <th>Application Date</th>
        <th>Manage</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($results as $result){?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo "HD" . date('y') . $result->hd_id; ?></td>
            <td><?php echo $result->fullname; ?></td>
            <td><?php echo $result->appemail; ?></td>
            <td><?php echo $result->dt_apply; ?></td>
            <td align="center">  <a href="manageapplv2.php?view_id=<?php echo $result->hd_id; ?>"> <button type="button" class="btn btn-labeled btn-info btn-sm"><span class="btn-label"><i class="bi bi-pencil-square"></i></span></button></a></td>
          </tr>
        <?php $no++; } ?>
    </tbody>
  </table>
  <table class="table table-responsive center">
    <ul class="pagination">
        <li><a href="?page=1&view=<?php echo $toview; ?>">First</a>&nbsp;&nbsp;</li>
        
        <?php for($p=1; $p<=$total_pages; $p++){?>
            
            <li class="<?php echo $page == $p ? 'active' : ''; ?>"><a href="<?php echo '?page='.$p . '&view=' . $toview ?>"><?php echo $p; ?></a>&nbsp;&nbsp;</li>
        <?php }?>
        <li><a href="?page=<?php echo $total_pages; ?>&view=<?php echo $toview; ?>">Last</a></li>
    </ul> 
        </table>

 <?php



 include('login/footer.php');

 ?>
