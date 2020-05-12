<?php
session_start();

//echo $_POST['username'];
$_SESSION['username']=$_POST['username'];

?>



<html>

<head>
<title>Blue Chat</title>
<link href="bluechat.css" rel="stylesheet">
</head>

<FRAMESET cols="200,*">
   <FRAME src="sidebarblue.php">
   <FRAMESET rows="*,200">
      <FRAME src="messagesblue.php">
      <FRAME src="newmessageblue.php">
   </FRAMESET>
</FRAMESET>

</head>





