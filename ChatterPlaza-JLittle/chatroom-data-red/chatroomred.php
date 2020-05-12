<?php
session_start();

//echo $_POST['username'];
$_SESSION['username']=$_POST['username'];

?>



<html>

<head>
<title>Red Chat</title>
<link href="redchat.css" rel="stylesheet">
</head>

<FRAMESET cols="200,*">
   <FRAME src="sidebarred.php">
   <FRAMESET rows="*,200">
      <FRAME src="messagesred.php">
      <FRAME src="newmessagered.php">
   </FRAMESET>
</FRAMESET>

</head>





