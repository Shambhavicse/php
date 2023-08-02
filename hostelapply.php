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
<body>
  <div>
<div class="main" style="height:900px; width=90%; border:2px solid #18b7be; background-color:azure; text-align:left; padding:30px;margin-top:8%;">
<?php include('header.php'); ?>
<form action="">
<fieldset style="border:2px solid #18b7be; padding:5px 40px;">
<legend style="height:30px; width:160px; font-size:18px; padding:0px 10px; background-color:#18b7be; color:#fff8dc;
font-family:Bahnschrift SemiBold;">Personal Details</legend>
<div>
<div style="float:left; font-family:Bahnschrift SemiBold;">
<span for="fname" style="color:#1e969c; font-size:14px;"> First Name:</span>
<input type="email" id="Form-email1" class="form-control validate white-text" required style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 90px; font-family:Bahnschrift SemiBold;">
<span for="lname" style="color:#1e969c; font-size:14px;"> Last Name:</span>
<input type="email" id="Form-email2" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 30px; font-family:Bahnschrift SemiBold;">
<span for="ftname" style="color:#1e969c; font-size:14px;"> Father's Name:</span>
<input type="email" id="Form-email3" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 80px; font-family:Bahnschrift SemiBold;">
<span for="mtname" style="color:#1e969c; font-size:14px;"> Mother's Name:</span>
<input type="email" id="Form-email4" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
</div>

<div style="margin:90px 0px;">
<div style="float:left; font-family:Bahnschrift SemiBold;">
<span for="cno" style="color:#1e969c; font-size:14px;"> Contact No.:</span>
<input type="email" id="Form-email5" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 90px; font-family:Bahnschrift SemiBold;">
<span for="add" style="color:#1e969c; font-size:14px;"> Address:</span>
<input type="email" id="Form-email6" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 30px; font-family:Bahnschrift SemiBold;">
<span for="city" style="color:#1e969c; font-size:14px;">City:</span>
<input type="email" id="Form-email7" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 80px; font-family:Bahnschrift SemiBold;">
<span for="distt" style="color:#1e969c; font-size:14px;"> District:</span>
<input type="email" id="Form-email8" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
</div>

<div style="margin:180px 0px;">
<div style="float:left; font-family:Bahnschrift SemiBold;">
<span for="state" style="color:#1e969c; font-size:14px;"> State:</span>
<input type="email" id="Form-email9" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 90px; font-family:Bahnschrift SemiBold;">
<span for="pin" style="color:#1e969c; font-size:14px;"> Pin Code:</span>
<input type="email" id="Form-email10" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 30px; font-family:Bahnschrift SemiBold;">
<span for="mail" style="color:#1e969c; font-size:14px;"> Email:</span>
<input type="email" id="Form-email11" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>

</div>
<br/><br/><br/>
</fieldset>

<fieldset style="border:2px solid #18b7be; padding:5px 40px; margin:40px 0px;">
<legend style="height:30px; width:180px; font-size:18px; padding:0px 10px; background-color:#18b7be; color:#fff8dc;
font-family:Bahnschrift SemiBold;">Educational Details</legend>
<div>
<div style="float:left; font-family:Bahnschrift SemiBold;">
<span for="eno" style="color:#1e969c; font-size:14px;"> Enrollment No.:</span>
<input type="email" id="Form-email12" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 90px; font-family:Bahnschrift SemiBold;">
<span for="acn" style="color:#1e969c; font-size:14px;"> Aadhar Card No.:</span>
<input type="email" id="Form-email3" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 30px; font-family:Bahnschrift SemiBold;">
<span for="branch" style="color:#1e969c; font-size:14px;"> Branch:</span>
<input type="email" id="Form-email14" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 80px; font-family:Bahnschrift SemiBold;">
<span for="year" style="color:#1e969c; font-size:14px;"> Year:</span>
<input type="email" id="Form-email15" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
</div>

<div style="margin:90px 0px;">
<div style="float:left; font-family:Bahnschrift SemiBold;">
<span for="sem" style="color:#1e969c; font-size:14px;"> Semester:</span>
<input type="email" id="Form-email16" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 90px; font-family:Bahnschrift SemiBold;">
<span for="adD" style="color:#1e969c; font-size:14px;"> Admission Date:</span>
<input type="email" id="Form-email17" class="form-control validate white-text" style="height:25px; width:250px; border: 1px solid #1e969c;
margin:-4px 4px; ">
</div>
<div style="float:left; margin:0px 30px; font-family:Bahnschrift SemiBold;">
<span for="photo" style="color:#1e969c; font-size:14px;">Upload Your Photo:</span><br/>
<input type="file" id="myFile" name="filename" accept="image/jpeg,image/jpg,image/png" style="color:#18b7be;">
</div>

</div>
<br/><br/><br/>
</fieldset>
<br/><br/><br/>
<div class="text-center mb-3 col-md-12" style="margin:0px 600px; position:center;">
              <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1" style=" height:40px; width:350px; background-color:#18b7be;; color:#fff8dc; 
              box-shadow:-1px 1px 2px 0px grey; font-weight:bold; font-size: 15px;
            maargin:30px 0px; border-radius:100px; ">
              SUBMIT </button>
            </div>
</form>
  </div>
<?php include('footer.php');?>
</div>
</body>
</html>