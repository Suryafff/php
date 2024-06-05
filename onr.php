<?php
//vedio src=1-59;

// In get request the entered input values are visible on address bar for all  by default method is get
// if($_GET){
//     echo "submiited successfully";
// }


// In post request the enterd input values are not visible on adress bar for user it is safe
// if($_POST){
//   echo  "method submiited through post";
//   echo "<br>";
//}

// Request method is used because if you don`t know what the method of form coming through html
// if($_REQUEST){
//     echo "methodd is request";
// }


//for extracting values from form
//$ write method name
//write name of name provided in input feild


// if($_REQUEST)
// {
//     echo $_REQUEST['username'];
//     echo $_REQUEST['password'];
// }

// if($_REQUEST)
// {
//     echo "username is :- " .$_REQUEST['username'];
//     echo "<br>";
//     echo "<br>";
//     echo "password is :- " .$_REQUEST['password'];
//     echo "<br>";
//     echo "email is :- " .$_REQUEST['email'];
// }

// print_r(method name) function is used to print all input feild in array format
 if($_REQUEST)
{
    print_r($_REQUEST);
    echo "<br>";
    echo "<br>";
    print_r($_FILES);
    echo "<br>";
    echo "<br>";
}


// for file upload
if($_FILES['fileees']){

$path= $_FILES['fileees']['name'];//it is a multidemisnoal array which aceepts name
$upload_path ="./imagesupload/".$path;
 move_uploaded_file($_FILES['fileees']['tmp_name'],$upload_path) || die("failed to excute");
//it is a multidemisnoal array which aceepts name and second argument is tmp_name and also requries upload path.
}

// Adding onclick on button
if(isset($_REQUEST['btn'])){
    btnclick();
}

function btnclick(){
    echo "button clicked";
}
// isset check the value of a html....
//for each loops in php

$abc=["sam"=>"36","ram"=>"45","piyus"=>"56","ayush"=>"21"];

foreach($abc as $x =>$y){
    echo "<br>";
    echo "$x:$y";
    echo "<br>";
    echo "<br>";
}

?>