<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pickitup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['usernamesignup'])) {
	$username = $_POST['usernamesignup'];
	$email = $_POST['emailsignup'];
	$password = $_POST['passwordsignup'];
	$confirm_password = $_POST['passwordsignup_confirm'];
	
	$sql = "INSERT INTO accounts (username, email,password,confirm_password)
	VALUES ('".$username."','".$email."','".$password."','".$confirm_password."')";

	if ($conn->query($sql) === TRUE) {
		header("Location: http://localhost/pickItUp/main.html", true, 301);
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}


$conn->close();

?>