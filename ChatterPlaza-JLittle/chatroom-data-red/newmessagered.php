<?php
session_start();

if (ISSET($_POST['message'])) {

$link = mysqli_connect('localhost', 'redchatroomuser', 'redchatroomuser', 'redchatroom');
/* check connection */
if (!$link)	{die("Could not connect: ". mysqli_error());}
else {
   //echo 'We\'re good';
}

$message = mysqli_real_escape_string($link, $_POST['message']);
$username = mysqli_real_escape_string($link, $_SESSION['username']);

$sql = "INSERT INTO messages (message, username)
VALUES ('$message', '$username')";

$result = mysqli_query($link, $sql);

mysqli_close($link);
}

echo '<html>';
echo '<head></head><body>';
echo '<form action="newmessagered.php" method="POST">';
echo '<input type="text" style="width: 80em;" name="message">';
echo '<input type="submit" name="Send" value="Send">';
echo '</form>';
echo '</body></html>';

?>