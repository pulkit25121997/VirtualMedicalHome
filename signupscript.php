<?php
session_start();

// initializing variables
$password = "";
$username    = "";

// connect to the database
$db = mysqli_connect('localhost', 'pulkit', 'pulkit', 'new');

// REGISTER USER
if (isset($_POST['register_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $dob=mysqli_real_escape_string($db, $_POST['dob']);
  $email = mysqli_real_escape_string($db, $_POST['eid']);
   $gender= mysqli_real_escape_string($db, $_POST['gender']);
   $contact =  mysqli_real_escape_string($db, $_POST['contact']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
     $city = mysqli_real_escape_string($db, $_POST['city']);
  	$pincode = mysqli_real_escape_string($db, $_POST['pincode']);
  	$username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='".$username."' OR password='".$password."' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      //array_push($errors, "User already exists");
      $_SESSION['msg'] = "User already exists";
      header('location:signup.php') ;
    }
  }
  // Finally, register user if there are no errors in the form
  if (!$user) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, dob, email, gender, mobile, address, city, pincode, username, password ) 
  			  VALUES('".$name."', '".$dob."', '".$email."', '".$gender."', '".$contact."', '".$address."', '".$city."', '".$pincode."', '".$username."', '".$password."')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    header('location:userhome.php');
  }
  // include('errors.php');
}