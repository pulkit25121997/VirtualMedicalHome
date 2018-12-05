<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/signin.css" >
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
  <a href="#home">Home</a>
  <a href="#news">Services</a>
  <a href="#">Contact Us</a>
  <a href="#">AboutUs</a>
  <a href="#" style="margin-left: 750px">SignIn</a>
  <a href="#"  >Logout</a>
</div>
<h1 align="center">SignIn</h1>
  <div style="display: flex;">
      <div style="width:60%;height:400px;float: left;">
          <img  src="images/44.jpg" align ="left" style="width:90%;height:400px;margin-left: 20px;border-radius: 7px;" >
      </div>
      <div style="width:40%;height:400px;margin-top: 130px" >
       <form action="signinscript.php" method="post">
        <fieldset style="color: solid red">
          <legend style="color: solid red"><b >Enter details</b></legend><br>
              <table>
                  <tr>
                    <td>Username:</td>
                    <td><input type="text" /*pattern=".{6,12}"*/ placeholder="username" name="username" size="25" title="Username should be 6-12 characters long!" 
                         style="font-size:20px; border-radius: 5px;" required></td>
                  </tr>
                  <tr>
                    <td>Password:</td>
                    <td><input type="password" /*pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*()_-]).{6,10}" */ placeholder="password" name="password" size="25" 
                         title="Password should be 6-10 characters long and must contain one lowercase,one uppercase,one numeric and one special character" style="font-size:20px; border-radius: 5px;" required>
                       </td>
                  </tr>
                  <tr>
                    <td><input value="Login" type="submit" name="sign_user" namstyle="font-size:20px;margin:10px; border-radius: 5px;" ></td>
                    <td><input type="reset" style="font-size:20px;margin:10px;border-radius: 5px "></td>
                  </tr>
              </table>
          <fieldset>
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
