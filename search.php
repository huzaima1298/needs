<?php session_start(); 
error_reporting(0);
?>
<?php require_once('db_connect.php'); ?> 
<?php require_once('header.php'); ?> 
  <header class="masthead">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 my-auto" style="background:#fff; margin-top: 8em !important;">
          <h1 style="color:#000;margin-top: 1em;padding: 0;">Searched Post</h1>
          <?php  
            $departure = $_POST['departure'];
            $arrival   = $_POST['arrival'];
            $date      = $_POST['date'];
            $query     = "SELECT * FROM `service` WHERE `d_city` = '$departure' AND `a_city` = '$arrival' AND `day` like '%$date%'";
            $executeQuery = mysqli_query($connection,$query);
            if (!empty($executeQuery)) {
            while ($row = mysqli_fetch_object($executeQuery)) {
             
          ?>
           <div class="card" style="width: 18rem;margin-bottom: 1em; color:#000;">
            <div class="card-body">
              <h5 class="card-title"><?php  echo $row->title; ?></h5>
              <p class="card-text" style="font-size: 14px !important;">
                <b>Visit: </b> <?php echo $row->visit; ?> <br>
                <b>From City: </b> <?php echo $row->d_city; ?><br>
                <b>To City: </b> <?php echo $row->a_city; ?><br>
                <b>Day Of Visit: </b> <?php echo date("d F Y",strtotime($row->day)); ?> <br>
                Total Rating: 
                <!-- All Rating Of The Posts -->
                <?php 
                    $query = "SELECT `rating` FROM `rating` WHERE `service_user` = '$row->user_id'";
                    $getallREviews = mysqli_query($connection,$query);
                    $AllRatings = [];
                    while ($getall = mysqli_fetch_object($getallREviews)) {
                        $AllRatings[] = $getall->rating;
                    }
                    echo $totalReviews = count($AllRatings);
                    $sumOfReviews = 0;
                    $averageOfReviews = 0;
                    if (!empty($totalReviews)) {
                      $sumOfReviews = array_sum($AllRatings);
                      $averageOfReviews = round($sumOfReviews / $totalReviews);
                    }
                    echo "<br>";
                    if (!empty($averageOfReviews)) {
                        for ($i=0; $i < $averageOfReviews; $i++) { 
                          echo "<i style='color:orange' class='fa fa-star'></i>";
                        }
                      for ($i=0; $i <(5-$averageOfReviews) ; $i++) { 
                        echo "<i style='color:gray' class='fa fa-star'></i>";
                        
                      }
                    }
                     
                ?>
                <!-- Finding If User Has Rated Already Or Not -->
                <?php 
                  $currentSessionid = $_SESSION['id'];
                  $serviceUserid    = $row->user_id;
                  $seachRate = "SELECT `rating` FROM `rating` WHERE `service_user` = '$serviceUserid' AND `user_id` ='$currentSessionid'";
                  $resultofratingsearch = mysqli_query($connection,$seachRate);
                  $check = mysqli_num_rows($resultofratingsearch);
                  if ($check <= 0) { ?>
                     <br>Rate it: 
                     <select onchange="RateIT($(this).val(),<?php echo $serviceUserid ?>,<?php echo $currentSessionid ?>)" id="" class="">
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                     </select> 
                  <?php } ?>
                </p>
                <!-- User Details -->
                <b>
                  <?php if (!empty($_SESSION['logged']) != false): ?>
                    <div id="show<?php echo $row->id; ?>" style="display: none;">
                      <?php  
                        $userid = $row->user_id;
                        $query     = "SELECT `name`,`email`,`phone` FROM `users` WHERE `id` = '$userid'";
                        $executeQuery = mysqli_query($connection,$query);
                        while ($user = mysqli_fetch_object($executeQuery)) {
                      ?>
                      <b>Name: </b> <?php echo $user->name; ?><br>
                      <b>Email: </b> <?php echo $user->email; ?><br>
                      <b>Phone: </b> <?php echo $user->phone; ?>
                      <?php } ?>
                    </div>
                    <a href="#" class="btn btn-default btn-sm" onclick="show('show<?php echo $row->id; ?>')" data-toggle="modal" data-target="#exampleModal">Show Contact</a>
                    
                  <?php else: ?>
                    <a href="#" class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#register">Show details</a>
                  <?php endif ?>
              </p>
            </div>
          </div>
          <?php }} ?>
        </div>
      </div>
    </div>
  </header>
<?php require_once('footer.php'); ?>
<script>
  function show(id)
  {
    $('#'+id).toggle();
  }
</script>