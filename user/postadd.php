<?php require_once('header.php'); ?>
<?php require_once('../db_connect.php'); ?> 
  <body id="page-top">
  <?php require_once('nav.php'); ?>
    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
          <h3>Post An Add</h3>
          <form action="addpost.php" method="post">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Post Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter post title here" required>
              <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
            </div>
            <div class="form-group">
              <label for="">From City</label>
              <select required name="departure" id="" class="form-control">
                  <!-- Getting All Cities -->
                  <option>Select City</option>
                  <?php 
                      $allCities    = "SELECT `id`,`city_name` FROM `cities`";
                      $executeQuery = mysqli_query($connection,$allCities);
                      if (!empty($executeQuery)):
                        while($eachRow = mysqli_fetch_object($executeQuery)):
                  ?>
                    <option value="<?php echo $eachRow->city_name; ?>"> <?php echo $eachRow->city_name; ?></option>
                  <?php  endwhile;  endif;  ?>
                  <!-- All City -->
                </select>
            </div>
            <div class="form-group">
              <label for="">To City</label>
              <select required name="arrival" id="" class="form-control">
                  <!-- Getting All Cities -->
                  <option>Select City</option>
                  <?php 
                      $allCities    = "SELECT `id`,`city_name` FROM `cities`";
                      $executeQuery = mysqli_query($connection,$allCities);
                      if (!empty($executeQuery)):
                        while($eachRow = mysqli_fetch_object($executeQuery)):
                  ?>
                    <option value="<?php echo $eachRow->city_name; ?>"> <?php echo $eachRow->city_name; ?></option>
                  <?php  endwhile;  endif;  ?>
                  <!-- All City -->
                </select>
                <br><br>
              <input type="submit" name="savepost" value="Post Add" class="btn btn-success">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Visit</label>
              <input type="text" class="form-control" name="visit" placeholder="Enter Visit" required>
            </div>
            <div class="form-group">
              <label for="">Date</label>
              <input type="date" class="form-control" name="date" placeholder="Select date" required>
            </div>
          </div>
          </div>
          </form>
      </section>
    </div>
<?php require_once('footer.php'); ?>
  