<?php include('master.php');?>
<?php
session_start();
if(isset($_SESSION['name']))
{

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
    </style>
</head>
<body>
    <div class="container-fluid">
    <?php include('header.php');?>
    <div class="row" style="margin-top:8%;">
    <div class="container">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="margin-top:1%;margin-bottom:1%;background:#2ac1d6;border:4px solid black; min-height:300px;font-size:14px;color:white;font-weight:bold;padding:2%">
    <div class="col-sm-12" style="font-size:22px;text-align:center">Change your password</div>
    <form action="oldpassword.php" method="post">
    Old Password<br/>
    <input type="password" name="opassword" required class="form-control"/><br/>
    New Password<br/>
    <input type="password" name="newpassword" required class="form-control"/><br/>
    Re-enter Password<br/>
    <input type="password" name="cpassword" required class="form-control"/><br/>
    <input type="submit" class="btn btn-info form-control" value="Change Password" name="sub"/><br/>
    </form>
    </div>
    </div>
    </div>
    </div>
    <?php include('footer.php');?>
    </div>
</body>
</html>