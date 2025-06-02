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

echo "<b> QUERY </b>";
$sql = "SELECT id, username, fullname, password FROM users WHERE id = " . $_GET['id'];

echo '<br>';

echo $sql;

echo '<br><br>';

echo "<b> RESULT </b><br>";
$result = $conn->query($sql);

$i = 1;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $i . " - username: " . $row["username"]. " - full name: " . $row["fullname"]. "<br>";
        $i++;
    }
} else {
	echo mysqli_error($conn);
}
$conn->close();
?> 
