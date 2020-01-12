<?php require_once('db_connect.php'); ?> 

<?php require_once('header.php'); ?> 

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">WE ARE HERE <br>FOR YOU</h1>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <h4>Search Here</h4>
            <form id="SearchServices" action="search.php" method="POST">
              <div class="form-group">
                <label for="Departure City">Departure City</label>
                <select required name="departure" id="" class="form-control">
                  <!-- Getting All Cities -->
                  <option></option>
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
                <label for="Arrival City">Arrival City</label>
                 <!-- Getting All Cities -->
                <select required name="arrival" id="" class="form-control" placeholder="asdfsd">
                  <option></option>
                  <?php 

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
                <label for="Date">Date</label>
                <input required type="date" name="date" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Search</button>
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </header>

   <!--  <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>We
          <i class="fa fa-heart"></i>
          new friends!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section> -->

<?php require_once('footer.php'); ?>