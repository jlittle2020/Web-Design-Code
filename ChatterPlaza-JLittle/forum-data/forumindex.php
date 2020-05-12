<?php
   include ('layout_manager.php');
   include ('content_function.php');
?>
<html>
<head>
   <title>Chatter Plaza Forum</title>
</head>
<link rel="stylesheet" href="forum.css">
<body>
   <div class="pane">
      <div class="header">
         <h1>Chatter Plaza Forum</h1>
      </div>
      <div class="loginpane">
         <?php
		 session_start();
            if (isset($_SESSION['username'])) {
               logOut();
            } else {
               if (isset($_GET['status'])) {
                  if ($_GET['status'] == 'reg_success') {
                     echo "<h1 style='color: green;'>New User Registration Successful!</h1>";
                  } else if ($_GET['status'] == 'login_fail') {
                     echo "<h3 style='color: red;'>Invalid Username and/or Password!</h3>";
                  }
               }
               loginForm();
            }
         ?>
      </div>
      <div class="forumdesc">
         <p>Chat about anything!</p>
      </div>
      <div class="content">
         <?php 
            dispatchCategories();
         ?>
      </div>
   </div>
</body>
</html>