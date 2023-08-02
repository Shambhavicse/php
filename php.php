<?php include('master.php')?>
<html>
<head>
<style>
.a
{
	background:lightgreen;
	border-radius:5px;
	border:2px solid #18b7be;
}
</style>
</head>
<body>
<div id="outer" style="min-height:500px;min-width:1200px;">
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
          <a class="nav-link" href="#"><span class="fa fa-sign-out" style="color:#18b7be;"></span><span style="color:green;">Signout</span></a>
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
<div id="inner" style="background:#dfe8e5;min-height:500px;width:950px;font-family:arial black;font-size:17px;margin-left:250px;margin-top:-45px;padding-left:20px;box-sizing:border-box;">
1)Which of the following magic constant of PHP returns full path and filename of the file?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>_LINE_&nbsp;
<input type="radio"/>_FILE_<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>_FUNCTION_&nbsp;
<input type="radio"/>_CLASS_</span>
<br/><br/>
2)Which of the following function is used to check if a file exists or not?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>fopen()&nbsp;
<input type="radio"/>fread()<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>fread()&nbsp;
<input type="radio"/>file_exist()</span>
<br/><br/>
3)Which of the following provides the actual name of the uploaded file?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>$_FILES['file']['tmp_name']&nbsp;
<input type="radio"/>$_FILES['file']['name']<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>$_FILES['file']['size']&nbsp;
<input type="radio"/>$_FILES['file']['type']</span>
<br/><br/>
4)Which of the following method of Exception class returns formated string of trace?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>getMessage()&nbsp;
<input type="radio"/>getCode()<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>getTrace()&nbsp;
<input type="radio"/>getTraceAsString()</span>
<br/><br/>
5)Which of the following method can be used to close a MySql database using PHP?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>mysql_connect()&nbsp;
<input type="radio"/>mysql_query()<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>mysql_close()&nbsp;
<input type="radio"/>None of the above</span>
<br/><br/>
6)Which of the following is used to get information sent via get method in PHP?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>$_GET&nbsp;
<input type="radio"/>$GET<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>$GETREQUEST&nbsp;
<input type="radio"/>None of the above</span>
<br/><br/>
7)Which of the following array represents an array containing one or more arrays?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>Numeric Array&nbsp;
<input type="radio"/>Associative Array<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>Multidimentional Array&nbsp;
<input type="radio"/>None of the above</span>
<br/><br/>
</div>
</div>
</div>
</body>
</html>>