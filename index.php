<!DOCTYPE html>
<html>
<head>
	<title>Student Intervention</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
			background-image:url("images/bgimg.jpg");
			background-repeat:no-repeat;
			background-size:cover;
		}
		form{
			opacity: .9;
			margin-top:80px;
		}
		h1{
			text-align:center;
			font-size:40px;
			font-style:italic;
		}
		
	</style>
</head>
<body>
	<div>
	<h1>Student Intervention System</h1>
	</div>
	
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="Enter Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Enter your Password"><br>

     	<button type="submit">Login</button>
		 <p>Don't have an account?
          <a href="signup.php" class="ca">Create an account</a></p>
     </form>
</body>
</html>