<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="discription" content="Free Web Tutorial">
    <meta name="ketword" content="THML,CSS,Javascript">
    <meta name="author" content="Jhon Doe">
    <link rel="stylesheet" type="text/css" href="assets/stylecss/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <title>login</title>
</head>


<body>
   <div class="container">
   <div class="loginarea">
   <div class="heading"><h1>login-form</h1></div>

   <form action="" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email_id_user" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label><div class="forgetpassword"><a href="#">forget password</a></div>
    <input type="password" class="form-control" name="pswd" placeholder="Enter password" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>
      
<?php
session_start();

if(isset($_POST['login'])){
 include "database.php";
$useremail = $_POST['email_id_user'];
$pass = md5($_POST['pswd']);
 $sql = "SELECT  `id`, `email_id` ,`student_password` from student_details where `email_id`='$useremail' && `student_password`='$pass'";
$logindetails = mysqli_query($connection,$sql);



if(mysqli_num_rows($logindetails) > 0){

  while($select = mysqli_fetch_assoc($logindetails)){
  
  $id = $select['id'];
  echo $id = $_SESSION['userid'] = $id;
  echo  $emaiolsessin = $_SESSION['email'] = $useremail;
   echo $passsessin = $_SESSION['userpassword'] = $pass;
  
  }
  header("Location: welcomelogin.php");
 
}
else{
  echo "feild not matched";
}
}
 



?>
       </div>
   </div> 
  
</body>
</html>