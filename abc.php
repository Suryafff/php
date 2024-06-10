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
    $email=$_REQUEST['email'];
    $password=$_REQUEST['pass'];

    $sql = "Select * from name where email='$email' and password='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
 echo "<br>login successful<br>";
 echo $email;
    }
    else {
       echo " <br>record not found";
    }

}
?>