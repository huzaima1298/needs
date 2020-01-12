  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <?php if (!empty($_SESSION['profile'])): ?>
          <img class="img-fluid img-profile mx-auto mb-2" src="img/<?php echo $_SESSION['profile']; ?>" alt="">
          <?php else: ?>
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
          <?php endif ?>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../index.php">Go Back To Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="postadd.php">Post An Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="profile.php">Profile</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="password.php">Reset Password</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>