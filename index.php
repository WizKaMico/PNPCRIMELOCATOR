<?php 

include('connection/connection.php');
include('connection/pdo.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.9.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">OnePage</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="#"><img src="logo/PNPLO.png" alt="" class="img-fluid" style="width:20%;"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php?view=<?php echo 'HOME'; ?>">HOME</a></li>
          <li><a class="nav-link scrollto" href="index.php?view=<?php echo 'SERVICES'; ?>">SERVICES</a></li>
          <li><a class="nav-link scrollto" href="index.php?view=<?php echo 'ABOUT'; ?>">ABOUT US</a></li>
          <li><a class="nav-link scrollto o" href="index.php?view=<?php echo 'CONTACT'; ?>">CONTACT</a></li>
         
          <li><a class="getstarted scrollto" href="index.php?view=<?php echo 'LOGIN'; ?>">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <?php if(!empty($_GET['view'])){ ?>
  <?php if($_GET['view'] == 'HOME'){ ?>
  <?php include('includes/home.php'); ?>
  <?php }else if($_GET['view'] == 'SERVICES') { ?>
  <?php include('includes/services.php'); ?>
  <?php }else if($_GET['view'] == 'CRIMEREPORT') { ?>
  <?php include('includes/crime_report.php'); ?>
  <?php }else if($_GET['view'] == 'VICINITY') { ?>
  <?php include('includes/vicinity.php'); ?>
  <?php }else if($_GET['view'] == 'CRIMECLOCK') { ?>
  <?php include('includes/crime_clock.php'); ?>
  <?php }else if($_GET['view'] == 'CRIMEMAPING') { ?>
  <?php include('includes/crime_map.php'); ?>
  <?php }else if($_GET['view'] == 'CRIMESTAT') { ?>
  <?php include('includes/crime_stat.php'); ?>  
  <?php }else if($_GET['view'] == 'ABOUT') { ?>
  <?php include('includes/about.php'); ?>
  <?php }else if($_GET['view'] == 'CONTACT') { ?>
  <?php include('includes/contact.php'); ?>
  <?php }else if($_GET['view'] == 'CONTACT') { ?>
  <?php include('includes/contact.php'); ?>
  <?php }else if($_GET['view'] == 'LOGIN') { ?>
  <?php include('includes/login.php'); ?>
  <?php }else if($_GET['view'] == 'FORGOT') { ?>
  <?php include('includes/forgot.php'); ?>
<?php }else if($_GET['view'] == 'RECOVER') { ?>
  <?php include('includes/recovery.php'); ?>
  <?php } else { ?>

  <?php } ?>  
  <?php } else { ?>
  <?php include('includes/home.php'); ?>
  <?php } ?>  

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ON CRIME LOCATOR</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="#">THESIS GROUP </a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
   <script  src="js/script.js"></script>
    <script  src="js/tab.js"></script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

    //TAB CONTENTS
    function opentabs(evt, dateName) {
            var i, charts, tablinks;
            charts = document.getElementsByClassName("charts");
            for (i = 0; i < charts.length; i++) {
                charts[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(dateName).style.display = "grid";
            evt.currentTarget.className += " active";
        }

        //CHART JS

         //BY AGE
         google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(CrimeAge);
        function CrimeAge() {
            var data = google.visualization.arrayToDataTable([
            ['Year', 'Age'],
            <?php 
                $query = "SELECT SUSPECTS_Age_CLEAN AS AGE, YEAR FROM clean_data GROUP BY YEAR ORDER BY YEAR";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                echo "['".$data['YEAR']."',".$data['AGE']."],";
                }
      ?> 
        ]);

            var options = {
            title: 'CRIME BY AGE',
            curveType: 'function',
            legend: 'none',
                colors: ['#2D3D85', '#D93B67']
            };

            var chart = new google.visualization.LineChart(document.getElementById('age_div'));

            chart.draw(data, options);
        }

        //GENDER
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(CrimeGender);
        function CrimeGender() {
            var data = google.visualization.arrayToDataTable([
            ['Year', 'Gender'],
            <?php 
                $query = "SELECT COUNT(Gender) AS GENDER, YEAR FROM clean_data GROUP BY YEAR ORDER BY YEAR";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                echo "['".$data['YEAR']."',".$data['GENDER']."],";
                }
      ?> 
        ]);

            var options = {
            title: 'CRIME BY GENDER',
            curveType: 'function',
            legend: 'none',
                colors: ['#2D3D85', '#D93B67']
            };

            var chart = new google.visualization.LineChart(document.getElementById('gender_div'));

            chart.draw(data, options);
        }

        //CRIME COMMITTED
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(CrimeCom);
        function CrimeCom() {
            var data = google.visualization.arrayToDataTable([
            ['Year', 'Crimes'],
            <?php 
                $query = "SELECT COUNT(CRIME_COMMITTED) AS CRIMES, YEAR FROM clean_data GROUP BY YEAR ORDER BY YEAR";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                echo "['".$data['YEAR']."',".$data['CRIMES']."],";
                }
      ?> 
        ]);

            var options = {
            title: 'CRIME COMMITTED',
            curveType: 'function',
            legend: 'none',
                colors: ['#2D3D85', '#D93B67']
            };

            var chart = new google.visualization.LineChart(document.getElementById('crime_div'));

            chart.draw(data, options);
        }

        // BY BARANGAY
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(Crimest);
        function Crimest() {
            var data = google.visualization.arrayToDataTable([
                ['Barangay', 'Total'],
            <?php 
                $query = "SELECT COUNT(BARANGAY) AS TOTAL, BARANGAY FROM clean_data GROUP BY BARANGAY";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                    echo "['".$data['BARANGAY']."',".$data['TOTAL']."],";
                }
      ?> 
        ]);

            var options = {
            title: 'CRIME BY BARANGAY',
            curveType: 'function',
            legend: 'none',
                colors: ['#2D3D85', '#D93B67']
            };

            var chart = new google.visualization.LineChart(document.getElementById('status_div'));

            chart.draw(data, options);
        }

        //TOTAL GENDER
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
                legend: 'none',
                colors: ['#2D3D85', '#D93B67']
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
        }

        //CASE STATUS
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(statusChart);

        function statusChart() {

            var data = google.visualization.arrayToDataTable([
            ['CASE STATUS', 'Total'],
            <?php 
                $query = "SELECT COUNT(CRIME_COMMITTED) AS CRIMES, CASE_STATUS FROM clean_data GROUP BY CASE_STATUS";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                    echo "['".$data['CASE_STATUS']."',".$data['CRIMES']."],";
                }
      ?> 
        ]);

                var options = {
                title: 'Case Status',
                pieHole: 0.4,
                legend: 'none',
                colors: ['#D93B67', '#F47F5D', '#FFC26E']
                };

                var chart = new google.visualization.PieChart(document.getElementById('casechart'));

                chart.draw(data, options);
            }
        
        //cRIMES COMMITTED
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(crimeChart);

        function crimeChart() {

            var data = google.visualization.arrayToDataTable([
                ['CRIMES', 'TOTAL',],
                <?php 
                $query = "SELECT COUNT(CASE_STATUS) AS STATS, CRIME_COMMITTED AS CRIMES FROM clean_data GROUP BY CRIMES";

                $result = mysqli_query($con,$query);
                while($data = mysqli_fetch_array($result)){

                echo "['".$data['CRIMES']."',".$data['STATS']."],";
                }
      ?> 
            ]);

                var options = {
                title: 'Crimes',
                pieHole: 0.4,
                legend: 'none',
                colors: ['#FFF1C9', '#EE8166', '#A63D7A', '#523A6B','#618F66']
                };

                var chart = new google.visualization.PieChart(document.getElementById('crimeschart'));

                chart.draw(data, options);
            }
</script>



 

</body>

</html>