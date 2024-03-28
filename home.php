<?php
include "hotel_backend.php";
?>

<!DOCTYPE html>
<html>
<title>Knights INN Hotel</title>
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
  <a href="rooms.php" class="w3-bar-item w3-button w3-mobile">Rooms</a>
  <a href="about.php" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-mobile">Contact</a>
  <a href="login.php" class="w3-bar-item w3-button w3-right w3-blue w3-mobile">Log Out</a>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="hotel.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
  <div  class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i>Knights INN</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">

      <form action="home.php" method="POST">

      <div class="w3-row-padding" style="margin:0px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-user"></i> Client Name</label>
            <input class="w3-input w3-border" type="text" placeholder="Your Name" name="name" required>
          </div>

          <div class="w3-half">
            <label><i class="fa fa-phone"></i> Contact Number</label>
            <input class="w3-input w3-border" type="tel" placeholder="Your Contact" name="contact" required>
          </div>
        </div>

        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="check_In" required>
          </div>

          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="check_Out" required>
          </div>
        </div>

        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-bed"></i> Rooms</label>
            <input class="w3-input w3-border" type="number" value="1" name="rooms" min="1" max="6">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-child"></i> Category</label>
          <!--<input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">-->
          <select class="w3-input w3-border" name='category'>
            <option value="Single Bed">Single Bed</option>
            <option value="Double Bed">Queen-size bed</option>
            <option value="King Size Bed">King Size Bed</option>
          </select>
          </div>
        </div>
        <button class="w3-button w3-black" type="submit" name="book">
          <i class="fa fa-search w3-margin-right"></i> Book Room</button>
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