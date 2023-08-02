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
    </style>
</head>
<body style=" margin-top:8%;">
<?php include('header.php'); ?>
<div class="container" style="font-family:Bahnschrift SemiBold;border:2px solid #18b7be; margin-bottom:1%;">
<div class="row" style="margin:50px;">
<div class="col-sm-6" style="height:490px; background-color:azure; padding:40px 40px; margin:5px 0px; box-shadow:-1px 1px 6px 0px #e8e8e8;">
<div><span style="font-size:23px; color:#18b7be;">Apply For Leave
<hr style="height:2px; width:200px; background-color:gainsboro; margin-right:auto; margin-left:0px;">
<hr style="height:2px; width:190px; background-color:#18b7be;margin-right:auto; margin-left:5px; margin-top:-19px;"></span>
</div>
<div class="md-form mb-5">
<input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon2" style="margin-top:30px;
float:left; height:30px; width:200px;border:1px solid #e8e8e8;">
</div>
<div class="md-form mb-3">
<input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" style="margin-top:-2px;
margin-left:5px; float:left; height:30px; width:200px; border:1px solid #e8e8e8;">
</div>
<div class="md-form mb-3">
<input type="text" class="form-control" placeholder="Branch" aria-label="Branch" aria-describedby="basic-addon2" style="margin-top:20px;
float:left; height:30px; width:200px;border:1px solid #e8e8e8;">
</div>
<div class="md-form mb-3">
<input type="text" class="form-control" placeholder="Semester" aria-label="Sem" aria-describedby="basic-addon2" style="margin:20px 5px;
float:left; height:30px; width:200px; border:1px solid #e8e8e8;">
</div>
<div class="md-form mb-3">
<input type="text" class="form-control" placeholder="Year" aria-label="year" aria-describedby="basic-addon2" style="margin:0px 0px;
float:left; height:30px; width:200px; border:1px solid #e8e8e8;">
</div>
<div class="md-form mb-3">
<input type="text" class="form-control" placeholder="Mobile No." aria-label="mob" aria-describedby="basic-addon2" style="margin:0px 5px;
float:left; height:30px; width:200px; border:1px solid #e8e8e8;">
</div>
<div class="md-form mb-3">
<input type="text" class="form-control" placeholder="Subject" aria-label="mob" aria-describedby="basic-addon2" style="margin:20px 0px;
float:left; height:30px; width:405px; border:1px solid #e8e8e8;">
</div>
</div>
<div class="col-sm-5.5" style="height:500px; background-color:#18b7be; padding:20px; box-shadow:1px 1px 3px 0px #a8a8a8;">
<div class="md-form mb-3">
<textarea type="text" class="form-control" placeholder="Message" aria-label="with textarea" rows="15" cols="30" style="margin:0px 0px; width: 411px;
border:1px solid #e8e8e8; padding:10px;"></textarea>
</div>
<div class="text-center mb-3 col-md-12" style="margin-left:240px; position:left;">
              <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1" style=" height:40px; width:150px; background-color:#18b7be; color:white; 
              box-shadow:-1px 1px 2px 0px grey; font-weight:bold; font-size:15px;
            margin:30px 0px; border-radius:100px;border:2px solid #1e969c;">
              SUBMIT </button>
            </div>
</div>
</div>
</div>
<?php include('footer.php');?>
</body>
</html>