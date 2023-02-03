


  <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-pie-36 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Solved Cases</p>
                      <p class="card-title">

                         <?php
                        $sql = "SELECT CASE_STATUS FROM `clean_data` WHERE CASE_STATUS = 'Solved' ORDER BY ID";
                        $result = mysqli_query($con, $sql);

                        $row = mysqli_num_rows($result);

                        echo $row;
                        ?>

                      <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                     <i class="nc-icon nc-chart-pie-36 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Cleared Cases</p>
                      <p class="card-title">
                       <?php
                        $sql = "SELECT CASE_STATUS FROM `clean_data` WHERE CASE_STATUS = 'Cleared' ORDER BY ID";
                        $result = mysqli_query($con, $sql);

                        $cleared = mysqli_num_rows($result);

                       echo $cleared;
                      ?>  
                      <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-chart-pie-36 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Under Investigation</p>
                      <p class="card-title">
                      <?php
                        $sql = "SELECT CASE_STATUS FROM `clean_data` WHERE CASE_STATUS = 'Under Inve' ORDER BY ID";
                        $result = mysqli_query($con, $sql);

                        $under_in = mysqli_num_rows($result);

                       echo $under_in;
                    ?>  
                      <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-chart-pie-36 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Encoded Crimes</p>
                      <p class="card-title">
                       <?php
                        $sql = "SELECT * FROM clean_data ORDER BY ID";
                        $result = mysqli_query($con, $sql);

                        $count = mysqli_num_rows($result);

                        echo $count;
                        ?>
  

                      <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
               
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Crimes by Barangay</h5>
              </div>
              <div class="card-body ">
                    <div id="bar_div" style="width: 100%; height: 500px;"></div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Crimes by Barangay</h5>
              </div>
              <div class="card-body ">
                <iframe src="../../includes/frames/" style="width:100%; height:500px; border:none;"></iframe>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
              </div>
              <div class="card-body ">

                <div class="tabs">
                  <nav class="tabs__nav" role="tablist">
                    <button class="tabs__btn is-active" data-tab-target="tab-1" type="button" role="tab" aria-selected="true">DAY</button>
                    <button class="tabs__btn" data-tab-target="tab-2" type="button" role="tab" aria-selected="false">MONTHS</button>
                    <button class="tabs__btn" data-tab-target="tab-3" type="button" role="tab" aria-selected="false">YEARS</button>
                  </nav>
                  <div class="tabs__content">
                    <div class="tabs__pane is-visible" id="tab-1" role="tabpanel">
                       <div id="day_chart" style="width: 100%; height: 300px;"></div>
                    </div>
                    <div class="tabs__pane" id="tab-2" role="tabpanel">
                      <div id="month_chart" style=" width: 100%; height: 300px;"></div>
                    </div>
                    <div class="tabs__pane" id="tab-3" role="tabpanel">
                         <div id="year_chart" style=" width: 100%; height: 300px;"></div>
                    </div>
                  </div>
                </div>
               
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
              
              </div>
              <div class="card-body ">
                <div id="piechart" style="width: 100%; height: 420px;"></div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
              </div>
              <div class="card-body ">
                  <div id="chart_div" style="width: 100%; height: 300px;"></div> 
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
              </div>
              <div class="card-body ">
               <div id="gender_chart" style="width: 100%; height: 300px;"></div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>



     

<style>

button {
  all: unset;
}

h1 {
  margin-bottom: 2rem;
  font-weight: 700;
  font-size: 3rem;
  color: #000;
  line-height: 1.2;
}
h1 strong {
  display: block;
  font-weight: 500;
  color: #999;
  font-size: 1rem;
}

.tabs {
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.tabs__nav {
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
  background-color: var(--color-accent-x-light);
}
.tabs__btn {
  position: relative;
  padding: 1rem 1.25rem;
  cursor: pointer;
  transition: opacity 0.3s;
}
.tabs__btn:not(.is-active) {
  opacity: 0.6;
}
.tabs__btn:not(.is-active):hover {
  opacity: 1;
}
.tabs__btn.is-active {
  color: var(--color-accent);
  background-color: #fff;
  border-right: 1px solid rgba(0, 0, 0, 0.125);
  border-left: 1px solid rgba(0, 0, 0, 0.125);
}
.tabs__btn.is-active::after {
  content: "";
  position: absolute;
  bottom: -1px;
  left: 0;
  height: 1px;
  width: 100%;
  background-color: #fff;
}
.tabs__btn:first-child.is-active {
  border-left: none;
}
.tabs__pane {
  display: none;
  padding: 2rem 1.25rem;
}
.tabs__pane.is-visible {
  display: block;
}

h3 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

p + p {
  margin-top: 1rem;
}

</style>
