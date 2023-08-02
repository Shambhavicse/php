<div class="fixed-top">
  <div class="row" style="background:#2ac1d6;">
    <div class="col-sm-12" id="header1">Welcome Back, <?php echo $_SESSION['adminuser'] ?></div>
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
        <a class="nav-link" href="admindashboard.php"><i class="fa fa-th-large" style="color:lightblue;"></i> Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="uploaddocuments.php"><i class="fa fa-arrow-circle-up" style="color:lightblue;"></i> Upload Documents</a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="admin_home.php"><i class="fa fa-edit" style="color:lightblue;"></i> Exam</a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="admin_hostel_allotment.php"><i class="fa fa-group" style="color:lightblue;"></i> Hostel Allotment</a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="adminhome.php"><i class="fa fa-book" style="color:lightblue;"></i> Library</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlogout.php"><i class="fa fa-sign-out" style="color:lightblue;"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>
    </div>
    <div class="col-sm-2"><i style="font-size:60px;" class="fa fa-user-circle"></i></div>
    </div>
</div>