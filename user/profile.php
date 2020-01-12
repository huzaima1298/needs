<?php require_once('header.php'); ?>
<?php require_once('../db_connect.php'); ?> 

  <body id="page-top">

  <?php require_once('nav.php'); 
    $userid = $_SESSION["id"];     
    $Profile    = "SELECT * FROM `users` WHERE `id` = '$userid'";
    $executeQuery = mysqli_query($connection,$Profile);
    if (!empty($executeQuery)):
      while($eachRow = mysqli_fetch_object($executeQuery)):

  ?>
  
    <div class="container-fluid p-0">

     <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
          <h3>Update Profile</h3>
          <form action="updateprofile.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo $eachRow->name; ?>" placeholder="Enter post title here" required>
              <input type="hidden" name="user_id" value="<?php echo $userid; ?>">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" value="<?php echo $eachRow->email; ?>" placeholder="Enter post title here" required>
            </div>
            <div class="form-group">
              <label for="">Phone</label>
              <input type="text" class="form-control" name="phone" value="<?php echo $eachRow->phone; ?>" placeholder="Enter post title here" required>
            </div>
            <div class="form-group">
              <label for="">CNIC</label>
              <input type="text" class="form-control" name="cnic" value="<?php echo $eachRow->cnic; ?>" placeholder="Enter post title here" required>
            </div>
          </div>

          <div class="col-lg-6">
            <?php if (!empty($eachRow->profile)): ?>
              <img src="img/<?php echo $eachRow->profile ?>" width="200" height="200" alt="">
            <?php else: ?>
              <img src="img/profile.jpg" width="200" height="200" alt="">
            <?php endif ?>
            <div class="form-group">
              <label for="">Change Picture</label>
              <input type="file" class="form-control" name="picture">
            </div>
            <input type="submit" name="updateprofile" value="Update Profile" class="btn btn-success">
          </div>
          </div>
          </form>
      </section>
   <?php  endwhile;  endif;  ?>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
