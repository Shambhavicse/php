<?php include('master.php');?>
<?php
if(isset($_POST['sub']))
{
    $enrollment=$_POST['enrollment'];
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gen=$_POST['gen'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $course=$_POST['course'];
    $year=$_POST['year'];
    $picname=$_FILES['photo']['name'];
    $pictmpname=$_FILES['photo']['tmp_name'];
    $pictype=$_FILES['photo']['type'];
    if($pictype=="image/png" || $pictype=="image/jpg" || $pictype=="image/jpeg")
    {
   $con=mysqli_connect("localhost","root","","collegemanagement");
   $res=mysqli_query($con,"insert into registration(name,dob,gender,mobno,email,pass,enrollment,course,year,picname,regdate) value('$name','$dob','$gen','$mobno','$email','$pass','$enrollment','$course','$year','$picname',curdate())");
   echo ""
   if($res)
   {
       move_uploaded_file($pictmpname,"profilepic/$picname");
       echo "<script>alert('Your Registration Succesfully');window.location.href='login.php';</script>"; 
   }
   else 
   echo "<script>alert('Your Registration not Succesfully');</script>"; 
}
else
echo "<script>alert('Only .jpg, .jpeg, .png file are accepted');</script>"; 
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
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}
    </style>
</head>
<body>
    <section class="h-100 bg-dark">
    <form action="" method="post" enctype="multipart/form-data">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4" style="background:#f0ffff;" >
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="images/img.jfif"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:100%; width:100%;"
              />
            </div>
            <div class="col-xl-6" >
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase" style="color:#18b7be;">Student registration</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" class="form-control form-control-lg" required name="enrollment" placeholder="Enrollment Number" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" class="form-control form-control-lg" required name="name" placeholder="Name" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="date" class="form-control form-control-lg" required name="dob" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="number" class="form-control form-control-lg" required name="mobno" placeholder="Mobile Number" />
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" class="form-control form-control-lg" required name="email" placeholder="Email" />
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                  <div class="form-check form-check-inline mb-0 me-4">
                  <input type="radio" name="gen" value="male" checked/>Male
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                  <input type="radio" name="gen" value="female"/>Female
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select" name="course">
                      <option >Course</option>
                      <option >Information Technology</option>
                      <option >Computer Science</option>
                      <option >Electronic</option>
                      <option >MOM</option>
                      <option >PGDCA</option>
                      <option >Textile Designing</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select class="select" name="year">
                      <option >Year</option>
                      <option >First</option>
                      <option >Second</option>
                      <option>Third</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                <input type="password" class="form-control form-control-lg" required name="pass" placeholder="Password" />
                </div>

                <div class="form-outline mb-4">
                Profile Photo:
                <br/><input type="file" required name="photo"/>
                </div>
                <div class="d-flex justify-content-end pt-3">
                <a href="login.php"><input type="button" class="btn btn-light btn-lg" style="color:grey;font-size:10px;" value="Already Registered? Click to login"/></a>
                <input type="submit" class="btn btn-info btn-lg ms-2" name="sub" value="Register Now"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
  </div>
</section>
</body>
</html>