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
$name = $_POST['name'];
$email = $_POST['email'];




$sql = "insert ignore into users values('$username','$password','$name','$email')";
$result = $conn->query($sql);


if ($result) {
    if (mysqli_affected_rows($conn )==0)
    {
        echo '<script type="text/javascript">
            alert("Username already exit");
            window.location.href = "signin.html";
          </script>';
    }
    else{
        header("Location: mainpage/index.html");
	    exit();
    }
} else {
  
    echo '<script type="text/javascript">
            alert("SignUp Failed");
            window.location.href = "signin.html";
          </script>';
    exit();
}

	

$conn->close();
?>
