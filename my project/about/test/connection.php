<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "javatpoint";  
      
    $con = mysqli_connect($host, $user, $password, $javetpoint);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  