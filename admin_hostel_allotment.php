<?php include('master.php');?>
<?php
session_start();
if(isset($_SESSION['adminuser']))
{
	
} 
else
echo "<script>alert('Username and Password doesn't match');window.location.href='adminlogin.php';</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
#header1{
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
<body >
<?php include('adminheader.php'); ?>
  <div style="border:2px solid #18b7be;margin-top:2%;">
<div class="container" style="font-family:Bahnschrift SemiBold;">
<div class="row" >
<div class="col-sm-6" style="height:auto; background-color:azure; padding:40px 40px; margin-right:auto;
margin-left:auto; margin-bottom:70px; margin-top:90px; box-shadow:-1px 1px 6px 0px #e8e8e8; ">
<div ><span style="font-size:23px; color:#18b7be; ">Allot Student Hostel
<div style="margin-top: -18px; margin-left:-285px;">
<hr style="height:2px; width:200px; background-color:gainsboro;">
<hr style="height:2px; width:190px; background-color:#18b7be; margin-top:-19px;"></span>
</div>

<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Name" aria-label="Name" id="stname" aria-describedby="basic-addon2" style="margin-top:30px; height:30px; width:470px;border:1px solid #e8e8e8;">
</div>

<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Branch" aria-label="branch" id="stbranch" aria-describedby="basic-addon2" style="margin-top:-35px; height:30px; width:470px;border:1px solid #e8e8e8;">
</div>

<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Semester" aria-label="Semester" id="stsemester" aria-describedby="basic-addon2" style="margin-top:-35px; height:30px; width:470px;border:1px solid #e8e8e8;">
</div>

<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Year" aria-label="Year" id="stYear" aria-describedby="basic-addon2" style="margin-top:-35px; height:30px; width:470px;border:1px solid #e8e8e8;">
</div>

<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Alloted Hostel Room Number" aria-label="allotment" id="stahrn" aria-describedby="basic-addon2" style="margin-top:-35px; height:30px; width:470px;border:1px solid #e8e8e8;">
</div>

<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Alloted Hostel Name" aria-label="allotName" id="stahName" aria-describedby="basic-addon2" style="margin-top:-35px; height:30px; width:470px;border:1px solid #e8e8e8;">
</div>

<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Alloted Hostel Warden Name" aria-label="allotWarName" id="Warden" aria-describedby="basic-addon2" style="margin-top:-35px; height:30px; width:470px;border:1px solid #e8e8e8;">
</div>

<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Hostel Fee" aria-label="allotWarName" id="HFee" aria-describedby="basic-addon2" style="margin-top:-35px; height:30px; width:470px;border:1px solid #e8e8e8;">
</div>

<div class="text-center mb-3 col-md-12" style="margin-left:auto; margin-top:70px; position:center;">
              <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1" style=" height:40px; width:250px; background-color:#18b7be; color:white; 
              box-shadow:-1px 1px 2px 0px grey; font-weight:bold; font-size:15px;
            margin:auto; border-radius:100px;border:2px solid #1e969c;">
              ALLOT HOSTEL </button>
            </div>
</div>

</div>
</div>
</div>
  </div>
<?php include('footer.php');?>
</body>
</html>