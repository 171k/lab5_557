<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'root', '', 'userinfo');

$uname=$_POST['uname'];
$passwrd=md5($_POST['passwrd']);

$stmt = $mysqli->prepare("SELECT username,password from users WHERE username = ? AND password = ?");
$stmt->bind_param('ss', $uname,$passwrd);

$stmt->execute();
$stmt->store_result();

if($stmt->num_rows > 0)
{
	echo "You have Logged in successfully" ;
	session_start();
	$_SESSION['username'] = $uname;
}
else
{
	echo mysqli_error($mysqli);
	Echo "<br>Incorrect username/password combination.<br>Better Luck Next time";
}
?>
