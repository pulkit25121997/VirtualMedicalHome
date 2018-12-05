<?php
session_start();

// initializing variables
$contact = "";
$username = "";

// connect to the database
$db = mysqli_connect('localhost', 'pulkit', 'pulkit', 'new');


if (isset($_POST['sign_doctor'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  	$query = "SELECT * FROM doctors WHERE doctor_id='".$username."' AND contact='".$contact."'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) 
    {
  	  $_SESSION['username'] = $username;
  	  //$_SESSION['success'] = "You are now logged in";
  	  header('location: doctorhome.php');
  	}
    else 
    {
  		echo "Wrong username and password";
    }
}

?>