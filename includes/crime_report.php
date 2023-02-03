   <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top:100px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>SUMBONG MO, AKSYON KO!</h2>
          <p>Ang inyong sumbong ay mahalaga sa amin at ang lahat ng impormasyong inyong ibibigay ay aming pangangalagaan at mananatiling kompidensyal.</p>
        </div>

      

        <div class="row mt-5">

         

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="action/report.php" method="post" role="form" enctype="multipart/form-data">
              <div class="row gy-2 gx-md-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="Fullname" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="Alias" id="email" placeholder="Alias" required>
                </div>
                 <div class="col-md-6 form-group">
                  <input type="email" name="EmailAddress" class="form-control" id="name" placeholder="Email" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="MobileNumber" id="email" placeholder="Mobile Number" required>
                </div>
                 
                 <div class="col-md-6 form-group">
                  <select class="form-control" name="Location">
                      <option value="" disabled selected hidden>Location</option>
                      <option value="1">Anilao</option>
                      <option value="2">Atnag</option>
                      <option value="3">Babatnin</option>
                      <option value="4">Bagna</option>
                      <option value="5">Bagong Bayan</option>
                      <option value="6">Balayong</option>
                      <option value="7">Balite</option>
                      <option value="8">Bangkal</option>
                      <option value="9">Barihan</option>
                      <option value="10">Bulihan</option>
                      <option value="11">Bungahan</option>
                      <option value="12">Caingin</option>
                      <option value="13">Calero</option>
                      <option value="14">Caliligawan</option>
                      <option value="15">Canalate</option>
                      <option value="16">Caniogan</option>
                      <option value="17">Catmon</option>
                      <option value="18">Cofradia</option>
                      <option value="19">Dakila</option>
                      <option value="20">Guinhawa</option>
                      <option value="21">Ligas</option>
                      <option value="22">Liang</option>
                      <option value="23">Longos</option>
                      <option value="24">Look 1st</option>
                      <option value="25">Look 2nd</option>
                      <option value="26">Lugam</option>
                      <option value="27">Mabolo</option>
                      <option value="28">Mambog</option>
                      <option value="29">Masile</option>
                      <option value="30">Matimbo</option>
                      <option value="31">Mojon</option>
                      <option value="32">Namayan</option>
                      <option value="33">Niugan</option>
                      <option value="34">Pamarawan</option>
                      <option value="35">Panasahan</option>
                      <option value="36">Pinagbakahan</option>
                      <option value="37">San Agustin</option>
                      <option value="38">San Gabriel</option>
                      <option value="39">San Juan</option>
                      <option value="40">San Pablo</option>
                      <option value="41">San Vicente (Poblacion)</option>
                      <option value="42">Santiago</option>
                      <option value="43">Santisima Trinidad</option>
                      <option value="44">Santo Cristo</option>
                      <option value="45">Santo Niño (Poblacion)</option>
                      <option value="46">Santo Rosario (Poblacion)</option>
                      <option value="47">Santor</option>
                      <option value="48">Sumapang Bata</option>
                      <option value="49">Sumapang Matanda</option>
                      <option value="50">Taal</option>
                      <option value="51">Tikay</option>
                  </select>
                </div>
                 <div class="col-md-6 form-group">
                   <select class="form-control" name="AuthorityNearby">
                      <option value="" disabled selected hidden>Is there already Authority Nearby?</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option> 
                   </select>
                </div>
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" name="photo" id="email" required>
                </div>

                <div class="form-group col-12">
                  <textarea class="form-control" name="Message" rows="5" placeholder="Enter Your Message" required></textarea>
                </div>
                <div class="text-center col-12"><button type="submit" name="save">Submit</button></div>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->