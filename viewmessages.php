<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}
table, th, td {
    border-collapse: collapse;
}
.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  color: white;
}

.fa-twitter {
  color: white;
}

.fa-google {
  color: white;
}

.fa-linkedin {
  color: white;
}

.fa-youtube {
  color: white;
}

.fa-instagram {
  color: white;
}
</style>
<style type="text/css">
      h1,h3
      {
        color:white;
        font-family:Ink Free;
        color: green;
        
      }
      p{
      	color: green;
      	font-size: 18px;
      }
       
    </style>
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
  <div style="margin-left: 50px;width: 800px;height: 600px;box-shadow: 0px 0px 10px 2px lightblue;border:10px solid lightblue;">
    <img src="C:\Users\Nishant\Desktop\21.jpg" height="580px" width="780px">
    <div style="position: absolute;top: 400px;left:200px;background-color: seagreen;color: white;padding-left: 20px;padding-right: 20px;padding-top: 10px;">
      <table>
      <tr><td><input  style="color: black;width: 80px;"type="text" name="user" placeholder="User name"></td><td><textarea style="color: black;" name="usercomment"> hey I have problem in my back.</textarea></td>
        <td><input  style="color: black;width: 80px;"type="text" name="doctor" placeholder="your reply" readonly=""></td>
        <td><textarea style="color: black;" name="doctorcomment"> hey I have problem in my back.</textarea></td><td><input style="color:black;" type="button" name="REPLY" value="REPLY"></td></tr>
        <tr><td><input  style="color: black;width: 80px;"type="text" name="user" placeholder="User name"></td><td><textarea style="color: black;" name="usercomment"> hey I have problem in my back.</textarea></td>
        <td><input  style="color: black;width: 80px;"type="text" name="doctor" placeholder="your reply" readonly=""></td>
        <td><textarea style="color: black;" name="doctorcomment"> hey I have problem in my back.</textarea></td><td><input style="color:black;" type="button" name="REPLY" value="REPLY"></td></tr>
        <tr><td><input  style="color: black;width: 80px;"type="text" name="user" placeholder="User name"></td><td><textarea style="color: black;" name="usercomment"> hey I have problem in my back.</textarea></td>
        <td><input  style="color: black;width: 80px;"type="text" name="doctor" placeholder="your reply" readonly=""></td>
        <td><textarea style="color: black;" name="doctorcomment"> hey I have problem in my back.</textarea></td><td><input style="color:black;" type="button" name="REPLY" value="REPLY"></td></tr>
        <tr><td><input  style="color: black;width: 80px;"type="text" name="user" placeholder="User name"></td><td><textarea style="color: black;" name="usercomment"> hey I have problem in my back.</textarea></td>
        <td><input  style="color: black;width: 80px;"type="text" name="doctor" placeholder="your reply" readonly=""></td>
        <td><textarea style="color: black;" name="doctorcomment"> hey I have problem in my back.</textarea></td><td><input style="color:black;" type="button" name="REPLY" value="REPLY"></td></tr>
    </table>
    </div>
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