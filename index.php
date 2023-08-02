<?php include('master.php')?>
<!--contactus php-->
<?php
if(isset($_POST['submit_con']))
{
	$name_con=$_POST['name_con'];
	$email_con=$_POST['email_con'];
	$subject_con=$_POST['subject_con'];
	$message_con=$_POST['message_con'];
	$con=mysqli_connect("localhost","root","","collegemanagement");
	$res=mysqli_query($con,"insert into contactus(name_con,email_con,subject_con,message_con) values('$name_con','$email_con','$subject_con','$message_con')");
}
?>
<!--feedback-->
<?php
if(isset($_POST['submit_feed']))
{
	$name_feed=$_POST['name_feed'];
	$email_feed=$_POST['email_feed'];
	$phone_feed=$_POST['phone_feed'];
	$message_feed=$_POST['message_feed'];
	$con=mysqli_connect("localhost","root","","collegemanagement");
	$res=mysqli_query($con,"insert into feedback(name_feed,email_feed,phone_feed,message_feed,date) values('$name_feed','$email_feed','$phone_feed','$message_feed',curdate())");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylecontact.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <style>
    #header1
    {
        background:#2ac1d6;
        padding:5px;
        min-height:20px;
        font-size:22px;
        color:white;
        font-weight:bold;
        text-align:center;
    }
    #footer{
        background:black;
        color:white;
        font-size:20px;
        padding:1%;
        text-align:center;
    }
    #menu ul li a{
        color:#2ac1d6;
        font-size:18px;
        font-family:'Times New Roman';
        margin-left:5px;
    }
    div.colphoto {
        background: url(images/img.jfif) no-repeat ;
        height:485px;
        background-size:1200px 500px;
    }
    div.transbox {
        background:rgba(0,0,0,0.4);
        height:485px;
        border:4px solid black;
    }
    #head{
        line-height:500px;
        color:white;
        font-family:Comic Sans MS;
        font-weight:bold;
    }
    .span{
        font-size:15px;
        color:#fff8dc;
    }
    .iconcolor{
      color:lightblue;
    }
    #colname{
      font-size:20px;
      line-height:60px;
      font-weight:bold;
      color:#18b7be;
      font-family:Castellar;
    }
    #dynamicrow
    {
        min-height:150px;
        background:azure;
        max-height:170px;
        padding:2%;
        margin:1%;
        border:2px solid black;
    }
    .heading
    {
        font-size:18px;
        font-family:'Verdana';
        color:blue;
    }
    .normaltext
    {
        font-size:18px;
        color:blue;
        font-family:calibri;
    }
    </style>
</head>
<body>
    <div class="container-fluid " >
    <div class="row fixed-top" style="padding:5px; background:#e6e9ec;min-height:70px;box-shadow: 3px 3px 5px #7e7c7e;">
    <div class="col-sm-2">
        <img src="images/logo.jfif" style="margin-left:15px; border-radius:50%; " width="30%" height="60px"/>
    </div>
    <div class="col-sm-5" id="colname">Govt. Girls Polytechnic, Gorakhpur</div>
    <div class="col-sm-5">
    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#aboutus"><i class="fa fa-bank iconcolor" ></i> About Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="#contactus"><i class="fa fa-phone iconcolor" ></i> Contact Us</a>
      </li>
      <li class="nav-item">
              <a class="nav-link " href="#feedback"><i class="fa fa-comment iconcolor"></i> Feedback</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user iconcolor" ></i> Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registration.php"><span class="fa fa-check iconcolor"> Register<span></a>
          <a class="dropdown-item" href="login.php"><span class="fa fa-sign-in iconcolor"> Log In<span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="adminlogin.php"> <span class="fa fa-user-circle iconcolor"> Admin<span></a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    </div>
    </div>
    <!--about us-->
    <div class="row" id="aboutus">
    <div class="container colphoto" style="margin-top:5%;">
  <div class="row transbox ">
    <h3 id="head"style="margin-left:15%;">Welcome to <span style="color:#18b7be;"><i>Govt. Girls Polytechnic,Gorakhpur's</i></span> E-Portal</h3>
  </div>
