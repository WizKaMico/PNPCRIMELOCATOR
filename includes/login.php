 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top:100px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>LOGIN</h2>
        </div>


        <div class="row mt-5">

      

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="action/login.php" method="post" role="form">
              <div class="row gy-2 gx-md-3">
                <center><img src="logo/PNPLO.png" style="width:30%;"></center>
                <div class="form-group col-12">
                  <input type="email" class="form-control" name="email" id="subject" placeholder="Email" required>
                </div>
                 <div class="form-group col-12">
                  <input type="password" class="form-control" name="password" id="subject" placeholder="Password" required>
                </div>
                <div class="text-center col-12"><button type="submit" name="login" class="form-control" >LOGIN</button></div>
                <center><a href="index.php?view=<?php echo 'FORGOT'; ?>" class="form-control">FORGOT PASSWORD</a></center>
              </div>
            </form>

          </div>

           <div class="col-lg-4">
             <img src="logo/login/pnplogin.jpg" style="width:100%;">
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->