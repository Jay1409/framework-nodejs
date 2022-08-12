<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$ID= $_POST['ID'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName,ID, email, password) values(?, ?, ?, ?,?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $ID, $email, $password, );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>