</div>
</div>
<div class="container" style="height:200px; margin-top:1%;padding:2%;background:azure; font-family:arial; border:3px solid #18b7be;">
<div class="row">
<h3 style="color:#18b7be;">About Us...</h3>
<p style="color:grey;font-size:15px; font-family:arial;">Rajkiya Pravidhik Shiksha, Directed under Uttar Pradesh
Government, Pravidhik Shiksha, Gorakhpur Girls Polytechnic which is directed 
under government of India is the largest institution in Eastern U.P. This 
Institute was established in 1984 under the state government authority.</p>
</div>
</div>
<!--contact us-->
<section class="ftco-section" id="contactus">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10 col-md-12">
<div class="wrapper" >
<div class="row no-gutters" >
<div class="col-md-7 d-flex align-items-stretch" style="border:2px solid #18b7be;" >
<div class="contact-wrap w-100 p-md-5 p-4" style="background:azure;">
<h3 class="mb-4" style="color:#18b7be;">Get in touch</h3>
 <hr width=20% color=#18b7be style="height:2px;" align=left>
<form  action="" method="post">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" required name="name_con" id="name" placeholder="Enter your name">
</div>
</div>
<div class="col-md-6"> 
<div class="form-group">
<input type="email" class="form-control" required name="email_con" id="email" placeholder="Enter your email id">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" required name="subject_con" id="subject" placeholder="Why to contact?">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="message_con" class="form-control" required id="message" cols="30" rows="7" placeholder="Enter your message here"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Send Message" name="submit_con" class="btn" style="background:#18b7be; color:#fff8dc;">
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-5 d-flex align-items-stretch">
<div class="info-wrap w-100 p-lg-5 p-4" style="background:#18b7be; border:2px solid black;">
<h3 class="mb-4 mt-md-4" style="color:#fff8dc;">Contact us</h3>
<div class="dbox w-100 d-flex align-items-start" >
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div class="text pl-3">
<p><span class="span">Address:</span> <span style="color:white;">Government Girls Polytechnic Asuran Chowk, Gorakhpur</span></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text pl-3">
<p><span class="span">Phone:</span> <a href="tel://0551-2501615"><span style="color:white;">0551-2501615</span></a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-envelope"></span>
</div>
<div class="text pl-3">
<p><span class="span">Email:</span> <a href="mailto:ggpgkp@gmail.com"><span style="color:white;">ggpgkp@gmail.com</span></a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-globe"></span>
</div>
<div class="text pl-3">
<p><span class="span">Website:</span> <a href="https://ggpgorakhpur.org/"><span style="color:white;">ggpgorakhpur.org</span></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
    </div>
    <!--feedback-->
    <div class="container-contact100" style="background:#18b7be; border:2px solid black;" id="feedback">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="post">
				<span class="contact100-form-title" style="font-family:arial;color:#fff8dc;">
					Student Feedback.....
				</span>
				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" style="font-family:arial;" type="text" name="name_feed" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100"style="font-family:arial;" type="email" name="email_feed" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" style="font-family:arial;" type="number" name="phone_feed" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" style="font-family:arial;" name="message_feed" placeholder="Your Message"></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="btn form-control" name="submit_feed" style="background:azure; color:#18b7be; border-radius:20px 20px;" >
						<span  style="font-family:arial;" >
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Submit
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
  <div class="col-sm-12" style="text-align:center;font-family:'calibri';margin-top:1%;">
    <h3><span style="color:#2ac0d5;"><i> Feedbacks.....</i></span></h3>
    </div>
    <?php
     $con=mysqli_connect("localhost","root","","collegemanagement");
     $query="SELECT*FROM feedback";
     $data=mysqli_query($con,$query);
     while($row=mysqli_fetch_array($data))
     {
    ?>
    <div class="col-sm-6" style="margin-bottom:1%; ">
    <div class="col-sm-12" id="dynamicrow">
    <div class="row">
      <div class="col-sm-2">
        <img src="images/profile.png" style="border-radius:50%; border:2px solid black;" height="75px" width="75px">
     </div>
	<div class="col-sm-10" >
	<span class="heading"><?php echo $row['name_feed']; ?></span><br/>
    <span style="color:#2ac0d5; font-size:20px;" class="normaltext"><?php echo $row['message_feed']; ?> </span><br/>
	</div>
    </div>
    <div class="row">
    <div class="col-sm-12 normaltext" style="text-align:right">
    Uplodaded on: <?php echo $row['date']; ?>
    </div>
    </div>
    </div>
    </div>
    <?php } ?>
	<div id="dropDownSelect1"></div>
	<script src="js/mainfeedback.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
<!--footer-->
<?php include('footer.php');?>
    </div>
    <script src="js/popper.js"></script>
  <script src="js/main.js"></script>
</body>
</html>