<?php
session_start();

//echo $_POST['username'];
$_SESSION['username']=$_POST['username'];

?>



<html>

<head>
<title>Yellow Chat</title>
<link href="yellowchat.css" rel="stylesheet">
</head>

<FRAMESET cols="200,*">
   <FRAME src="sidebaryellow.php">
   <FRAMESET rows="*,200">
      <FRAME src="messagesyellow.php">
      <FRAME src="newmessageyellow.php">
   </FRAMESET>
</FRAMESET>

</head>





