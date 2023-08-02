<?php include('master.php')?>
<?php 
if (isset($_POST['sub']))
{
	$adminuser=$_POST['adminuser'];
    $adminpass=$_POST['adminpass'];
	$con=mysqli_connect("localhost","root","","collegemanagement");
	$query="select * from admin where adminuser='$adminuser' and adminpassword='$adminpass'";
	$data=mysqli_query($con,$query);
	 $countrow=mysqli_num_rows($data);
    $row=mysqli_fetch_array($data);
	if($countrow>0)
	{
		session_start();
		$_SESSION['adminuser']=$row[0];
		$_SESSION['adminpass']=$row[1];
		echo "<script>alert('Login successfully');window.location.href='admindashboard.php';</script>";
	}
	else
echo "<script>alert('Incorrect username or password');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="css/admincss.css" rel="stylesheet">
</head>
<body>
	<div class="login-form">
		<h2>Administration</h2>
		<form action="" method="post">
			<div class="input-field" style="padding:0 10%; margin-top:5%;">
				<i class="fa fa-user"></i>
					<input type="text" placeholder="Admin Name" name="adminuser">
</div>
<div class="input-field" style="padding:0 10%;">
	<i class="fa fa-lock"></i>
	<input type="password" placeholder="Password"  name="adminpass">
</div>
<input type="submit" class="form-control btn btn-info" id="btn" name="sub" value="Login"/>
</form>
</div>
</body>
</html>