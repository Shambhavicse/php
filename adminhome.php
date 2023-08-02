<?php include('master.php');?>
<?php
session_start();
if(isset($_SESSION['adminuser']))
{
	
} 
else
echo "<script>alert('Username and Password doesn't match');window.location.href='adminlogin.php';</script>";
?>
<html>
<head>
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
	background:#18b7be;
	min-height:60px;
	margin-top:6%;
}
</style>
</head>
<body>
<?php include('adminheader.php'); ?>

<div id="outer">
<div id="header"> 
<ul class="nav nav-pills">
<li class="nav-item">
    <a class="nav-link" href="#"><span style="color:black;font-weight:bold;line-height:40px;font-family:arial black;font-size:25px;">HI-TECH</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="adminhome.php"><span style="font-weight:bold;line-height:40px;color:white;font-size:20px;"><span class="fa fa-home"></span>Home</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin_ebook.php"><span style="font-weight:bold;line-height:40px;color:white;font-size:20px;"><span class="fa fa-book"></span>e-book</span></a>
  </li>
</ul>
</div>
</div>
<div style="min-height:400px;background:azure;">
<table class="table table-bordered">
  <thead>
    <tr style="font-family:arial black;text-align:center;">
      <th scope="col">S No.</th>
      <th scope="col">Books</th>
      <th scope="col">Available Books</th>
      <th scope="col">Trade</th>
      <th scope="col">Name of Student</th>
      <th scope="col">Issued Books</th>
      <th scope="col">Date of Issue</th>
      <th scope="col">Date of Submission</th>
    </tr>
  </thead>
  <tbody>
    <tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">1</th>
      <td>Advance Java</td>
      <td>Available</td>
      <td>IT</td>
      <td>St_name</td>
      <td>Issued</td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
    <tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">2</th>
      <td>Cloud Computing</td>
      <td>Available</td>
	  <td>IT</td>
	  <td>St_name</td>
	  <td>Issued</td>
      <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
      <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
    <tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">3</th>
      <td>Android Development</td>
	  <td>Not Available</td>
	  <td>IT</td>
      <td>St_name</td>
      <td>Not Issued</td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
	<tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">4</th>
      <td>Applied Physics</td>
	  <td>Not Available</td>
	  <td>IT</td>
      <td>St_name</td>
      <td>Not Issued</td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
	<tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">5</th>
      <td>Applied Chemistry</td>
	  <td>Available</td>
	  <td>CS</td>
      <td>St_name</td>
      <td>Issued</td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
	<tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">6</th>
      <td>Applied Mathematics</td>
	  <td>Not Available</td>
	  <td>CS</td>
      <td>St_name</td>
      <td>Not Issued</td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
	<tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">7</th>
      <td>PHP</td>
	  <td>Available</td>
	  <td>MECHANICAL</td>
      <td>St_name</td>
      <td>Issued</td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
	<tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">8</th>
      <td>Python</td>
	  <td>Not Available</td>
	  <td>ELECTRICAL</td>
      <td>St_name</td>
      <td>Not Issued</td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
	<tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">9</th>
      <td>Basic Thermal Engineering</td>
	  <td>Available</td>
	  <td>CIVIL</td>
      <td>St_name</td>
	  <td>Issued</td>
      <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
	<tr style="color:#18b7be;font-family:arial black;text-align:center;">
      <th scope="row" style="color:black;">10</th>
      <td>Industrial Fluid Power</td>
	  <td>Not Available</td>
	  <td>IT</td>
	  <td>St_name</td>
	  <td>Not Issued</td>
      <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
	  <td><input type="date" min="2021-01-01" max="2021-12-31"></td>
    </tr>
  </tbody>
</table>
</div>
<?php include('footer.php'); ?>
</body>
</html>