<?php
   function loginForm() {
      echo "<form action='validatelogin.php' method='POST'>
	           <p>Username:</p>
               <input type='text' id='usernameinput' name='usernameinput'>
               <p>Password:</p>
               <input type='password' id='passwordinput' name='passwordinput'></br></br>
               <input type='submit' value='Log In'>
               <button type='button' onclick='location.href=\"register.html\";'>Register</button>
            </form>";
   }
   function logOut() {
      echo nl2br("<p>Welcome ".$_SESSION['username']."!</p>
                  <form action='logout.php' method='GET'>
                     <input type='submit' value='Log Out'>
                  </form>");
   }
?>
