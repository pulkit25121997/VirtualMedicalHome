 <?php
session_start();
$db = mysqli_connect('localhost', 'pulkit', 'pulkit', 'new');
if(!isset($_SESSION["username"]))
{
header('location: signin.php');
}
else
{
$query = "SELECT * FROM appointment WHERE doctor='".$_SESSION["username"]."'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) > 0)
    {
      echo "Hello World";
    }
   /* $row = mysqli_fetch_assoc($results) ; 
    $name= $row["name"] ;
    $speciality = $row["speciality"] ; 
    $contact = $row["contact"] ; 
*/
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
/*$docid=$_SESSION["username"];
$sql = " SELECT * FROM appointments WHERE doctor='".$_SESSION["username"]."'";
$result = $db->query($sql);
if($result->num_rows > 0)
{
  echo "hello world";
}*/
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
<link rel="stylesheet" href="css/viewappointment.css">
</head>
<body style="background-color:#333;">
<div class="jumbotron text-center" style="background-color: #e6ffe6" >
  
  <h2>Welcome To Virtual Medical Home</h2>
  <p>Online Medical Services</p> 
</div>
<div class="navbar" style="margin-top: -30px; background-color: blue;">
  <a href="#home">Home</a>
  <a href="#news">Services</a>
  <a href="#">Contact Us</a>
  <a href="#">AboutUs</a>
  <a href="#" style="margin-left: 750px">LogIn</a>
  <a href="#"  >Logout</a>
</div>
  <h1 style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your appointments for today</h1>
    <div style="margin-left: 10px;margin-top: 15px;">
      <table style="color: white;" width="800px" height="400px">
        <tr>
          <th style="font-size: 20px;">Patient's Name</th>
          <th style="font-size: 20px;">Date of Appointment</th>
          <th style="font-size: 20px;">Gender</th>
          <th style="font-size: 20px;">Contact</th>
          <th style="font-size: 20px;">Comments</th>;
        </tr>
        <?php
        $query = "SELECT * FROM appointment WHERE doctor='".$_SESSION["username"]."'";
          $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) > 0)
          {
        echo "Hello World";
          }

        while($row = mysqli_fetch_assoc($results)) {
        echo "<tr>
          <th style=\"font-size: 20px;\">". $row["name"]. "</th>
          <th style=\"font-size: 20px;\">".$row["doa"]."</th>
          <th style=\"font-size: 20px;\">".$row["gender"]."</th>
          <th style=\"font-size: 20px;\">".$row["contact"]."</th>
          <th style=\"font-size: 20px;\">".$row["comment"]."</th>
        </tr>" ;
        }  
        ?>
        <!--<tr>
          <td style="font-size: 15px;">Nishant</td>
          <td style="font-size: 15px;">Padhi</td>
          <td style="font-size: 15px;">nishantpadhi2015@gmail.com</td>
          <td style="font-size: 15px;">Male</td>
          <td style="font-size: 15px;">10 A.M-11 A.M</td>
        </tr>
        <tr>
          <td style="font-size: 15px;">Nishant</td>
          <td style="font-size: 15px;">Padhi</td>
          <td style="font-size: 15px;">nishantpadhi2015@gmail.com</td>
          <td style="font-size: 15px;">Male</td>
          <td style="font-size: 15px;">10 A.M-11 A.M</td>
        </tr>
        <tr>
          <td style="font-size: 15px;">Nishant</td>
          <td style="font-size: 15px;">Padhi</td>
          <td style="font-size: 15px;">nishantpadhi2015@gmail.com</td>
          <td style="font-size: 15px;">Male</td>
          <td style="font-size: 15px;">10 A.M-11 A.M</td>
        </tr>
        <tr>
          <td style="font-size: 15px;">Nishant</td>
          <td style="font-size: 15px;">Padhi</td>
          <td style="font-size: 15px;">nishantpadhi2015@gmail.com</td>
          <td style="font-size: 15px;">Male</td>
          <td style="font-size: 15px;">10 A.M-11 A.M</td>
        </tr>
        <tr>
          <td style="font-size: 15px;">Nishant</td>
          <td style="font-size: 15px;">Padhi</td>
          <td style="font-size: 15px;">nishantpadhi2015@gmail.com</td>
          <td style="font-size: 15px;">Male</td>
          <td style="font-size: 15px;">10 A.M-11 A.M</td>
        </tr>
        <tr>
          <td style="font-size: 15px;">Nishant</td>
          <td style="font-size: 15px;">Padhi</td>
          <td style="font-size: 15px;">nishantpadhi2015@gmail.com</td>
          <td style="font-size: 15px;">Male</td>
          <td style="font-size: 15px;">10 A.M-11 A.M</td>
        </tr>-->s
      </table>
    </div>                         
        <div style="width:100%;height:100px">                                               
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