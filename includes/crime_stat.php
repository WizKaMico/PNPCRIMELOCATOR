   <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top:100px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CRIME STATISTICS</h2>
        </div>

      

        <div class="row mt-5">

         

          <div class="col-lg-12 mt-5 mt-lg-0">

              <div class="tabs">
                <nav class="tabs__nav" role="tablist">
                  <button class="tabs__btn is-active" data-tab-target="tab-1" type="button" role="tab" aria-selected="true">CRIME STATISTICS</button>
                  <button class="tabs__btn" data-tab-target="tab-2" type="button" role="tab" aria-selected="false">CRIME RANKS</button>
                  <button class="tabs__btn" data-tab-target="tab-3" type="button" role="tab" aria-selected="false">FORECAST</button>
                </nav>
                <div class="tabs__content">
                  <div class="tabs__pane is-visible" id="tab-1" role="tabpanel">
                    <!-- ======= Services Section ======= -->
                    <section id="services" class="services section-bg">
                      <div class="container" data-aos="fade-up">

                    

                        <div class="row">
                          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                             <div id="piechart" style="height: 400px;"></div>
                              <p>From January 2017 to January 2022, the count of men (5,346) was higher than that of females (366). Most of those who committed crimes were men, accounting for 93.59% of the City of Malolos, Bulacan population.</p>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box iconbox-orange ">  
                             <div id="casechart" style="height: 400px;"></div> 
                              <p>PSI had the greatest crime rate at 3,647, followed by NON-INDEX POI (1,622) and INDEX POI (443). PSI perpetrated 63.85% of Malolos, Bulacan crimes from 2017 to 2022.</p>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box iconbox-pink">
                               <div id="crimeschart" style="height: 400px;"></div>
                              <p>According to data covering 2017 through 2022, "Other Crimes" comprised 92.24% of all crimes in the City of Malolos, Bulacan.</p>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-yellow">
                             <div id="age_div" style="height: 300px;"></div> 
                              <p>In the year 2018, the majority of crimes were perpetrated by individuals in the City of Malolos, Bulacan, 59 years of age and older.</p>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box iconbox-red">
                              <div id="crime_div" style="height: 300px;"></div> 
                              <p>2019 had the most Crime Committed in the City of Malolos, Bulacan, with 1,283, about 22.46%. Over six years, the number of crimes ranged from 11 to 1,283.</p>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box iconbox-teal">
                            <div id="status_div" style="height: 300px;"></div>
                             <p>Bulihan had 856 (14.99%) barangays, followed by Guinhawa and Longos. Malolos' lowest barangay was Masile at 0.61%.</p>
                          </div>

                        </div>

                      </div>
                    </section><!-- End Sevices Section -->

                  </div>
                  <div class="tabs__pane" id="tab-2" role="tabpanel">
                    <iframe src="includes/frames/" style="width:100%; height:500px;"></iframe>
                  </div>
                  <div class="tabs__pane" id="tab-3" role="tabpanel">
                    <center><img src = "logo/forecast/forecast.png" style="width:100%:"></center>
                  </div>
                </div>
              </div>
           
      

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


    


    <style type="text/css">
      
      .wrapper {
  width: min(100% - 2rem, 90ch);
  margin-inline: auto;
  padding-top: 1rem;
  display: flex;
  flex-direction: column;
}

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