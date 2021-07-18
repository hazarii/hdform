<?php

// Header 
include('login/assets.php');


?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<title>Health Declaration Overview</title>

<?php

        //
        // daily 
        //

      /* total application */

      $dailytotalhq = $db->query("SELECT hd_id FROM hd_0001 WHERE visoffice = 'HQ' AND dt_apply LIKE '$currentdate%'");
      $dailytotalhqcount = $dailytotalhq->rowCount();

      $dailytotalnth = $db->query("SELECT hd_id FROM hd_0001 WHERE visoffice = 'Northern' AND dt_apply LIKE '$currentdate%'");
      $dailytotalnthcount = $dailytotalnth->rowCount();

      /* total entry */

      $dailytotalhqin = $db->query("SELECT hd_id FROM hd_0001 WHERE visoffice = 'HQ' AND entryin LIKE '$currentdate%'");
      $dailytotalhqincount = $dailytotalhqin->rowCount();

      $dailytotalnthin = $db->query("SELECT hd_id FROM hd_0001 WHERE visoffice = 'Northern' AND entryin LIKE '$currentdate%'");
      $dailytotalnthincount = $dailytotalnthin->rowCount();


      /* to display types of companies that entry today in HQ (toct)
      
      */

      try {
        
        $resulttoct = $db->query("SELECT company, COUNT(company) FROM hd_0001 WHERE entryin LIKE '$currentdate%' AND visoffice = 'HQ' GROUP BY company DESC");
        $resulttocttotal = $db->query("SELECT company FROM hd_0001 WHERE entryin LIKE '$currentdate%' AND visoffice = 'HQ'");
        $counttoct = $resulttocttotal->rowCount();

        $rows = array();
        $table = array();
        $table['cols'] = array(
  
          array('label' => 'Company', 'type' => 'string'),
          array('label' => 'Count', 'type' => 'number')
  
      );
          /* Extract the information from $result */
          foreach($resulttoct as $r) {
  
            $temp = array();
  
            // the following line will be used to slice the Pie chart
  
            $temp[] = array('v' => (string) $r['company']); 
  
            // Values of each slice
  
            $temp[] = array('v' => (int) $r['COUNT(company)']); 
            $rows[] = array('c' => $temp);
          }
  
      $table['rows'] = $rows;
  
      // convert data into JSON format
      $jsonTabletoct = json_encode($table);
      //echo $jsonTable;
      } catch(PDOException $e) {
          echo 'ERROR: ' . $e->getMessage();
      }



        /* to display types of companies that entry today in Kulim (toctkulim)
              
        */

      try {
        
        $resulttoctkulim = $db->query("SELECT company, COUNT(company) FROM hd_0001 WHERE entryin LIKE '$currentdate%' AND visoffice = 'Northern' GROUP BY company DESC");
        $resulttoctkulimtotal = $db->query("SELECT company FROM hd_0001 WHERE entryin LIKE '$currentdate%' AND visoffice = 'Northern'");
        $counttoctkulim = $resulttoctkulimtotal->rowCount();

        $rows = array();
        $table = array();
        $table['cols'] = array(
  
          array('label' => 'Company', 'type' => 'string'),
          array('label' => 'Count', 'type' => 'number')
  
      );
          /* Extract the information from $result */
          foreach($resulttoctkulim as $r) {
  
            $temp = array();
  
            // the following line will be used to slice the Pie chart
  
            $temp[] = array('v' => (string) $r['company']); 
  
            // Values of each slice
  
            $temp[] = array('v' => (int) $r['COUNT(company)']); 
            $rows[] = array('c' => $temp);
          }
  
      $table['rows'] = $rows;
  
      // convert data into JSON format
      $jsonTabletoctkulim = json_encode($table);
      //echo $jsonTable;
      } catch(PDOException $e) {
          echo 'ERROR: ' . $e->getMessage();
      }



        //
        // monthly 
        //

      /* total application */

      try {

      // pending
      $result = $db->query("SELECT company, COUNT(company) FROM `hd_0001` WHERE MONTH(dt_apply) = $currentmonth AND applstatus = 'Pending' GROUP BY `company` DESC");
      $resulttotal = $db->query("SELECT company FROM `hd_0001` WHERE MONTH(dt_apply) = $currentmonth AND applstatus = 'Pending'");
      $pendingcount = $resulttotal->rowCount();

    // pending (1)

      $rows = array();
      $table = array();
      $table['cols'] = array(

        array('label' => 'Company', 'type' => 'string'),
        array('label' => 'Count', 'type' => 'number')

    );
        /* Extract the information from $result */
        foreach($result as $r) {

          $temp = array();

          // the following line will be used to slice the Pie chart

          $temp[] = array('v' => (string) $r['company']); 

          // Values of each slice

          $temp[] = array('v' => (int) $r['COUNT(company)']); 
          $rows[] = array('c' => $temp);
        }

    $table['rows'] = $rows;

    // convert data into JSON format
    $jsonTable = json_encode($table);
    //echo $jsonTable;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }


    try {

    /* total approved application */

      $result2 = $db->query("SELECT company, COUNT(company) FROM `hd_0001` WHERE MONTH(dt_apply)  = $currentmonth AND applstatus = 'Approved' GROUP BY `company` DESC");
      $resulttotal2 = $db->query("SELECT company FROM `hd_0001` WHERE MONTH(dt_apply) = $currentmonth AND applstatus = 'Approved' GROUP BY `company` DESC");      
      $approvedcount = $resulttotal2->rowCount();

      $rows = array();
      $table = array();
      $table['cols'] = array(

        array('label' => 'Company', 'type' => 'string'),
        array('label' => 'Count', 'type' => 'number')

    );
        /* Extract the information from $result2 */
        foreach($result2 as $r) {

          $temp = array();

          // the following line will be used to slice the Pie chart

          $temp[] = array('v' => (string) $r['company']); 

          // Values of each slice

          $temp[] = array('v' => (int) $r['COUNT(company)']); 
          $rows[] = array('c' => $temp);
        }

    $table['rows'] = $rows;

    // convert data into JSON format
    $jsonTable2 = json_encode($table);
    //echo $jsonTable;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    try {

    /* total application by branch */

      $result3 = $db->query("SELECT visoffice, COUNT(visoffice) FROM `hd_0001` WHERE MONTH(dt_apply)  = $currentmonth AND applstatus = 'Pending' GROUP BY `visoffice` DESC");

      $rows = array();
      $table = array();
      $table['cols'] = array(

        array('label' => 'Visiting Office', 'type' => 'string'),
        array('label' => 'Count', 'type' => 'number')

    );
        /* Extract the information from $result2 */
        foreach($result3 as $r) {

          $temp = array();

          // the following line will be used to slice the Pie chart

          $temp[] = array('v' => (string) $r['visoffice']); 

          // Values of each slice

          $temp[] = array('v' => (int) $r['COUNT(visoffice)']); 
          $rows[] = array('c' => $temp);
        }

    $table['rows'] = $rows;

    // convert data into JSON format
    $jsonTable3 = json_encode($table);
    //echo $jsonTable;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }


    try {

    /* total approved application by branch */

      $result4 = $db->query("SELECT visoffice, COUNT(visoffice) FROM `hd_0001` WHERE MONTH(dt_apply)  = $currentmonth AND applstatus = 'Approved' GROUP BY `visoffice` DESC");

      $rows = array();
      $table = array();
      $table['cols'] = array(

        array('label' => 'Visiting Office', 'type' => 'string'),
        array('label' => 'Count', 'type' => 'number')

    );
        /* Extract the information from $result2 */
        foreach($result4 as $r) {

          $temp = array();

          // the following line will be used to slice the Pie chart

          $temp[] = array('v' => (string) $r['visoffice']); 

          // Values of each slice

          $temp[] = array('v' => (int) $r['COUNT(visoffice)']); 
          $rows[] = array('c' => $temp);
        }

    $table['rows'] = $rows;

    // convert data into JSON format
    $jsonTable4 = json_encode($table);
    //echo $jsonTable;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    ?>


    <html>
      <head>
        <!--Load the Ajax API-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">

        // Load the Visualization API and the piechart package.
        google.load('visualization', '1', {'packages':['corechart']});



        //
        // daily 
        //

        // total application daily

        google.setOnLoadCallback(drawChartDaily);

        function drawChartDaily() {
        dataTable = google.visualization.arrayToDataTable([
          ['Location', 'Application', 'Entry'],
          ['HQ', <?php echo $dailytotalhqcount; ?>, <?php echo $dailytotalhqincount; ?>],
          ['Kulim', <?php echo $dailytotalnthcount; ?>, <?php echo $dailytotalnthincount; ?>]
        ]);

        options = {
          title: 'Today\'s Application and Approved Application',
          hAxis: {title: '', titleTextStyle: {color: 'red'}}
        };

        chart = new google.visualization.ColumnChart(document.getElementById('chart_div_daily'));
        chart.draw(dataTable, options);
      }

      /* to display types of companies that applied today in HQ (toct)
      
      */

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawCharttoct);

        function drawCharttoct() {

          // Create our data table out of JSON data loaded from server.
          var data = new google.visualization.DataTable(<?=$jsonTabletoct?>);
          var options = {
               title: 'Companies that Entry Today in HQ - <?php echo $counttoct; ?>',
              is3D: 'true',
              width: '100%',
              height: '100%'
            };
          // Instantiate and draw our chart, passing in some options.
          // Do not forget to check your div ID
          var chart = new google.visualization.PieChart(document.getElementById('chart_div_toct'));
          chart.draw(data, options);
        }

      /* to display types of companies that applied today in Kulim (toctkulim)
      
      */

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawCharttoctkulim);

        function drawCharttoctkulim() {

          // Create our data table out of JSON data loaded from server.
          var data = new google.visualization.DataTable(<?=$jsonTabletoctkulim?>);
          var options = {
               title: 'Companies that Entry Today in Kulim - <?php echo $counttoctkulim; ?>',
              is3D: 'true',
              width: '100%',
              height: '100%'
            };
          // Instantiate and draw our chart, passing in some options.
          // Do not forget to check your div ID
          var chart = new google.visualization.PieChart(document.getElementById('chart_div_toctkulim'));
          chart.draw(data, options);
        }


      

        //
        // monthly 
        //

        // total application 

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawChart);

        function drawChart() {

          // Create our data table out of JSON data loaded from server.
          var data = new google.visualization.DataTable(<?=$jsonTable?>);
          var options = {
               title: 'Total Application - <?php echo $pendingcount; ?>',
              is3D: 'true',
              width: '100%',
              height: '100%'
            };
          // Instantiate and draw our chart, passing in some options.
          // Do not forget to check your div ID
          var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
          chart.draw(data, options);
        }

        // total approved application 

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawChart2);

        function drawChart2() {

          // Create our data table out of JSON data loaded from server.
          var data = new google.visualization.DataTable(<?=$jsonTable2?>);
          var options = {
               title: 'Total Approved Application - <?php echo $approvedcount; ?>',
              is3D: 'true',
              width: '100%',
              height: '100%'
            };
          // Instantiate and draw our chart, passing in some options.
          // Do not forget to check your div ID
          var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
          chart.draw(data, options);
        }

        // total application by branch

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawChart3);

        function drawChart3() {

          // Create our data table out of JSON data loaded from server.
          var data = new google.visualization.DataTable(<?=$jsonTable3?>);
          var options = {
               title: 'Total Application by Branch - <?php echo $pendingcount; ?>',
              is3D: 'true',
              width: '100%',
              height: '100%'
            };
            
          // Instantiate and draw our chart, passing in some options.
          // Do not forget to check your div ID
          var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
          chart.draw(data, options);
        }

        // total approved application by branch

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawChart4);

        function drawChart4() {

          // Create our data table out of JSON data loaded from server.
          var data = new google.visualization.DataTable(<?=$jsonTable4?>);
          var options = {
               title: 'Total Approved Application by Branch - <?php echo $approvedcount; ?>',
              is3D: 'true',
              width: '100%',
              height: '100%'
            };
          // Instantiate and draw our chart, passing in some options.
          // Do not forget to check your div ID
          var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
          chart.draw(data, options);
        }       
        </script>
      </head>

      <body>
        <!--this is the div that will hold the chart-->

        <br>
        <h2 style="text-align:center">Today - <?php echo $currentdate; ?></h2>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      <div id="chart_div_daily"></div>
      <hr>
      </div>
      <div class="col-sm-3">
      <div id="chart_div_toct"></div>
      <hr>
      </div>
      <div class="col-sm-3">
      <div id="chart_div_toctkulim"></div>
      <hr>
      </div>
    </div>
  </div>

  <br>
        <h2 style="text-align:center"><?php echo date('M (m)'); ?> Overview</h2>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div id="chart_div"></div>
        <hr>
        <div id="chart_div3"></div>
      </div>
      <div class="col-sm-6">
        <div id="chart_div2"></div>
        <hr>
        <div id="chart_div4"></div>
      </div>
    </div>
  </div>

  </div>


      
<?php

 include('login/footer.php');

 ?>

