<?php include('master.php');?>
<?php
if(isset($_POST['loginbtn']))
{
    $enrollment=$_POST['eid'];
    $pass=$_POST['pass'];
    $con=mysqli_connect("localhost","root","","collegemanagement");
    $query="select * from registration where enrollment='$enrollment' and pass='$pass'";
    $data=mysqli_query($con,$query);
    $countrow=mysqli_num_rows($data);
    $row=mysqli_fetch_array($data);
    if($countrow>0)
    {
        session_start();
        $_SESSION['name']=$row[0];
        $_SESSION['mobno']=$row[3];
        $_SESSION['email']=$row[4];
        $_SESSION['pic']=$row[9];
        $_SESSION['pass']=$row[5];
        $_SESSION['dob']=$row['dob'];
        $_SESSION['gender']=$row['gender'];
        $_SESSION['enrollment']=$row['enrollment'];
        $_SESSION['course']=$row['course'];
        $_SESSION['year']=$row['year'];
        echo "<script> window.location.href='dashboard.php';</script>";
    }
    else
    echo "wrong data";
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="margin-top:8%;background:#2ac1d6;border:4px solid black; min-height:300px;font-size:14px;color:white;font-weight:bold;padding:2%">
    <div class="col-sm-12" style="font-size:22px;text-align:center">LOGIN FORM</div>
    <form action="" method="post">
    Enrollment Number?<br/>
    <input type="text" name="eid" required class="form-control"/><br/>
    Password<br/>
    <input type="password" name="pass" required class="form-control"/><br/>
    <input type="submit" class="btn btn-info form-control" value="Login Now" name="loginbtn"/><br/>
    <a href="registration.php" style="text-decoration:none;color:white" >New User? Register Now</a>
    </form>
    </div>
    </div>
    </div>
</body>
</html>