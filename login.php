<?php
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "void";
$port=3306;

$conn = new mysqli($serverName, $username, $password, $databaseName,$port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysqli_real_escape_string($conn, $username);
//$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: mainpage/index.html");
	exit();
} else {
	echo '<script type="text/javascript">
            alert("Invalid password or username");
            window.location.href = "login.html";
          </script>';
    exit();
}

$conn->close();
?>
