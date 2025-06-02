<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname=$_POST['uname'];
$passwrd=md5($_POST['passwrd']);

$query="select username,password from users where username='$uname' and password='$passwrd' limit 0,1";

$result = $conn->query($query);
$rows = $result->num_rows;

if($rows)
{
	echo "You have Logged in successfully" ;
	session_start();
	$_SESSION['username'] = $uname;
}
else
{
	echo mysqli_error($conn);
	Echo "<br>Incorrect username/password combination.<br>Better Luck Next time";
}
?>
