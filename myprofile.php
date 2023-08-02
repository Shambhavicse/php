<?php include('master.php');?>
<?php
session_start();
if(isset($_SESSION['name']))
{

} 
else
echo "<script>alert('Login firstly');window.location.href='login.php';</script>";
?>
<?php 
if (isset($_POST['sub']))
{
  $name=$_POST['name'];
  $dob=$_POST['dob'];
  $mobno=$_POST['mobno'];
  $enrollment=$_POST['enrollment'];
  $course=$_POST['course'];
  $year=$_POST['year'];
  $user=$_SESSION['enrollment'];
  $photo=$_FILES['pic']['name'];
  $con=mysqli_connect("localhost","root","","collegemanagement");
  if($photo=="")
  {
  $query="update registration set name='$name',dob='$dob',mobno='$mobno',enrollment='$enrollment',course='$course',year='$year' where enrollment='$user'";
  }
  else
  {
  $query="update registration set name='$name',dob='$dob',mobno='$mobno',enrollment='$enrollment',course='$course',year='$year',picname='$photo' where enrollment='$user'";
  $phototmpfile=$_FILES['pic']['tmp_name'];
  move_uploaded_file($phototmpfile,"profilepic/$photo");
  }
  $res=mysqli_query($con,$query);
  $_SESSION['name']=$name;
  $_SESSION['mobno']=$mobno;
  $_SESSION['dob']=$dob;
  $_SESSION['pic']=$photo;
  $_SESSION['gender']=$gen;
  $_SESSION['enrollment']=$enrollment;
  $_SESSION['course']=$course;
  $_SESSION['year']=$year;
}
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
.text{
font-family:Bahnschrift SemiBold;
font-size:18px; 
color:white;
}
    </style>
</head>
<body>
    <div class="container-fluid">
    <?php include('header.php');?>
    <div class="row" style="margin-top:8%;margin-bottom:1%;border:2px solid #18b7be;">
<div class="container" style="font-family:Bahnschrift SemiBold;">
<div class="row" style="margin:50px;">
<div class="col-sm-4" style="height:590px; background-color:azure; padding:40px 40px; margin:5px 0px; box-shadow:-1px 1px 6px 0px #e8e8e8;">
<div style="height:150px; width:150px; border-radius:100%; background-color:#e8e8e8; position:absolute; right:90px; margin-top: 50px;
border:3px solid #18b7be;"><img src="profilepic/<?php echo $_SESSION['pic'];?>" style="height:144px; width:144px; border-radius:100%;"/></div>
<div>
<span style="font-family:Bahnschrift SemiBold; font-size:22px; color:#18b7be; position:absolute; right:90px; margin-top:250px;">   
Name: <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['name'] ?>"/></span>
</div>
<div>
<span style="font-family:Bahnschrift SemiBold; font-size:22px; color:#18b7be; position:absolute; right:90px; margin-top:350px;"> 
Enrollment Number: <input type="text" class="form-control" name="enrollment" value="<?php echo $_SESSION['enrollment'] ?>"/></span>
</div>
</div>
<div class="col-sm-6" style="height:600px; background-color:#18b7be; padding:20px; box-shadow:1px 1px 3px 0px #a8a8a8;">
<div><span style="font-size:23px; color:white;">Student Profile
<hr style="height:2px; width:150px; background-color:white;margin-right:auto; margin-left:2px; margin-top:1px;"></span>
</div>
<div style="margin-top:30px;"><span class="text">
Course: <input type="text" class="form-control" name="course" value="<?php echo $_SESSION['course'] ?>"/>    
</span>
<br/>
<span class="text">
Year: <input type="text" class="form-control" name="year" value="<?php echo $_SESSION['year'] ?>"/>
</span>
<br/>
<span class="text">
Mobile No.: <input type="number" class="form-control" name="mobno" value="<?php echo $_SESSION['mobno'] ?>"/>
</span>
<br/>
<span class="text">
Date of Birth: <input type="date" class="form-control" name="dob" value="<?php echo $_SESSION['dob'] ?>"/>    
</span>
<br/>
Upload profile(if you want to change profile): <input type="file" name="pic" class="form-control" value="<?php echo $_SESSION['pic'] ?>"/>
<br/>
<input type="submit" class="form-control btn btn-info" name="sub" value="Update Profile"/>
</div>
</div>
</div>
</div>
      <!--  <div class="col-sm-12" style="text-align:center;font-size:20px;">
        My Profile
</div>
<div class="container">
    <div class="row">
<div class="col-sm-2" style="margin-top:5%;">
<img src="profilepic/<?php echo $_SESSION['pic'];?>" style="height:150px;width:150px;border:2px solid gray;"/>
</div>
<div class="col-sm-10" style="margin-bottom:5%">
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
<div class="col-sm-6"><br/>
    Name: <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['name'] ?>"/>
</div>
<div class="col-sm-6"><br/>
    Date of Birth: <input type="text" class="form-control" name="dob" value="<?php echo $_SESSION['dob'] ?>"/>
</div>
<div class="col-sm-6"><br/>
    Gender:<br/> 
    <input type="radio" <?php if($_SESSION['gender']=="male") {echo "checked"; }?> name="gen" value="male" />Male &nbsp; &nbsp;&nbsp;&nbsp;
    <input type="radio" <?php if($_SESSION['gender']=="female") {echo "checked";}?> name="gen" value="female" />Female 
</div>
<div class="col-sm-6"><br/>
    Mobile No.: <input type="text" class="form-control" name="mobno" value="<?php echo $_SESSION['mobno'] ?>"/>
</div>
<div class="col-sm-6"><br/>
    College:
    <select class="form-control" name="college">
    <option>Select your college</option>
    <option <?php if($_SESSION['college']=="GGPG"){echo "selected";} ?>>GGPG</option>
    <option <?php if($_SESSION['college']=="GGPG"){echo "selected";} ?>>GGPA</option>
    <option <?php if($_SESSION['college']=="GGPG"){echo "selected";} ?>>GPG</option>
    </select>
</div>
<div class="col-sm-6"><br/>
    Course: <input type="text" class="form-control" name="course" value="<?php echo $_SESSION['course'] ?>"/>
</div>
<div class="col-sm-6"><br/>
    Year: <input type="text" class="form-control" name="year" value="<?php echo $_SESSION['year'] ?>"/>
</div>
<div class="col-sm-6"><br/>
    Upload profile(if you want to change profile): <input type="file" name="pic" class="form-control" value="<?php echo $_SESSION['pic'] ?>"/>
</div>
<div class="col-sm-6"><br/><br/>
 <input type="submit" class="form-control btn btn-info" name="sub" value="Update Profile"/>
</div>
  </form>
</div>
</div>
</div>
</div>-->
    </div>
    <?php include('footer.php');?>
    </div>
</body>
</html>