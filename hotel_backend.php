<?php
$conn = mysqli_connect('localhost','root','','hotel');

if(isset($_POST['book'])){
  
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $check_In = $_POST['check_In'];
  $check_Out = $_POST['check_Out'];
  $rooms = $_POST['rooms'];
  $category = $_POST['category'];

  $sql = "INSERT INTO booking VALUES(null,'$name','$contact','$check_In','$check_Out','$rooms','$category')";

  if(mysqli_query($conn,$sql)){
      echo "<script>alert('Your Room Booked Successfully');
      </script>";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>




