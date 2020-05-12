<html>
<head>
<meta http-equiv="refresh" content="2">
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'yellowchatroomuser', 'yellowchatroomuser', 'yellowchatroom');
/* check connection */
if (!$link)	{die("Could not connect: ". mysqli_error());}
else {
   //echo 'We\'re good';
}

$query = "SELECT * FROM messages";
if ($result = mysqli_query($link, $query)) {
   while ($row = mysqli_fetch_row($result)){
      echo $row['3']. ": ".$row['1'].'</br>';
   }
   mysqli_free_result($result);
}

mysqli_close($link);

?>
</body>
</html>