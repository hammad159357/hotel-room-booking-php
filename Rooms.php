<?php
include "hotel_backend.php";
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
  <a href="home.php" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-bed w3-margin-right"></i>Home</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile">Rooms</a>
  <a href="about.php" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-mobile">Contact</a>
  <a href="login.php" class="w3-bar-item w3-button w3-right w3-blue w3-mobile">Log Out</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="rooms">
    <h3>Rooms</h3>
    <p>Make yourself at home is our slogan. We offer the best beds in the industry. Sleep well and rest well.</p>
  </div>
  
  <form action="Rooms.php" method="POST">
  <div class="w3-row-padding">
  <div class="w3-col m3">
      <label><i class="fa fa-user"></i> Client Name</label>
      <input class="w3-input w3-border" type="text" placeholder="Your Name" name="name">
    </div>
    <div class="w3-col m3">
      <label><i class="fa fa-phone"></i> Contact Number</label>
      <input class="w3-input w3-border" type="tel" placeholder="Your Contact" name="contact">
    </div>
    <div class="w3-col m3">
      <label><i class="fa fa-calendar-o"></i> Check In</label>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="check_In">
    </div>
    <div class="w3-col m3">
      <label><i class="fa fa-calendar-o"></i> Check Out</label>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="check_Out">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-bed"></i> Rooms</label>
      <input class="w3-input w3-border" type="number" value="1" name="rooms" min="1" max="6">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-child"></i> Category</label>
      <!--<input class="w3-input w3-border" type="option" placeholder="0">-->
      <select class="w3-input w3-border" name="category">
        <option>Single Bed</option>
        <option>Queen-size bed</option>
        <option>King Size Bed</option>
      </select>
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-search"></i> Book Now</label>
      <button class="w3-button w3-block w3-black" name="book">Book</button>
      
    </div>
  </div>
  </form>
  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="room_single.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single Room</h3>
        <h6 class="w3-opacity">From 1000 pkr</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="room_double.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Double Room</h3>
        <h6 class="w3-opacity">From 2000 pkr</h6>
        <p>Queen-size bed</p>
        <p>25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="room_deluxe.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Deluxe Room</h3>
        <h6 class="w3-opacity">From 3000 pkr</h6>
        <p>King-size bed</p>
        <p>40m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> 
        <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
      </div>
    </div>
  </div>
  </form>

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
