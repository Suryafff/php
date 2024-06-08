<?php 

// what is session;

//session are away to store the user data ona the server which can render across the differnt pages

// unlike the cookie it doesn`t store dT on user computer

//session are acess on the top of the page with function 
//session start();

session_start();

$_SESSION["name"] ="suraj";
$_SESSION["marks"]="785";

// session can be resert in between;


print_r($_SESSION);
echo "<br>";


echo "session is set";
echo "<br>";

echo $_SESSION['name'];
echo "<br>";
echo "marks is".$_SESSION['marks'];

// to unset the session variable use session_unset();
session_unset();
 echo "<br>";

echo $_SESSION['name'];
echo "<br>";
echo "marks is".$_SESSION['marks'];

// to destroy the session use session_destroy();
session_destroy();
echo "<br>";

echo $_SESSION['name'];
echo "<br>";
echo "marks is".$_SESSION['marks'];
//all this give a error;

//uses of session
// allows the server to keep track of information such as the user's login status, preferences, and any data entered into forms.
?>