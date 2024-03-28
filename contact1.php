<?php
$conn = mysqli_connect('localhost','root','','hotel');

if(isset($_POST['book'])){
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  

  $sql = "INSERT INTO contact VALUES(null,'$name','$email','$message')";

  if(mysqli_query($conn,$sql)){
      echo "<script>alert('New record created successfully');
      </script>";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}


?>
<!DOCTYPE html>
<html>
<title>Hotel Booking</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="signup.php" class="w3-bar-item  w3-button w3-red w3-mobile">Sign Up</a>
  <a href="login.php" class="w3-bar-item  w3-button w3-red w3-mobile">Log In</a>
  <a href="about1.php" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="contact1.php" class="w3-bar-item w3-button w3-mobile">Contact</a>
  
</div>

  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Saddar, Karachi<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +923932549921<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: KnightInn@gmail.com<br>

    <form action="contact1.php" method="POST">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="name" placeholder="Name" required ></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="email" placeholder="Email" required ></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="message" placeholder="Message" required ></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit" name="book">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Designed by <b class="w3-hover-text-green">Muhammad Hammad</b></p>
</footer>




</body>
</html>