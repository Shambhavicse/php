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
<body >
<div style="background-color:azure; border:2px solid #18b7be; margin-top:8%;">
<?php include('header.php'); ?>
<div class="container" style="height:auto;width:760px; padding:10px 5px; font-family:Bahnschrift SemiBold; margin-top:50px; background-color:azure; ">
<div class="row">
<div class="col-sm-9" style="height:auto; width:auto;background-color:#18b7be; border-radius:5px;
float:center; padding:40px 40px;  margin-left:auto; margin-right:auto; margin-bottom:10px;
 box-shadow:-1px 1px 6px 0px #e8e8e8;">
 <span style="font-family:Bahnschrift SemiBold; font-size:19px; color:white;">Hostel Allotment Details</span>
 <hr style="background-color:#168c91;">
 <div><span style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Name : </span>
 <span id="names" style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;">ABC </span>
</div>
<br/>
 <div><span style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Branch : </span>
 <span id="branch" style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Information Technology </span>
</div>
<br/>
<div><span style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Semester : </span>
 <span id="sem" style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> V </span>
</div>
<br/>
<div><span style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Year : </span>
 <span id="year" style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> III </span>
</div>
<br/>
<div><span style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Alloted Hostel Room Number : </span>
 <span id="room" style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> 420 </span>
</div>
<br/>
<div><span style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Alloted Hostel Name : </span>
 <span id="hostel" style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Vishnu Mandir </span>
</div>
<br/>
<div><span style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Alloted Hostel Warden Name : </span>
 <span id="warden" style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Yashpal Singh </span>
</div>
<br/>
<div><span style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;"> Hostel Fee : </span>
 <span id="hFee" style="font-family:Bahnschrift SemiBold; font-size:16px; color:#fff8dc;">2,300 </span>
</div>
<br/>
</div>
</div>
</div>
</div>
<?php include('footer.php');?>
</body>
</html>