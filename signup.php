<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/signup.css" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="jumbotron text-center" >
  
  <h2>Welcome To Virtual Medical Home</h2>
  <p>Online Medical Services</p> 
</div>
<div class="navbar" style="margin-top: -30px;">
  <a href="index.php">Home</a>
  <a href="services.php">Services</a>
  <a href="contact.php">Contact Us</a>
  <a href="about.php">AboutUs</a>
  <a href="signin.php" style="margin-left: 750px">SignIn</a>
</div>
<h1 align="center">SignUp</h1>
  <div style="display: flex;">
      <div style="width:60%;height:400px;float: left;">
          <img  src="images/33.jpg" align ="left" style="width:90%;height:400px;margin-left: 20px;border-radius: 7px" >
      </div>
    
<div >
<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'] ;  
  }
?>
  <form action="signupscript.php" method="post">
  <table>
    <tr>
        <th>Name:</th>
        <td><input type="text" name="name" pattern="[a-z A-Z].{1,}" placeholder="first name" title="First name should contain
             only alphabets!" style="font-size:16px;border-radius: 5px;" size="30" required></td>
    </tr>
    <tr>
        <th>Date of birth:</th>
        <td><input type="date" name="dob" max="2019-01-01" min="1996-01-01" title="Age should be 16-22 years as on 1st January,2018!" style="border-radius: 5px;" required></td>
    </tr>
    <tr>
        <th>Email:</th>
        <td> <input type="emaii" name="eid" placeholder="email" style="font-size:16px;border-radius: 5px;" size="30" required> </td>

    </tr>
    <tr>
        <th>Gender:</th>
        <td> <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="female" required>Female </td>

    </tr>
    <br>
    <tr>
        <th>Mobile number:</th>
        <td> <input type="text" name="contact" title="Mobile number should be
               10 digits long!" placeholder="mobile no." pattern="[0-9]{10}" size="30" style="font-size:16px;border-radius: 5px;" required> </td>
    </tr>
    <tr>
        <th>Address:</th>
        <td> <input type="text" name="address" placeholder="address" size="30" style="font-size:16px;border-radius: 5px;" required> </td>

    </tr>
  <tr>
      <th>City:</th>
      <td> <input type="text" name="city" placeholder="city" style="font-size:16px;border-radius: 5px;" size="30" required></td>
  </tr>
  <tr>
      <th>Pincode:</th>
      <td> <input type="text" name="pincode" pattern="[0-9]{6}" title="Pincode should be 6 digits
             long!" placeholder="pincode" pattern="[0-9]{6}" style="font-size:16px;border-radius: 5px;" size="30" required> </td>

  </tr>
  <tr>
      <th> Username: </th>
      <td> <input type="text" name="username" placeholder="Username" style="font-size:16px;border-radius: 5px;" size="30" required> </td>

  </tr>
  <tr>
      <th> Password: </th>
      <td> <input type="password" name="password" placeholder="password" style="font-size:16px;border-radius: 5px;" size="30" required> </td>

  </tr>
  </table>
  <br>
  <input type="submit" value="Submit" name="register_user" style="padding:4px;margin:4px 60px;border-radius: 5px;">
  
  <input type="reset" value="Reset" style="padding:4px;margin:4px 60px;border-radius: 5px;">
</form>
</div>
  </div>                                    
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
