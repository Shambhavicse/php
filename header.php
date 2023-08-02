<div class="fixed-top">
  <div class="row" style="background:#2ac1d6;">
    <div class="col-sm-12" id="header1">Welcome Back, <?php echo $_SESSION['name'] ?></div>
    </div>
    <div class="row" style="padding:5px; background:#e6e9ec;min-height:70px;box-shadow: 2px 2px 1px grey;">
    <div class="col-sm-2"><img src="images/logo.jfif" style="margin-left:15px; border-radius:50%; " width="40%" height="60px"/></div>
    <div class="col-sm-8">
    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php"><i class="fa fa-th-large" style="color:lightblue;"></i> Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="alldocuments.php"><i class="fa fa-arrow-circle-down" style="color:lightblue;"></i> All Documents</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-hotel" style="color:lightblue;"></i> Hostel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="allotmentdetails.php"><span class="fa fa-drivers-license-o" style="color:lightblue;"> Allotment Details</spAN></a>
          <a class="dropdown-item" href="hostelapply.php"><span class="fa fa-edit" style="color:lightblue;"> Apply hostel</span></a>
          <a class="dropdown-item" href="applyhostelleave.php"><span class="fa fa-exchange" style="color:lightblue;"> Apply for leave</span></a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="head.php"><i class="fa fa-edit" style="color:lightblue;"></i> Exam</a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="home.php"><i class="fa fa-book" style="color:lightblue;"></i> Library</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-cog" style="color:lightblue;"></i> Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="changepassword.php"><span class="fa fa-lock" style="color:lightblue;"> Change Password</spAN></a>
          <a class="dropdown-item" href="myprofile.php"><span class="fa fa-user" style="color:lightblue;"> My Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" style="color:lightblue;"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>
    </div>
    <div class="col-sm-2"><img src="profilepic/<?php echo $_SESSION['pic'] ?>" height="60px" width="60px" style="border-radius:50%"/></div>
    </div>
</div>