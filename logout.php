<<<<<<< HEAD

<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:login.php"); //to redirect back to "index.php" after logging out
exit();
?>
=======
<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php');
?>
>>>>>>> ff589adc7680ffd2fe191cab501db5425a001536
