<?php
$insert = false;
if(isset($_POST['name'])){
$servername = "localhost";
$username = "root";
$password = "Swapnil@8080"; // Leave empty for XAMPP default
// $dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$name= $_POST['name'];
$course= $_POST['course'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$sql = "INSERT INTO `portfolio`.`contact` (`name`, `course`, `email`, `phone`, `dt`) VALUES ('$name', '$course',
  '$email', '$phone', current_timestamp());";
//   echo $sql;

  if($conn->query($sql)==true)
  {
    echo "Successfully inserted";
    $insert = true;
  }
  else{
    echo "ERROR: $sql <br> $conn->error";
  }

  $conn->close();
}
?>

