<?php include('master.php');?>
<?php
session_start();
if(isset($_SESSION['adminuser']))
{
	
} 
else
 "<script>alertecho('Username and Password doesn't match');</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
#main{
  height:200px auto;
  width:100%;
  border:3px solid #18b7be;
  background-color:azure;
  padding:10px;
  margin-top:6%;
}
#sec{
  height:600px;
  width:100%;
  border:3px solid #18b7be;
  background-color:azure;
  padding:10px;
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
<?php include('adminheader.php'); ?>
<span style="font-weight:bold; font-size:15px; color:#18b7be; background-color:azure;">Student Attendance</span>
<div class="input-group mb-3" id="main" >
<br/> 
<div class="md-form pb-3" style="float:left; margin:0px 90px;">
  <span class="input-group-text" id="basic-addon1" style="font-weight:bold; font-size:15px; color:#18b7be; background-color:azure; border:1px solid azure;">Enrollment Number:</span>
  <input type="text" class="form-control"  aria-label="number" aria-describedby="basic-addon1" style="height:30px; width:300px; border:3px solid #18b7be; color:black; margin:0px 20px;"/>

</div>
<div class="md-form pb-3" style="float:left; margin:0px 50px;">
  <span class="input-group-text" id="basic-addon2" style="font-weight:bold; font-size:15px; background-color:azure; border:1px solid azure; color:#18b7be;">Student Name:</span>
  <input type="text" class="form-control"  aria-label="name" aria-describedby="basic-addon2" style="height:30px; width:300px; margin:0px 20px;  border:3px solid #18b7be; color:black;">
</div>

<div class="md-form pb-3" style="float:left; margin:0px 50px;">
  <span class="input-group-text" id="basic-addon2" style="font-weight:bold; background-color:azure; border:1px solid azure; font-size:15px; color:#18b7be;">Subject:</span>
  <input type="text" class="form-control"  aria-label="subject" aria-describedby="basic-addon2" style="height:30px; width:300px; margin:0px 20px; border:3px solid #18b7be; color:black;">
</div>

<div class="md-form pb-3" style="float:left; margin:0px 90px;">
<br/>
<span class="input-group-text" id="basic-addon2" style="font-weight:bold; font-size:15px; background-color:azure; border:1px solid azure; color:#18b7be;">Branch:</span>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" style="height:30px; width:300px; margin:0px 20px;  border:3px solid #18b7be; border-radius:4px; color:black;">
  <option selected> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select</option>
  <option value="1">C.S. </option>
  <option value="2">I.T.</option>
  <option value="3">T.D.</option>
  <option value="3">M.O.M.</option>
  <option value="3">E.C.</option>
  <option value="3">P.G.D.C.A.</option>
</select>
</div>

<div class="md-form pb-3" style="float:left; margin:0px 50px;">
<br/>
<span class="input-group-text" id="basic-addon2" style="font-weight:bold; background-color:azure; border:1px solid azure; font-size:15px; color:#18b7be;">Year:</span>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" style="height:30px; width:300px; margin:0px 20px; 
border-radius:4px; border:3px solid #18b7be; color:black;">
  <option selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select</option>
  <option value="1">First </option>
  <option value="2">Second</option>
  <option value="3">Third</option>
</select>
</div>

<div class="md-form pb-3" style="float:left; margin:0px 50px;">
<br/>
<span class="input-group-text" id="basic-addon2" style="font-weight:bold; font-size:15px; background-color:azure;
border:1px solid azure; color:#18b7be;">Semester:</span>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" style="height:30px; width:300px; margin:0px 20px; border-radius:4px;
 border:3px solid #18b7be; color:black;">
  <option selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select</option>
  <option value="1">I </option>
  <option value="2">II</option>
  <option value="3">III</option>
  <option value="1">IV </option>
  <option value="2">V</option>
  <option value="3">VI</option>
</select>
<br/>
</div>
<div class="form-check" style="margin:-50px 0px;">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked style="font-size:15px; margin:20px 0px;">
  <label class="form-check-label" for="exampleRadios1">
   <span style="font-size:15px; color:#18b7be;"> Present</span>
  </label><br/><br/><br/><br/>
  <div class="form-check" style="margin:10px -20px;">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked style="font-size:15px; margin:20px 0px;color:#18b7be;">
  <label class="form-check-label" for="exampleRadios1">
  <span style="font-size:15px; color:#18b7be;"> Absent</span>
  </label>
  </div>
</div>
<button type="button" class="btn btn-success" style="height:40px; width:200px;text-align:center; font-weight:bold; background-color:#18b7be;
font-size:18px; margin:40px 700px;" >Add Student</button>
</div>
<div id="sec" style="margin-top:-10px;">
<table class="table  table-hover" style="background-color:white;">
  <tr style="font-size:17px; background-color:#18b7be; color:white;">
  <th>Enrollment Name</th>
  <th>Student Name</th>
  <th>Subject</th>
  <th>Branch</th>
  <th>Year</th>
  <th>Semester</th>
  <th>Attendance</th>
  </tr>

  <tr style="font-size:17px;">
  <td>Enrollment Name</td>
  <td>Student Name</td>
  <td>Subject</td>
  <td>Branch</td>
  <td>Year</td>
  <td>Semester</td>
  <td>Attendance</td>
  </tr>

  <tr style="font-size:17px;">
  <td>Enrollment Name</td>
  <td>Student Name</td>
  <td>Subject</td>
  <td>Branch</td>
  <td>Year</td>
  <td>Semester</td>
  <td>Attendance</td>
  </tr>
  <tr style="font-size:17px;">
  <td>Enrollment Name</td>
  <td>Student Name</td>
  <td>Subject</td>
  <td>Branch</td>
  <td>Year</td>
  <td>Semester</td>
  <td>Attendance</td>
  </tr> <tr style="font-size:17px;">
  <td>Enrollment Name</td>
  <td>Student Name</td>
  <td>Subject</td>
  <td>Branch</td>
  <td>Year</td>
  <td>Semester</td>
  <td>Attendance</td>
  </tr> <tr style="font-size:17px;">
  <td>Enrollment Name</td>
  <td>Student Name</td>
  <td>Subject</td>
  <td>Branch</td>
  <td>Year</td>
  <td>Semester</td>
  <td>Attendance</td>
  </tr>
</table></div>
<?php include('footer.php'); ?>
</body>
</html>