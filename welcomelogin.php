<?php
session_start();
 require "header.php"; 

if(!empty($_SESSION['userid']))
{

echo $_SESSION['userid'];
echo  $emaiolsessin = $_SESSION['email'];
echo $passsessin = $_SESSION['userpassword'];

echo '<a href="logout.php">logout</a>';
}
else{
    header("location:login.php");
}

 echo "<h1><a href='resetpassword.php'>resert password</a></h1>";



?>
