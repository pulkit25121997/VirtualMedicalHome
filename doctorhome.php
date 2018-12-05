<?php
session_start();
$db = mysqli_connect('localhost', 'pulkit', 'pulkit', 'new');
if(!isset($_SESSION["username"]))
{
header('location: signin.php');
}
else
{
$query = "SELECT * FROM doctors WHERE doctor_id='".$_SESSION["username"]."'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) > 0)
    {
      echo "Hello World";
    }
    $row = mysqli_fetch_assoc($results) ; 
    $name= $row["name"] ;
    $speciality = $row["speciality"] ; 
    $contact = $row["contact"] ; 

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
<body background="21.jpg" style="color: white;">
<div class="jumbotron text-center" style="background-color: #e6ffe6" >
  
  <h2 style="color: green;">Welcome To Virtual Medical Home</h2>
  <p>Online Medical Services</p> 
</div>
<div class="navbar" style="margin-top: -30px; background-color: blue;">
  <a href="#home">Home</a>
  <a href="#news">Services</a>
  <a href="#">Contact Us</a>
  <a href="#">AboutUs</a>
  <a href="#" style="margin-left: 750px">LogIn</a>
  <a href="index.php?logout='1'">Logout</a>
</div>
  <div align="left" style="width:60%;height:600px;background-color: #95B9C7;float: left;margin-left: 20px;">
  <h1 style="color: Darkblue;font-family:Comic Sans MS;margin-left: 10px;">Hello <?php echo $name; ?></h1>
  
  <p><img src="C:\Users\Nishant\Desktop\project\doc1.jpg" width="90px" height="85px" style="margin-left: 10px;margin-top: 20px;float: left;">
    <br>
  <a href="viewappointment.php" style="color:Darkblue;font-size: 25px;text-decoration: none;">&nbsp;See your appointments</a>
  <p style="margin-left: 105px;text-align: justify;margin-right: 5px;">
    
  See your appointments with patients and parient details.
  </p>
  </p>
  <p><img src="C:\Users\Nishant\Desktop\message.png" width="90px" height="85px" style="margin-left: -90px;margin-top: 20px;float: left;">
    <br>
  <a href="viewmessages.php" style="color:Darkblue;font-size: 25px;text-decoration: none;">&nbsp;See your messages</a>
  <p style="margin-left: 105px;text-align: justify;">
    See the messages from your patients.
  
  </p>
  </p>
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