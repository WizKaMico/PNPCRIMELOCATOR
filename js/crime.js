
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
