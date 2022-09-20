<?php 
session_start();
if (!isset($_SESSION['username'])) {
     header("Location: index.php");
}
?>
<html>
     <head>
          <title>Admin Page</title>
     </head>
     <style>
          body{
               background-image:url("");
          }
          .topbar{
                    float:right;
                    font-size:20px;
                    margin:5px 25px;

               }
               .add{
                    font-size:30px;
                    font-style:italic;
                    font-weight:400;
                    margin:20px;
                    display:flex;
                    justify-content:center;
               }
               a{
                    text-decoration:none;
                    color:black;
               }
               a:hover{
                    text-decoration:underline;
               }
     </style>
     <body>
          <nav>
          <span><a class="topbar" href="logout.php">Logout</a></span>
     </nav>
     <div class="add">Welcome, <?php echo $_SESSION['username']; ?></div>

     </body>
</html>