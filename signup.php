<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <style>
          body{
			background-image:url("images/bg.png");
			background-repeat:no-repeat;
			background-size:cover;
          
		}
          form{
               margin-left:3px;
               background-color: #e3e8e5;
               margin-top: 60px;
          }
          h2{
               color: #000;
          }
          
     </style>
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          
          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Enter Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Enter Username"><br>
          <?php }?>
          <label>email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="email address"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="Enter Email Address"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Enter Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Confirm Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">&nbsp &nbsp  Already have an account?</a>
     </form>
</body>
</html>