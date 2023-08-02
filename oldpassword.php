<?php
$oldpass=$_POST['opassword'];
$newpass=$_POST['newpassword'];
$cpass=$_POST['cpassword'];
session_start();
$password=$_SESSION['pass'];
$user=$_SESSION['email'];
if($password==$oldpass)
{
    if($newpass==$cpass)
    {
        $con=mysqli_connect("localhost","root","","collegemanagement");
        $query="update registration set pass='$newpass' where email='$user'";
        $res=mysqli_query($con,$query);
        if($res)
        {
            echo "<script>alert('Password Changed');window.location.href='login.php';</script>";
        }
    }
    else
    echo "<script> alert('Your new password and confirm password doesn't match.');</script>";
}
else
echo "<script> alert ('Your current password is invalid try again');</script>";
?>