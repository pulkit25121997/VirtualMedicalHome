<?php
session_start();
$db = mysqli_connect('localhost', 'pulkit', 'pulkit', 'new');
if(!isset($_SESSION["username"]))
{
header('location: signin.php');
}
else
{
  //echo $_SESSION["username"];
$query = "SELECT * FROM appointment WHERE username='".$_SESSION["username"]."'";
    $results = mysqli_query($db, $query);
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/pastmedicalrecords.css">
</head>
<body>
<div class="jumbotron text-center" style="background-image: 1.jpeg">
	
  <h2>Welcome To Virtual Medical Home</h2>
  <p>Online Medical Services</p> 
</div>
<div class="navbar" style="margin-top: -30px;">
  <a href="#home">Home</a>
  <a href="#news">Services</a>
  <a href="#">Contact Us</a>
  <a href="#">Appoint</a>
  <a href="#" style="margin-left: 750px"> Profile</a>
  <a href="#"  >Logout</a>
</div>
<h2 align="center">Past Medical Records</h2><div style="width:100%;height:100px">        
<table style="width:100%">
  <tr><th>Name</th><th>Date of Appointment</th><th>Specialisation</th><th>Doctor</th><th>Comments</th></tr>
  <?php
  while($row=$results->fetch_assoc())
  {
    //echo $row["doctor"];
   $sql = "SELECT * FROM doctors WHERE doctor_id='".$row["doctor"]."'";
    $result = mysqli_query($db, $sql);
    $row2 = mysqli_fetch_assoc($result);
 
    echo "<tr><td>".$row["name"]."</td><td>".$row["doa"]."</td><td>".$row["specilisation"]."</td><td>".$row2["name"]."</td><td>".$row["comment"]."</tr>" ;
  }
  ?>
</table>                                       
        <div style="width:100%;height:100px">                                               
      <h2 align="center" margin-top="100px">Online Medical System</h2> 
      <h3 align="center">It is a online Vrtual system </h3>                        
  </div>
  <div class="container" style="background-color: grey;width: 100%">
  <div class="row">
  	<div class="col-sm-3">
      <h3>Virtual Medical Home</h3>
      <p>Online Medical System</p>
      <p>Services provided to all the areas.</p>
    </div>
    <div class="col-sm-3">
      <h3>About Us</h3>
      <p>We provide online services</p>
      <p>Contact us</p>
    </div>
    <div class="col-sm-3">
      <h3>Contact Us</h3>
      <p>+91-9000381785</p>
      <p>webtechnologies@gmail.com</p>
    </div>
    <div class="col-sm-3">
      <h3>Services</h3>        
      <p>online appoint booking</p>
      <p>Online chatting </p>
      <p>Medicla services</p>
    </div>
  </div>
</div>
<div class="container" style="background-color: grey;width: 100%">
	<p align="center"><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a></p>

</div>
</body>
</html>