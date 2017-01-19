<!-- Third Parallax Image with contact Text -->
<section id="contact" class="bgimg-3">
  <div class="container contact_page" id="contact">
      <div class="row text-center">
        <h2 class="subtitle text-center section-heading"> Contact &amp; Location </h2>
        <hr class="short_hr">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <form method="post" action="validation.php">
            <input type="hidden" name="action" value="send">

            <div id="name" class="form-group row">
              <label for="name" class="col-md-12 col-form-label text-left">Full Name <span style="color:red">*</span></label>
              <div class="col-md-12">
                <input class="form-control input-lg" type="name" id="field1" placeholder="Vivin Lukose" name="fname" /><!-- aria-describedby="name-format" required="" aria-required="”true”" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" title="firstname lastname"-->
              </div>
            </div>
            <?php
              if(isset($_SESSION['name_error'])) {
                foreach ($_SESSION['name_error'] as $n_errors) {
                  echo " $n_errors";
                }
              }
            ?>
            <div id="email" class="form-group row">
              <label for="email" class="col-md-12 col-form-label text-left">Email <span style="color:red">*</span></label>
              <div class="col-md-12">
                <input class="form-control input-lg" type="email" id="field2" placeholder="vluka2003@gmail.com" name="email" />
              </div>
            </div>
            <?php
              if(isset($_SESSION['email_error'])) {
                foreach ($_SESSION['email_error'] as $e_errors) {
                  echo " $e_errors";
                }
              }
            ?>

            <div id="ph" class="form-group row">
              <label for="example-search-input" class="col-md-12 col-form-label text-left">Phone</label>
              <div class="col-md-12">
                <input class="form-control input-lg" type="number" id="field3" placeholder="510-366-4941" name="phone" /><!-- pattern="/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/" required=""-->
              </div>
            </div>
            <?php
              if(isset($_SESSION['phone_error'])) {
                foreach ($_SESSION['phone_error'] as $p_errors) {
                  echo " $p_errors";
                }
              }
            ?>

            <div id="txt" class="form-group row">
              <label for="example-search-input" class="col-md-12 col-form-label text-left">Message</label>
              <div class="col-md-12">
                <textarea class="form-control input-lg" type="textarea" name="company" rows="10" cols="30" id="example-search-input" placeholder="Text Message">
                </textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-lg col-md-12" name="submit">Send Message</button>
                </div>
              </div>
          </form>
        </div>
        <div class="col-md-4">
        <div class="col-md-12 embed-container maps">

            <p> 34333 Myrtle Lane. Suite 430 Union City, CA 94587 <br>
            Phone: (510) 366-4941 | Fax: () <br></p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.3073708585518!2d-122.0120257707624!3d37.59675559873701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f955c44fc3e53%3A0x95aa1df224b56355!2s34331+Myrtle+Ln%2C+Union+City%2C+CA+94587!5e0!3m2!1sen!2sus!4v1484640606653" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        </div>
      </div>
  </div>

</section>
