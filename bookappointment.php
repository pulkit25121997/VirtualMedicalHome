<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/bookappointment.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
function showdoc(str) {
  console.log(str);
    if (str == "") {
        document.getElementById("doc").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("seldoc").innerHTML = this.responseText;
               //console.log(document.getElementById("seldoc"));
            }
        };
        xmlhttp.open("GET","getdoctor.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<div class="jumbotron text-center" style="background-image: 1.jpg">
	
  <h2>Welcome To Virtual Medical Home</h2>
  <p>Online Medical Services</p> 
</div>
<div class="navbar" style="margin-top: -30px;">
  <a href="#home">Home</a>
  <a href="#news">Services</a>
  <a href="#">Contact Us</a>
  <a href="#" style="margin-left: 750px"> Profile</a>
  <a href="#"  >Logout</a>
</div>
<h2 align="center">Book Appontment</h2><div style="width:100%;height:100px"> 
  <div style="display: flex;">
      <div style="width:60%;height:400px;float: left;">
          <img  src="images/22.jpg" align ="left" style="width:90%;height:400px; border-radius: 5px;margin-left: 20px;" >
      </div>
    
<div >
  <form method="post" action="bookingscript.php">
  <table style="border-radius: 10px;">
    <tr>
        <th> Name:</th>
        <td><input type="text" name="name" pattern="[a-z A-Z].{1,}" placeholder="first name" title="First name should contain
             only alphabets!" style="font-size:16px;border-radius: 5px;" size="30" required></td>
    </tr>
    <tr>
        <th>Date of appointment:</th>
        <td><input type="date" name="doa" style="border-radius: 5px;" required></td>
    </tr>
    <tr>
        <th>Gender:</th>
        <td> <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="female" required>Female </td>

    </tr>
    <tr>
        <th>Mobile number:</th>
        <td> <input type="text" name="mobile" title="Mobile number should be
               10 digits long!" placeholder="mobile no." pattern="[0-9]{10}" size="30" style="font-size:16px;border-radius: 5px;" required> </td>
    </tr>

  <tr><th>Specalisation:</th><td>
  <select name="specialisation" onchange="showdoc(this.value)">
  <option value="">Select a Speciality</option>
  <option value="Surgeon">Surgeon</option>
  <option value="Dentist">Dentist</option>    
  </select></td></tr>
  

  <tr><th>Doctor:</th><td>
  <select name="doctors" id="seldoc">
  <option value="">Select a Doctor:</option>
  <!-- <div id="doc">
  </div> -->
  </select></td></tr>
  <tr> <th>Comment</th>
  <td><input type="text" name="comments">
  </table>
  <br>
  <input type="submit" value="Submit" name="make_appointment" style="padding:4px;margin:4px 60px;border-radius: 5px;">
  
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
