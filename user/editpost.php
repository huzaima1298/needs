<?php require_once('header.php'); ?>
<?php require_once('../db_connect.php'); ?> 
  <body id="page-top">
  <?php require_once('nav.php'); ?>
   <?php  
      $id = $_GET['id'];
      $allposts    = "SELECT * FROM `service` WHERE `id` = '$id'";
      $executeQuery = mysqli_query($connection,$allposts);
      if (!empty($executeQuery)):
        while($eachRow = mysqli_fetch_object($executeQuery)):
  ?>
    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
          <h3>Modify Post</h3>
          <form action="updatepost.php" method="post">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Post Title</label>
              <input type="text" class="form-control" name="title" value="<?php echo $eachRow->title; ?>" placeholder="Enter post title here" required>
              <input type="hidden" name="postid" value="<?php echo $eachRow->id; ?>">
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
                        while($city = mysqli_fetch_object($executeQuery)):
                  ?>
                    <option <?php if($eachRow->d_city == $city->city_name){ echo "selected";}?> value="<?php echo $city->city_name; ?>"> <?php echo $city->city_name; ?></option>
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
                        while($another = mysqli_fetch_object($executeQuery)):
                  ?>
                    <option <?php if($eachRow->a_city == $another->city_name){ echo "selected";}?> value="<?php echo $another->city_name; ?>"> <?php echo $another->city_name; ?></option>
                  <?php  endwhile;  endif;  ?>
                  <!-- All City -->
                </select>
                <br><br>
              <input type="submit" name="updatepost" value="Update Post" class="btn btn-success">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Visit</label>
              <input type="text" class="form-control" value="<?php echo $eachRow->visit; ?>" name="visit" placeholder="Enter Visit" required>
            </div>

            <div class="form-group">
              <label for="">Date</label>
              <input type="date" class="form-control" value="<?php echo $eachRow->day; ?>" name="date" placeholder="Select date" required>
            </div>
            <div class="form-group">
              <label for="">Status</label>
              <select name="status" id="" class="form-control">
                <option <?php if($eachRow->status == 0){ echo "selected"; } ?> value="0">Pending</option>
                <option <?php if($eachRow->status == 1){ echo "selected"; } ?> value="1">Completed</option>
              </select>
            </div>
          </div>
          </div>
          </form>
      </section>
    </div>
  <?php  endwhile;  endif;  ?>
<?php require_once('footer.php'); ?>
  