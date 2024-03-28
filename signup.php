<?php
$conn = mysqli_connect('localhost','root','','hotel');

if(isset($_POST['signup'])){
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  
  $query2 = "SELECT * FROM signup WHERE email='$email'";
  $sql2 = mysqli_query($conn, $query2);
			if($sql2==null){
				echo "<script>alert('User Already Exists !')</script>";
			}else{

      $sql = "INSERT INTO signup VALUES(null,'$name','$email','$password','$phone','$city')";

      if(mysqli_query($conn,$sql)){
      header('Location: login.php');
    }else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}
?>

<!DOCTYPE html>
<html>
<title>Knights INN </title>
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

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="signup.jpg" alt="The Hotel"  width="1500" height="800">
  <div style="margin-left:27%" class="w3-display-left w3-padding w3-col l6 ">
  
    <div  class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i>Knights INN (Sign Up Form)</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="signup.php" method="POST">
      <div class="w3-row-padding" style="margin:0px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-user"></i> Client Name</label>
            <input class="w3-input w3-border" type="text" placeholder="Your Name" name="name" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-envelope"></i> Email Address</label>
            <input class="w3-input w3-border" type="email" placeholder="Email Here" name="email" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-key"></i>Password</label>
            <input class="w3-input w3-border" type="Password" placeholder="Password" name="password" required>
          </div>

          <div class="w3-half">
            <label><i class="fa fa-phone"></i>Phone Number</label>
            <input class="w3-input w3-border" type="tel" placeholder="Phone Number" name="phone" required>
          </div>
        </div>

        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-map"></i> City</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter your City" name="city" required >
          </div>
        <br>
        <button style="margin-left:10px" class="w3-button w3-black" type="submit" name="signup">
          <i  class="fa fa-search w3-margin-right"></i> Sign Up</button>
      </form>
    </div>
  </div>
</header>

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