<?php include('master.php');?>
<?php
session_start();
if(isset($_SESSION['adminuser']))
{
	
} 
else
echo "<script>alert('Username and Password doesn't match');window.location.href='adminlogin.php';</script>";
?>
<?php 
if(isset($_POST['sub']))
{
    $title=$_POST['title'];
    $course=$_POST['course'];
    $description=$_POST['description'];
    $tag=$_POST['tag'];
    $doctype=$_POST['doctype'];
    $thumb_fname=$_FILES['thumbnail']['name'];
    $thumb_tmpname=$_FILES['thumbnail']['tmp_name'];
    $doc_fname=$_FILES['document']['name'];
    $doc_tmpname=$_FILES['document']['tmp_name'];
    $userid=$_SESSION['adminuser'];
    $con=mysqli_connect("localhost","root","","collegemanagement");
    $res=mysqli_query($con,"insert into studydocument(title,course,description,tag,doctype,thumbnail,documentname,date,status,userid) value('$title','$course','$description','$tag','$doctype','$thumb_fname','$doc_fname',curdate(),'Publish','$userid')");
    if($res)
    {
        move_uploaded_file($thumb_tmpname,"thumbnail/$thumb_fname");
        move_uploaded_file($doc_tmpname,"document/$doc_fname");
        echo "<script> alert('Your document published successfully');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
      function confirm_delete()
      {
        var v=confirm("Do you realy want to delete this item");
        if(v==true)
        return true;
        else
        return false;
      }
      </script>
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
        font-family:'Calibri';
        margin-left:5px;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
    <?php include('adminheader.php');?>
    <div class="container-fluid" style="margin-top:8%;margin-right:8%;">
    <div class="row">
    <div class="col-sm-12" style="margin-top:3%;margin-bottom:3%;padding:1%;min-height:300px;font-size:14px;font-family:'calibri';background:azure;box-shadow:1px 1px 2px black">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="col-sm-6">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil"></i></span>
  </div>
  <input type="text" class="form-control" required placeholder="Title of Document" name="title" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
	   <div class="col-sm-6">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-book"></i></span>
  </div>
  <input type="text" class="form-control" required  placeholder="For which course?" name="course" aria-label="Username" aria-describedby="basic-addon1">
</div>
    </div>
    <div class="col-sm-6">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil"></i></span>
  </div>
  <textarea class="form-control" row="4" required placeholder="Description/detail of document" name="description" aria-label="Username" aria-describedby="basic-addon1"></textarea>
</div>
    </div>
    <div class="col-sm-6">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil"></i></span>
  </div>
  <textarea class="form-control" row="4" required placeholder="Tags for searching(add with comma)" name="tag" aria-label="Username" aria-describedby="basic-addon1"></textarea>
</div>
    </div>
    <div class="col-sm-6">
    <select class="form-control" name="doctype">
    <option>Select type of your document</option>
    <option>PPT Presentation</option>
    <option>Image</option>
    <option>Audio File</option>
    <option>Video File</option>
    <option>PDF</option>
    <option>ZIP File</option>
    </select>
    </div>
    <div class="col-sm-6" style="font-size:16px;">
    Thumbnail of document: <input type="file" required name="thumbnail" />
    </div>
    <div class="col-sm-6" style="font-size:16px;"><br/>
    Select your document file: <input type="file" required name="document" />
    </div>
    <div class="col-sm-6"><br/>
    <input type="submit" class="form-control btn btn-info" value="Publish now" name="sub" />
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
	</div>
  <div class="container">
    <div class="col-sm-12" style="text-align:center"><h3>Management of Uploaded document</h3></div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Title</th>
      <th scope="col">Course</th>
      <th scope="col">Description</th>
      <th scope="col">Tag</th>
      <th scope="col">Document Type</th>
      <th scope="col">Thumbnail</th>
      <th scope="col">Document File</th>
      <th scope="col">Uploaded Date</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
$con=mysqli_connect("localhost","root","","collegemanagement");
$user=$_SESSION['adminuser'];
$query="SELECT * FROM studydocument WHERE userid='$user' ORDER BY id DESC";
$data=mysqli_query($con,$query);
$i=1;
while($r=mysqli_fetch_array($data))
{
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $r[1]; ?></td>
    <td><?php echo $r[2]; ?></td>
    <td><?php echo $r[3]; ?></td>
    <td><?php echo $r[4]; ?></td>
    <td><?php echo $r[5]; ?></td>
    <td><a href="thumbnail/<?php echo $r[6];?>"><i class="fa fa-download"></i></a></td>
    <td><a href="document/<?php echo $r[7];?>"><i class="fa fa-download"></i></a></td>
    <td><?php echo $r[8]; ?></td>
    <td><?php echo $r[9]; ?></td>
    <td><a href="editdocuments.php?id1=<?php echo $r[0]?>"<i class="fa fa-pencil" style="color:green;font-size:18px;"></i></a>
    <a onclick="return confirm_delete()" href="uploaddocuments.php?id1=<?php echo $r[0]?>"<i class="fa fa-trash" style="color:red;font-size:18px;"></i></a>
  </td>
  </tr>
  <?php 
  $i++;
}
?>
  </tbody>
</table>
  </div>
  <div>
    <?php include('footer.php');?>
  </div>
</body>
</html>