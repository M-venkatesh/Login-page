<!DOCTYPE html>
<?php 
session_start();
include "db_conn.php";
if (!isset($_SESSION['username'])) {
     header("Location: index.php");
}
?>


<html lang="en">
<head>
  <title>User Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <style>
          #c1{
               margin-top:150px;
          }
       .container{
               margin-top:30px;
               width:900px;
               background-color:#80eaff;
               border-radius:5px;
       }
       body{
			background-image:url("images/img1.png");
			background-repeat:no-repeat;
			background-size:cover;
		}
      
     </style>
</head>
<body>  
	<nav class="navbar navbar-expand-sm navbar-dark " style="background-color:#E7717D;" >
	  <div class="container-fluid " >
		<a class="navbar-brand " href="#" ><b><i>Welcome, <?php echo $_SESSION['username']; ?></b></i></a>
		
		<div class="collapse navbar-collapse justify-content-end">
		  <ul class="navbar-nav ms-auto">
               <li class="nav-item">
               <a class="nav-link" href="user.php" >Home</a>
			</li>
               <li class="nav-item">
               <a class="nav-link" href="about.html" >About us</a>
			</li>
               <li class="nav-item">
               <a class="nav-link" href="contact.html" >Contact us</a>
			</li>
               <li class="nav-item">
               <a class="nav-link" href="logout.php" >Logout</a>
			</li>			
		  </ul>		  
		</div>
	  </div>
	</nav>
     <div style="padding:10px;" class="container" id="c1" >
          <div id="flex" class="d-flex justify-content-center"><b>Add Student</b></div>
          <div id="panel" class="d-flex justify-content-center">
               <form action="#" method="post">
                  <input type="text" placeholder="Student Name" name="sname" required>
                    <input type="text" placeholder="Roll Number" name="rno" required>
                    <input type="text" placeholder="Class" name="class" required>
                    <input type="text" placeholder="school name" name="school" required>
                    <button type="submit" class="btn btn-primary"name="submit">Add</button>
               </form>
          </div>
     </div>
     <div style="padding:10px;"class="container">
     <div id="flex" class="d-flex justify-content-center"><b>Student Details</b></div>
          <div id="panel" class="d-flex justify-content-center">
          <input type="text" placeholder="Enter Roll Number" name="rno" >&nbsp&nbsp
          <button type="submit" class="btn btn-primary" name="show">show</button>
          </div>
     </div>
     <div class="container">

          <div class="d-flex justify-content-center"> 

               <form style="padding:10px;" method="post" enctype="multipart/form-data" >
               
                    <label><b>Upload .CSV file:</b></label>
                    <input type="file" id="myFile" name="product_file">
                    <input class="btn btn-primary " type="submit" name="upload" value="upload">
               </form>
               
          </div>
     </div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","faculty");

if(isset($_POST["submit"])){
     function validate($data){
          $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
     if(!empty($_POST["sname"]) && !empty($_POST["rno"]) && !empty($_POST["class"]) && !empty($_POST["school"])){
          $sname=$_POST["sname"];
          $rno=$_POST["rno"];
          $class=$_POST["class"];
          $school=$_POST["school"];
          
          $query="insert into student(name,rollno,class,school) values('$sname','$rno','$class','$school')";

          $run=mysqli_query($conn,$query) ;
          if($run){               
               $_SESSION['stuname'] = validate($sname);
               $_SESSION['roll'] = validate($rno);
               $_SESSION['class'] = validate($class);
               $_SESSION['school'] = validate($school);
               header("Location: studentdetails.php");
          }
          else{
               echo "<script>alert('Check the details')</script>";
          }
          
     }
     else{
          echo "'<script>alert('All Fields are Required')</script>'";
     }
}
?>

<?php
if(isset($_POST["upload"])){
     if($_FILES['product_file']['name']){
          $filename=explode(".",$_FILES['product_file']['name']);
          if(end($filename)=="csv"){
               header("location:user.php?updation=1");
          }
     }
     else{
          echo "<script>alert('Please Select a File')</script>";
     }
}