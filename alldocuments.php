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
        font-family:'Arial';
        margin-left:5px;
    }
    #dynamicrow
    {
        min-height:150px;
        background:azure;
        max-height:170px;
        padding:2%;
        margin:1%;
        border-radius:40px;
        box-shadow:1px 2px black;
    }
    .heading
    {
        font-size:15px;
        font-family:'Verdana';
        color:#000039;
    }
    .normaltext
    {
        font-size:15px;
        font-family:'font-family:calibri';
    }
    .border
    {
        border:2px solid grey;
        padding:1%;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
    <?php include('header.php');?>
    <div class="row" style="margin-top:8%;">
    <div class="col-sm-12" style="text-align:center;font-family:'calibri'">
    <h3><span style="color:#2ac0d5;"><i> Show Documents</i></span></h3>
    </div>
    <?php
     $con=mysqli_connect("localhost","root","","collegemanagement");
     $query="SELECT registration.*,studydocument.* FROM registration,studydocument order by studydocument.id desc";
     $data=mysqli_query($con,$query);
     while($row=mysqli_fetch_array($data))
     {
    ?>
    <div class="col-sm-6" style="margin-bottom:1%; ">
    <div class="col-sm-12" id="dynamicrow">
    <div class="row">
    <div class="col-sm-2">
    <img src="thumbnail/<?php echo $row['thumbnail']; ?>" class="border" height="70px" width="70px">
    </div> 
	<div class="col-sm-10" >
	<span class="heading"><?php echo $row['title']; ?></span><br/>
    <span style="color:#2ac0d5;" class="normaltext">Specially Designed for: <?php echo $row['course']; ?> </span><br/>
    <span class="heading" style="color:black;font-size:13px;">Description: <?php echo $row['description']; ?></span>
	</div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <span class="normaltext">File type is: <?php echo $row['doctype']; ?> 
    <br/>Click Here to download &nbsp; &nbsp; <a href="document/<?php echo $row['documentname']; ?>"><span style="color:red;" class="fa fa-download"></span></a></span>
    </div>
    <div class="col-sm-1">
    <img src="profilepic/<?php echo $row['picname']; ?>" style="margin-top:5px;" height="45px" width="40px">
    </div>
    <div class="col-sm-7">
    <span class="heading" style="font-size:13px">Uploaded by: <?php echo $row['name']; ?><span class="normaltext">(<?php echo $row['course']; ?> / <?php echo $row['year']; ?>)</span></span><br/>
    <span class="normaltext">From: Government Girls Polytechnic, Gorakhpur</span>
    </div>
    <div class="col-sm-12 normaltext" style="text-align:right">
    Uplodaded on: <?php echo $row['date']; ?>
    </div>
    </div>
    </div>
    </div>
    <?php } ?>
    </div>
     </div>
 <?php include('footer.php');?>
    </div>
	</div>
</body>
</html>