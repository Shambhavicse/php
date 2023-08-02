<?php include('master.php')?>
<?php
session_start();
if(isset($_SESSION['name']))
{

} 
else
echo "<script>alert('Login firstly');window.location.href='login.php';</script>";
?>
<html>
<head>
<style>
#inner
{
	min-height:60px;
	width:1100px;
	margin-top:45px;
	margin-left:150px;
	background:#f0ffff;
}
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
</style>
</head>
<body>
<?php include('header.php');?>
<div id="outer" style="min-height:500px;min-width:1200px;margin-top:6%;">
<div id="head" style="min-height:50px;min-width:1200px;background:azure;font-size:20px;">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span style="color:black;font-weight:bold;font-family:arial black;">HI-TECH</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>&emsp;&emsp;
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="head.php"><span class="fa fa-home" style="color:#18b7be;"></span><span style="color:green;">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php"><span class="fa fa-indent" style="color:#18b7be;"></span><span style="color:green;">History</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="ranking.php"><span class="fa fa-signal" style="color:#18b7be;"></span><span style="color:green;">Ranking</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="dashboard.php"><span class="fa fa-sign-out" style="color:#18b7be;"></span><span style="color:green;">Signout</span></a>
        </li>
       </ul>
	   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <form class="d-flex" style="margin-top:10px;" >
        <input class="form-control me-2" style="width:200px;border-radius:5px;" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info" type="submit"><span class="fa fa-search"></span></button>
      </form>
    </div>
  </div>
</nav>
</div>
<div style="background-image:url('images/bg.jpg');min-height:600px;min-width:1200px;background-size:cover;padding-top:50px;padding-bottom:50px;box-sizing:border-box;">
<div id="inner">
<table border="2" cellpadding="8" style="color:#18b7be;font-family:arial black;height:60px;width:1100px;text-align:center;">
<tr style="color:black;">
<th>S.N.</th>
<th>Quiz</th>
<th>Questions Solved</th>
<th>Right</th>
<th>Wrong</th>
<th>Score</th>
</tr>
<tr style="color:#18b7be;">
<td>1.</td>
<td>Name of the subject</td>
<td>No. of questions solved</td>
<td><input type="checkbox" style="height:20px;width:80px;"/></td>
<td><input type="checkbox" style="height:20px;width:80px;"/></td>	
<td>No. obtained</td>
</tr>
</table>
</div>
</div>
</div>
<?php include('footer.php');?>
</body>
</html>