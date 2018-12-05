<?php 
session_start();

// initializing variable

// connect to the database
$db = mysqli_connect('localhost', 'pulkit', 'pulkit', 'new');

// REGISTER USER
if (isset($_POST['make_appointment'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  //echo $name;
  $username = $_SESSION['username'];
  //echo $username;
  $doa=mysqli_real_escape_string($db, $_POST['doa']);
  //echo $doa;
  $gender= mysqli_real_escape_string($db, $_POST['gender']);
  //echo $gender;
   $contact =  mysqli_real_escape_string($db, $_POST['mobile']);
   //echo $contact;
    $specialisation = mysqli_real_escape_string($db, $_POST['specialisation']);
    //echo $specialisation;
     $doctor = $_POST['doctors'];
     //echo $doctor;
  	$comment = mysqli_real_escape_string($db, $_POST['comments']);
  	//echo $comment;
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "INSERT INTO appointment (name, username, doa, gender, contact, specilisation, doctor,comment) VALUES('".$name."', '".$username."', '".$doa."', '".$gender."', '".$contact."', '".$specialisation."', '".$doctor."','".$comment."')";
  $result = mysqli_query($db, $user_check_query);
  if ($result) {
    echo "New record created successfully";
    header('location:userhome.php') ;
} else {
    echo "Error: " . $user_check_query . "<br>" . mysqli_error($db);
}
  
  	//header('location:success.php') ;
    }
  ?>
  