<?php
   include ('databaseconnect.php');
   $select = mysqli_query ($con, "SELECT * FROM categories");
   while ($row = mysqli_fetch_assoc($select)) {
      echo "<h1>".$row['category_title']."</h1>";
   }
?>