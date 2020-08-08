<?php include('includes/header.php'); ?>


  <div class="container-fluid my-5 font-nunito">
  
    <div class="row mt-5 pt-5">
      <div class="col-sm-12">
        <h2 class="text-center fs-29 fw-600 color-blue py-2 font-red-rose ls-2">Connect with us</h2>
      </div>
    </div>

    <div class="horizontal-line bg-orange mx-auto mb-5"></div>

    <div class="row">
      <div class="col-sm-6 mx-auto py-5">
        
        <p class="font-red-rose">Got any questions? Interested in a free consultation? Want to take a trial class?</p>

        <p class="mb-5 font-red-rose">Let us know by sending a message below!</p>

        <form class="needs-validation" novalidate>

          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Name</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Phone Number</label>
              <input type="number" class="form-control" id="validationCustom02" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom01">Email</label>
              <input type="email" class="form-control" id="validationCustom01" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom01">Message</label>
              <textarea class="form-control" id="validationCustom01" rows="8" required></textarea>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to <a class="text-decoration-none color-black pl-2" href="./Terms and Conditions.php">Terms and Conditions</a>
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <button class="btn btn-success mt-3" type="submit">Submit</button>
        </form>

        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>

      </div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>