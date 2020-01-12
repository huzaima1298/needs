<!-- Sign Up Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="login.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign Up </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="#">Email</label>
            <input type="email"  name="email" class="form-control" placeholder="Enter your email address">
          </div>
          <div class="form-group">
            <label for="#">Password</label>
            <input type="password"  name="password" class="form-control" placeholder="Enter your password">
          </div>
          <p>Not Registered? <a href="#" data-dismiss="modal"  data-toggle="modal" data-target="#register">Click to Register</a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Signup</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Sign Up Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="register.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="col-md-6 pull-left">
              <div class="form-group">
                <label for="#">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="#">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter Your Email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="#">Phone</label>
                <input type="text" name="phone" placeholder="Enter Your Phone no" class="form-control" required>
              </div>
              <p>Already A Member? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup">Click to Log in</a></p>
            </div>
            <div class="col-md-6 pull-left">
              <div class="form-group">
                <label for="#">CNIC</label>
                <input type="text" name="cnic" placeholder="Enter Your CNIC" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="#">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Your Password" class="form-control" required>
              </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="register">Register</button>
      </div>
    </form>
  </div>
</div>
</div>
<!-- End Sign Up Modal -->

<!-- Footer Section -->

<footer>
  <div class="container">
    <p>&copy; Needs 2018. All Rights Reserved.</p>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="#">Privacy</a>
      </li>
      <li class="list-inline-item">
        <a href="#">Terms</a>
      </li>
      <li class="list-inline-item">
        <a href="#">FAQ</a>
      </li>
    </ul>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/jquery.barrating.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/new-age.min.js"></script>
<script src="js/alertify.js"></script>

<!-- Getting All Actions  -->
<script>
<?php 
$getMessage = isset($_GET['action']); 
if (!empty($getMessage) == 'registered') { ?>
  alertify.success('Your Registration is done Successfully Now You Can Login.');
  // to replace the url parameters from the url
  window.history.replaceState({}, document.title, "/" + "need/index.php");
<?php } elseif(!empty($getMessage) == 'loged') {?>
  alertify.success('Logged Successfully!');
  // to replace the url parameters from the url
  window.history.replaceState({}, document.title, "/" + "need/index.php");
<?php } elseif(!empty($getMessage) == 'logout') {?>
  alertify.success('Logout Successfully!');
  // to replace the url parameters from the url
  window.history.replaceState({}, document.title, "/" + "need/index.php");
<?php }?>

  // Email Validation
  // Adding Email Recoginition Pattern
  function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
  }
  // Validating the email
  $('#email').blur(function()
   {
    email = $(this).val();
    if( !isValidEmailAddress( email ) ) {
      $(this).focus();
      $(this).css('border', '1px solid red'); 
    }
    else
    {
      $(this).css('border', 'thin solid #ccc');
    }
  });

  </script>
</body>

</html>
