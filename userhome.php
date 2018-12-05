<?php
session_start();
$db = mysqli_connect('localhost', 'pulkit', 'pulkit', 'new');
if(!isset($_SESSION["username"]))
{
header('location: signin.php');
}
else
{
$query = "SELECT * FROM users WHERE username='".$_SESSION["username"]."'";
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($results) ; 
    $name= $row["name"] ;
    $dob = $row["dob"] ; 
    $sex = $row["gender"] ;
    $address = $row["address"] ; 

}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/userhome.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#do").toggle();
    });
});
</script>
</head>
<body background="images/21.jpg" style="color: white;">
<div class="jumbotron text-center" style="background-color: #e6ffe6" >
  
  <h2 style="color: green;">Welcome To Virtual Medical Home</h2>
  <p>Online Medical Services</p> 
</div>
<div class="navbar" style="margin-top: -30px; background-color: blue;">
  <a href="#home">Home</a>
  <a href="#news">Services</a>
  <a href="#">Contact Us</a>
  <a href="images/creators.html">AboutUs</a>
  <a href="index.php?logout='1'">Logout</a>
</div>
  <div align="left" style="width:60%;height:750px;background-color: #95B9C7;float: left;margin-left: 20px;">
  <h1 style="color: Darkblue;font-family:Comic Sans MS;margin-left: 10px;">Welcome to our medical services:</h1>
  <h2 style="color: Darkblue;margin-left: 10px;font-family:Comic Sans MS;">Your secure, online health connection</h2>
    <p style="text-align: justify;margin-right: 5px;margin-left: 10px;">
  With Our App, you can access your medical records electronically online. It provides new, convenient methods of communication with your doctor's office. You can renew prescriptions, send messages, and schedule appointments - all online.</p>

  <h2 style="color: Darkblue;margin-left: 10px;font-family:Comic Sans MS;">Urgent Medical Matters</h2>
  <p style="text-align: justify;margin-right: 5px;margin-left: 10px;">
  Please do not use MyUHealthChart to send messages requiring urgent attention. For medical emergencies please call 911. For urgent medical matters, contact your doctor's office.</p>
  <p><img src="images/app1.jpg" width="90px" height="85px" style="margin-left: 10px;margin-top: 10px;float: left;">
    <br>
  <a href="bookappointment.php" style="color:Darkblue;font-size: 25px;text-decoration: none;">&nbsp;Book your appointments</a>
  <p style="margin-left: 105px;text-align: justify;margin-right: 5px;">
    
    Schedule your next appointment, or view details of your past and upcoming appointments
  
  </p>
  <p><img src="images/44.jpg" width="90px" height="85px" style="margin-left: 10px; margin-top: 10px; float: left;" >
  <br> <a href="sendmessage.php" style="color: Darkblue; font-size:25px; text-decoration: none;"> Send Message to a Doctor</a>
  <p style="margin-left:105"> </p>
  </p>
  <p><img src="images/PHR.jpg" width="90px" height="85px" style="margin-left: 10px;margin-top: 10px;float: left;">
    <br>
  <a href="pastmedicalrecords.php" style="color:Darkblue;font-size: 25px;text-decoration: none;">&nbsp;Review Medical Records</a>
  <p style="margin-left: 105px;text-align: justify;">
    Review your past medical records
  
  </p>
  </p>
  </div>
  <div style="float: right;">
  
  <div style="margin-right:40px;margin-top: 20px;background-color: #95B9C7;">
    <img src="images/user1.png" width="70px" height="70px" style="margin-left: 10px;margin-top:-30px;float: left;">
    <a href="#" id="hide" style="color: Darkblue;margin-top: 10px;font-size: 25px;text-decoration: underline;">USER Info</a>
    
  </div>
  <div id="do" style="display: none;margin-right:10px;margin-top:5%;background-color: #95B9C7;"">
    <p style="text-align: justify;"><span style="font-family: Cooper;color: Darkblue;"><b>Name: </b></span><?php echo $name ; ?><br>
      <span style="font-family: Cooper;color: Darkblue;"><b>DateOfBirth: </b></span><?php echo $dob ; ?><br>
      <span style="font-family: Cooper;color: Darkblue;"><b>Sex: </b></span><?php echo $sex ; ?><br>
      <span style="font-family: Cooper;color: Darkblue;"><b>Address: </b></span><?php echo $address ; ?><br>
    </p>
  </div>
  </div>
        <div style="width:100%;height:100px;margin-top: 800px;">                                               
      <h2 align="center" margin-top="100px" style="color: green;">Online Medical System</h2> 
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
