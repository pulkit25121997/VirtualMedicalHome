<?php
session_start();

// initializing variables
$password = "";
$username = "";

// connect to the database
$db = mysqli_connect('localhost', 'pulkit', 'pulkit', 'new');


if (isset($_POST['sign_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  	$query = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) 
    {
  	  $_SESSION['username'] = $username;
  	  //$_SESSION['success'] = "You are now logged in";
  	  header('location: userhome.php');
  	}
    else 
    {
  		echo "Wrong username and password";
    }
}

?>