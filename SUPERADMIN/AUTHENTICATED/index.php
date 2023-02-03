
<?php 

include('../../connection/connection.php');
include('../../connection/session.php'); 
 
$result=mysqli_query($con, "SELECT * FROM users LEFT JOIN userdetails ON users.UserID = userdetails.UserID where users.UserID='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    PNP CRIME LOCATOR | ADMIN | HOME
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
      
        <a href="#" class="simple-text logo-normal">
    
          <div class="logo-image-big">
            <img src="../../logo/PNPLO.png">
          </div>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="index.php?view=<?php echo 'DASHBOARD'; ?>">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
         

              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?view=<?php echo 'REPORT'; ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-single-copy-04"></i>
                  <p>
                    Incident
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.php?view=<?php ECHO 'CLEANDATA'; ?>">VIEW CLEAN DATA</a>
                  <a class="dropdown-item" href="index.php?view=<?php ECHO 'INCIDENT'; ?>">VIEW INCIDENT REPORT</a>
                  <a class="dropdown-item" href="index.php?view=<?php ECHO 'COMPLAINT'; ?>">VIEW COMPLAINT</a>
                </div>
          </li>


          <li>
            <a href="index.php?view=<?php echo 'CRIME'; ?>">
              <i class="nc-icon nc-pin-3"></i>
              <p>Crime Mapping</p>
            </a>
          </li>
          <li>
            <a href="index.php?view=<?php echo 'USERS'; ?>">
              <i class="nc-icon nc-pin-3"></i>
              <p>Users</p>
            </a>
          </li>
          <li>
            <a href="index.php?view=<?php echo 'CALENDAR'; ?>">
              <i class="nc-icon nc-pin-3"></i>
              <p>Calendar</p>
            </a>
          </li>
          <li>
            <a href="index.php?view=<?php echo 'SETTINGS'; ?>">
              <i class="nc-icon nc-settings-gear-65"></i>
              <p>Settings</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <?php 
            date_default_timezone_set('Asia/Manila');
            $newDateTime = date('h:i A', strtotime(date('Y-m-d h:i:s')));
            ?>
            <a class="navbar-brand" href="javascript:;">WELCOME! <?php echo strtoupper($row['Name']); ?>
             <br>
             <p><?php echo date('F d Y', strtotime(date('Y-m-d'))); ?></p>,  <p><?php echo $newDateTime; ?></p>
            </a>
           
            <br>
        
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Notification</a>
                  <a class="dropdown-item" href="../logout.php">Logout</a>
                </div>
              </li>
        
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        
      <?php if(!empty($_GET['view'])){ ?>
      <?php if($_GET['view'] == 'DASHBOARD'){ ?>
      <?php include('includes/dashboard.php');  ?>
      <?php } else if($_GET['view'] == 'CLEANDATA'){ ?>
      <?php include('includes/clean.php');  ?>  
      <?php } else if($_GET['view'] == 'INCIDENT'){ ?>
      <?php include('includes/incident_record.php');  ?>
      <?php } else if($_GET['view'] == 'COMPLAINT'){ ?>
      <?php include('includes/incident_complaint.php');  ?>  
      <?php } else if($_GET['view'] == 'USERS'){ ?>
      <?php include('includes/view_users.php');  ?>
      <?php } else if($_GET['view'] == 'CALENDAR'){ ?>
      <?php include('includes/calendar.php');  ?>
      <?php } else if($_GET['view'] == 'CRIME'){ ?>  
       <?php include('includes/crime.php');  ?>
      <?php } else if($_GET['view'] == 'SETTINGS'){ ?>
         <?php include('includes/users.php');  ?>
      <?php } else { ?>
      
      <?php } ?>  
      <?php } else { ?>
      <?php include('includes/dashboard.php');  ?>
      <?php  } ?>  

      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by thesis group
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script  src="./script.js"></script>
         <script type="text/javascript">
  
        
        //CHARTS JS
        //CRIME BY BARANGAY
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(barangayChart);

        function barangayChart() {
            var data = google.visualization.arrayToDataTable([
                ['Barangay', 'Total'],
            <?php 
                $query = "SELECT COUNT(CRIME_COMMITTED) AS CRIMES, BARANGAY FROM clean_data GROUP BY BARANGAY";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                    echo "['".$data['BARANGAY']."',".$data['CRIMES']."],";
                }
      ?> 
        ]);

            var options = {
                legend: 'none',
                title: 'Crimes by Barangay',
                hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
                vAxis: {minValue: 0},
                colors: ['#523A6B']
            };

            var chart = new google.visualization.AreaChart(document.getElementById('bar_div'));
            chart.draw(data, options);
        }

        //DAILY, MONTHLY, YEARLY CHARTS
        //YEARLY

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(CrimeYear);
        function CrimeYear() {
            var data = google.visualization.arrayToDataTable([
            ['Year', 'Total'],
            <?php 
                $query = "SELECT COUNT(CRIME_COMMITTED) AS CRIMES, YEAR FROM clean_data GROUP BY YEAR ORDER BY YEAR";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                echo "['".$data['YEAR']."',".$data['CRIMES']."],";
                }
      ?> 
        ]);

            var options = {
            title: '',
            curveType: 'function',
            legend: 'none',
            'width':520,
            'height':280,
                colors: ['#EE8166']
            };

            var chart = new google.visualization.LineChart(document.getElementById('year_chart'));

            chart.draw(data, options);
        }
        //MONTHLY

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(CrimeMonth);
        function CrimeMonth() {
            var data = google.visualization.arrayToDataTable([
            ['Month', 'Total'],
            <?php 
                $query = "SELECT COUNT(CRIME_COMMITTED) AS CRIMES, MONTH FROM clean_data GROUP BY MONTH ORDER BY MONTH";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                echo "['".$data['MONTH']."',".$data['CRIMES']."],";
                }
      ?> 
        ]);

            var options = {
            title: '',
            curveType: 'function',
            legend: 'none',
            'width':520,
            'height':280,
                colors: ['#EE8166']
            };

            var chart = new google.visualization.LineChart(document.getElementById('month_chart'));

            chart.draw(data, options);
        }
        //DAILY

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(CrimeDaily);
        function CrimeDaily() {
            var data = google.visualization.arrayToDataTable([
            ['Day', 'Total'],
            <?php 
                $query = "SELECT COUNT(CRIME_COMMITTED) AS CRIMES, DAY FROM clean_data GROUP BY DAY ORDER BY DAY";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                echo "['".$data['DAY']."',".$data['CRIMES']."],";
                }
      ?> 
        ]);

            var options = {
            title: '',
            curveType: 'function',
            legend: 'none',
            'width':520,
            'height':280,
                colors: ['#EE8166']
            };

            var chart = new google.visualization.LineChart(document.getElementById('day_chart'));

            chart.draw(data, options);
        }
        //CRIME TYPE

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(pieChart);

        function pieChart() {

            var data = google.visualization.arrayToDataTable([
            ['Crime Type', 'Total'],
            <?php 
                $query = "SELECT COUNT(CRIME_COMMITTED) AS CRIMES, CRIME_TYPE FROM clean_data GROUP BY CRIME_TYPE";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                    echo "['".$data['CRIME_TYPE']."',".$data['CRIMES']."],";
                }
      ?> 
        ]);

                var options = {
                title: 'Crime Type',
                pieHole: 0.4,
                colors: ['#FFF1C9', '#EE8166', '#A63D7A', '#523A6B','#618F66']
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        
        //CRIME BY AGE

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Age'],
          <?php 
                $query = "SELECT SUSPECTS_Age_CLEAN AS AGE, CRIME_COMMITTED AS CRIMES FROM clean_data GROUP BY CRIMES, YEAR  ORDER BY YEAR";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                    echo "['".$data['CRIMES']."',".$data['AGE']."],";
                }
      ?> 
        ]);

        var options = {
          title: 'Crime by Age',
          hAxis: {title: 'Crimes', minValue: 0, maxValue: 15},
          vAxis: {title: 'Age', minValue: 0, maxValue: 15},
          legend: 'none',
                colors: ['#A63D7A']
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }

      //GENDER

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(genderChart);

        function genderChart() {

            var data = google.visualization.arrayToDataTable([
            ['Gender', 'Total'],
            <?php 
                $query = "SELECT COUNT(CRIME_COMMITTED) AS CRIMES, Gender FROM clean_data GROUP BY Gender";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                    echo "['".$data['Gender']."',".$data['CRIMES']."],";
                }
      ?> 
        ]);

                var options = {
                title: 'Crimes by Gender',
                pieHole: 0.4,
                colors: ['#523A6B','#618F66']
                };

                var chart = new google.visualization.PieChart(document.getElementById('gender_chart'));

                chart.draw(data, options);
            }
    </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>


</body>

</html>
