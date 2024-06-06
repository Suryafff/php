<?php

// Cookies in php
// Cookies are used to store the user credinatals in browser which slightly fasten the site 

//A cookie is created with the setcookie() function.

//syntax of ccokies
//setcookie(name, value, expire, path, domain, secure, httponly);
 //only one(name) parameter is required and all are optional
//

// setcookie("name","suraj",time()+30);
//whenever time is not set it expiry wil same as session;

$cookie_name ="alive";
$cookie_value ="suraj";
$cookie_name1 ="dead";
$cookie_value1 ="code";

//setcookie($cookie_name,$cookie_value,time()+100);
//setcookie($cookie_name1,$cookie_value1);

if(isset($_COOKIE["alive"]))
{
    echo "cookie succesfully set";
    echo "<br>";
    echo "<br>";
}

?>
<html>
    <head></head>
    <body>
        <form action="" method="post">
<!-- //html input for adding delete a cookie -->
<input type="text" name="username" id="">
<br>
<br> 

<button name="button" value="add"> add cookie</button>
<br><br>
<button value="delete" name ="button">delete cookie</button>
</form>
    </body>
</html>


<?php
if(isset($_POST)){
    if($_POST["button"]=="add")
    {
        $val =$_POST['username'];
        echo $val;
        setcookie("username",$val);
    }
    if($_POST['button']=="delete")
    
    {
        if(isset($_COOKIE["username"]))
        setcookie('username',null,time()-3600);
    }
}



?>




















