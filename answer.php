<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname="suraj";

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if($_REQUEST){
    $firstname = $_REQUEST['firstname'];
    $lastname= $_REQUEST['lastname'];
    $email= $_REQUEST['email'];
    $rdate= $_REQUEST['rdate'];
    $pass=$_REQUEST['pass'];


$sql = "INSERT INTO name (firstname, lastname, email,reg_date,password)
VALUES ('$firstname','$lastname' ,'$email','$rdate','$pass')";

if ($conn->query($sql) === TRUE) {
  echo "<br>";
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>