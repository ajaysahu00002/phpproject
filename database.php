
<?php

//db conection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student"; 
//creat conection

 
$connection= new mysqli($servername, $username, $password, $dbname);
//check conection


if ($connection->connect_error) {
     die("connection flaied" . $connection->connect_error);
}

else {
    //echo "successsful connection";
    }


   
?>