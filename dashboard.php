<?php include('master.php');?>
<?php
session_start();
if(isset($_SESSION['name']))
{

} 
else
echo "<script>alert('Login firstly');window.location.href='login.php';</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    #outer
{
	background:azure;
	min-height:800px;
    padding-right:15%;
}
.a1
{
	min-height:250px;
	max-width:416px;
	margin:5px;
	float:left;
	padding:2% 15%;
	
}
.img
{
	height:306px;
	width:410px;
	border-left:3px double black;
	border-right:3px double red;
	border-top:3px double green;
	
}
.opt
{
   background:aqua;
   color:navy;
   text-align:center;
   line-height:30px;
   font-weight:bold;
   height:35px;
   width:410px;
   border-left:3px double black;
   border-right:3px double red;
   border-bottom:3px double pink;
}
    </style>
</head>
<body>
    <div class="container-fluid">
<?php include('header.php'); ?>
    <div class="row">
    <div id="outer" style="margin-top:6%;" >
<a href="index.php"><div class="a1"><img src="images/home.jpeg" class="img"/><div class="opt">Home</div></div></a>
<a href="#"><div class="a1" ><img src="images/attendence.jpeg"class="img"/><div class="opt">Attendence</div></div></a>
<a href="head.php"><div class="a1" ><img src="images/exam.jpeg"class="img"/><div class="opt">Examination Portal</div></div></a>
<a href="allotmentdetails.php"><div class="a1" ><img src="images/hostel.jpeg"class="img"/><div class="opt">Hostel Portal</div></div></a>
<a href="alldocuments.php"><div class="a1" ><img src="images/curriculm.jpeg"class="img"/><div class="opt">All Documents</div></div></a>
<a href="home.php"><div class="a1" ><img src="images/library.jpeg"class="img"/><div class="opt">Library Portal</div></div></a>
</div>
    </div>
 <?php include('footer.php'); ?>
    </div>
</body>
</html>