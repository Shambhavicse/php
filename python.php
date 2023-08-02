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
1)What is the maximum possible length of an identifier?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>16&nbsp;
<input type="radio"/>32<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>64&nbsp;
<input type="radio"/>None of the above</span>
<br/><br/>
2)Who developed the Python language?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>Zim Den&nbsp;
<input type="radio"/>Guido van Rossum<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>Niene Stom&nbsp;
<input type="radio"/>Wick van Rossum</span>
<br/><br/>
3)In which year was the Python language developed?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>1995&nbsp;
<input type="radio"/>1972<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>1981&nbsp;
<input type="radio"/>1989</span>
<br/><br/>
4)In which language is Python written?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>English&nbsp;
<input type="radio"/>PHP<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>C&nbsp;
<input type="radio"/>All of the above</span>
<br/><br/>
5)Which one of the following is the correct extension of the Python file?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>.py&nbsp;
<input type="radio"/>.python<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>.p&nbsp;
<input type="radio"/>None of these</span>
<br/><br/>
6)What do we use to define a block of code in Python language?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>Key&nbsp;
<input type="radio"/>Brackets<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>Indentation&nbsp;
<input type="radio"/>None of these</span>
<br/><br/>
7)Which character is used in Python to make a single line comment?<br/>
&nbsp;&nbsp;<span style="color:#18b7be;font-family:impact;font-size:18px;"><input type="radio"/>/
&nbsp;
<input type="radio"/>//<br/>
&nbsp;&nbsp;&nbsp;<input type="radio"/>#&nbsp;
<input type="radio"/>!</span>
<br/><br/>
</div>
</div>
</div>
</body>
</html>