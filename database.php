<?php
// create connection credentials
$db_host = 'localhost';
$user = 'pulkit';
$db_name = 'new';
$pass = 'pulkit';

// Create the mysqli object
 $sql = new mysqli($db_host, $user, $pass, $db_name);
 echo "hello";

 // error handler
 if($sql->connect_error)
 {
 	printf("Connect Failed : %s\n", $sql->connect->error);
 	exit();
 }
 
?>