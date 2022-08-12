<?php




$firstname = mysqli_real_escape_string($_POST['firstname']);
$lastname= mysqli_real_escape_string($_POST['lastname']);
$email = mysqli_real_escape_string($_POST['email']);
$phone = mysqli_real_escape_string($_POST['phone']);
$password = mysqli_real_escape_string($_POST['password']);
$repeat_password = mysqli_real_escape_string($_POST['repeat_password']);


$conn = mysql_connect('localhost','root','','zang');
if($conn->connection_error){
        die('could not connect to db :'.$conn->connact_error);
}else { $stmt=$conn->prepare("insert into registration(firstname,lastname,email,phone,password)values(?,?,?,?,?)");

$stmt->bind_param("ssssi",$firstname,$lastname,$email,$phone,$password);
$stmt->execute();
echo"registration saccessful";
$stmt->close();
$conn->close();
	
}

?>