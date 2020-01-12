<?php require_once('header.php'); ?>

  <body id="page-top">

  <?php require_once('nav.php'); ?>
<?php require_once('../db_connect.php'); ?> 
  
    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" style="background:#fff;" id="about">
        <table class="table table-hover table-condensed" style="font-size: 14px;">
          <tr>
            <th>Post</th>
            <th>From</th>
            <th>To</th>
            <th>Day</th>
            <th>Visit</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <?php  
            $id = $_SESSION['id'];
            $allposts    = "SELECT * FROM `service` WHERE `user_id` = '$id' ORDER BY id DESC";
            $executeQuery = mysqli_query($connection,$allposts);
            if (!empty($executeQuery)):
              while($eachRow = mysqli_fetch_object($executeQuery)):
          ?>
          <tr>
            <td><?php echo $eachRow->title; ?></td>
            <td><?php echo $eachRow->d_city; ?></td>
            <td><?php echo $eachRow->a_city; ?></td>
            <td><?php echo $eachRow->day; ?></td>
            <td><?php echo $eachRow->visit; ?></td>
            <td>
                <?php 
                  $status = $eachRow->status; 
                  if ($status == 0) {
                      echo "Pending";
                  }
                  else if($status == 1){
                      echo "Completed";
                  }
                ?>
            </td>
            <td>
              <a href="editpost.php?id=<?php echo $eachRow->id; ?>" class="btn btn-success btn-sm">Modify</a>
            </td>
          </tr>
          <?php  endwhile;  endif;  ?> 
        </table>
      </section>

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
