   <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top:100px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CRIME CLOCK</h2>
        </div>


         <div class="section-title" style="background-color:#0d2944;">
           <p id="time" style="color:white;">--:--:--</p>
        </div>  
      

      </div>
    </section><!-- End Contact Section -->

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
             
            <div class="chart1"><p style="color:white;">&nbsp&nbspNon-Index Crimes are violations of special laws such as illegal logging or local &nbsp&nbspordinances, acts of &nbsp&nbsplasciviousness, direct assault, estafa, grave theft.</p><canvas id="myChart" style="width:100%;max-width:600px"></canvas></div>
           
          </div>
        </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
               <div class="chart2"><p>&nbsp&nbspNon-Index Crimes are violations of special laws such as illegal logging or local &nbsp&nbspordinances, acts of &nbsp&nbsplasciviousness, direct assault, estafa, grave theft.</p><canvas id="myChart2" style="width:100%;max-width:600px"></canvas></div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
             
             <div class="chart3"><p>&nbsp&nbspIndex Crimes refer to crimes against person and crimes against property such as &nbsp&nbspmurder, homicide &nbsp&nbspphysical injury, rape, robbery, theft, carnapping (MV), carnapping &nbsp&nbsp(MC).</p><canvas id="myChart3" style="width:100%;max-width:600px"></canvas></div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
             
            <div class="chart4"><p>&nbsp&nbspPublic Safety Index (PSI) Crimes  is a classification created under the new policy, to &nbsp&nbspprovide a &nbspseparate and &nbsp&nbspdistinct accounting of Vehicular Incidents cases such as, RIR in &nbsp&nbspHomicide, &nbsp&nbspPhysical &nbspInjury and Damage to &nbsp&nbspProperty.</p><canvas id="myChart4" style=" width:100%;max-width:600px"></canvas></div>
          </div>
        </div>

      </div>
    </section><!-- End Sevices Section -->

    <style type="text/css">
      
      #time {
        font-size: 5rem;
        letter-spacing: 1.5rem;
        font-weight: bold;
      }

      small {
        font-size: 4rem !important; 
        letter-spacing: 0.5rem;
      }

      @media screen and (max-width: 870px){
        #time, small {
          font-size: 5rem !important;
        } 
      }

      @media screen and (max-width: 576px){
        #time, small {
          font-size: 2rem !important;
        } 
      }  

    </style>



 <?php 
// Attempt select query execution
try{
  $sql = "SELECT * FROM capstone.crimehour";   
  $result = $pdo->query($sql);
  if($result->rowCount() > 0) {
      $crimehour = array();
      $non_index = array();
      $indexcrime = array();
      $psi = array();
    while($xrow = $result->fetch()) {
        $crimehour[] = $xrow['crime_hour'];
        $non_index[] = $xrow['non_index'];
        $indexcrime[] = $xrow['indexcrime'];
        $psi[] = $xrow['psi'];
    }

  unset($result);
  } else {
    echo "No records matching your query were found.";
  }
} catch(PDOException $e){
  die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>  


 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// setup block  
    const crimehour = <?php echo json_encode($crimehour); ?>;
    const data = {
    labels: ['12 am','1 am', '2 am','3 am','4 am','5 am','6 am','7 am','8 am','9 am','10 am','11 am','12 pm','1 pm','2 pm','3 pm','4 pm','5 pm','6 pm','7 pm','8 pm','9 pm','10 pm','11 pm'],
        datasets:
        [{
            label: 'Total Crime Rate per Hour (Jan 2017- Jan 2022)',
            data: crimehour,
            backgroundColor: 'rgb(13,41,68)',
            borderWidth: 3
        }]
    };
// config block
    const config = {
        type: 'line',
    data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
    };
// render block
const myChart = new Chart(
    document.getElementById('myChart'),
    config
);



// setup block  
    const non_index = <?php echo json_encode($non_index); ?>;
    const data2 = {
    labels: ['12 am','1 am', '2 am','3 am','4 am','5 am','6 am','7 am','8 am','9 am','10 am','11 am','12 pm','1 pm','2 pm','3 pm','4 pm','5 pm','6 pm','7 pm','8 pm','9 pm','10 pm','11 pm'],
        datasets:
        [{
            label: 'Non-Index Crimes (Jan 2017- Jan 2022)',
            data: non_index,
            backgroundColor: 'rgb(13,41,68)',
            borderWidth: 3
        }]
    };
// config block
    const config2 = {
        type: 'line',
    data: data2,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
    };
// render block
const myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
);

// setup block  
    const indexcrime = <?php echo json_encode($indexcrime); ?>;
    const data3 = {
    labels: ['12 am','1 am', '2 am','3 am','4 am','5 am','6 am','7 am','8 am','9 am','10 am','11 am','12 pm','1 pm','2 pm','3 pm','4 pm','5 pm','6 pm','7 pm','8 pm','9 pm','10 pm','11 pm'],
        datasets:
        [{
            label: 'Index Crimes (Jan 2017- Jan 2022)',
            data: indexcrime,
            backgroundColor: 'rgb(13,41,68)',
            borderWidth: 3
        }]
    };
// config block
    const config3 = {
        type: 'line',
    data: data3,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
    };
// render block
const myChart3 = new Chart(
    document.getElementById('myChart3'),
    config3
);
// setup block  
    const psi = <?php echo json_encode($psi); ?>;
    const data4 = {
    labels: ['12 am','1 am', '2 am','3 am','4 am','5 am','6 am','7 am','8 am','9 am','10 am','11 am','12 pm','1 pm','2 pm','3 pm','4 pm','5 pm','6 pm','7 pm','8 pm','9 pm','10 pm','11 pm'],
        datasets:
        [{
            label: 'Public Safety Index Crimes (Jan 2017- Jan 2022)',
            data:  psi,
            backgroundColor: 'rgb(13,41,68)',
            borderWidth: 3
        }]
    };
// config block
    const config4 = {
        type: 'line',
    data: data4,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
    };
// render block
const myChart4 = new Chart(
    document.getElementById('myChart4'),
    config4
);
</script>       
  

<style>
.chart1
{
 
  height: 400px;
  width: 100%;
  font-family: arial;
   font-size: 12px;
}
.chart2
{
 
  height: 400px;
  width: 100%;
  font-family: arial;
  font-size: 12px;
}
.chart3
{
 
  height: 400px;
  width: 100%;
  font-family: arial;
  font-size: 12px;
}
.chart4
{

  height: 400px;
  width: 100%;
  font-family: arial;
  font-size: 12px;
}


.line
{
   position: relative;
   left: 0;
   top: 200px;
   width: 100%;
   background-color: rgb(13,41,68);
   text-align: center;
   height: 80px;
   border-radius: 4px;
}

</style>