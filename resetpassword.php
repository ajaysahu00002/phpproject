 <?php
 session_start();
 require "header.php";
 include "database.php";
 
 $detidfromsession = $_SESSION['userid'];
 if(!empty($detidfromsession)){
echo "<form method='POST' action=".$_SERVER['PHP_SELF']."></br></br></br>";
echo "old password:<input type='text' name='oldpswd' placeholder='Current password'></br></br></br>";
echo "Newpassword:<input type='text' name='newpswd' placeholder='new password'></br></br></br>";
echo "renternew password:<input type='text' name='connewpswd' placeholder='Reenter new password'></br></br></br>";
echo  "<input type='submit' value='reset' name='reset'></br>";
echo "</form>";
if(isset($_POST['reset']))
{
 echo $oldpassword = md5($_POST['oldpswd']);
$newpassword = md5($_POST['newpswd']);
$comnewpassword = md5($_POST['connewpswd']);
echo   $sql = "SELECT student_password from student_details where  id='$detidfromsession'";
$selectdbpassword = mysqli_query($connection,$sql);
 
        while($row = mysqli_fetch_assoc($selectdbpassword)){
               $oldepassdb = $row['student_password'];

               if($oldepassdb == $oldpassword){

                echo $sql = "UPDATE student_details set student_password '$newpassword' where student_password= $oldpassword && id = '$detidfromsession'";
                    echo "password changed successfully";
               }
               else{
                   echo "Current Password is not Matched";
               }
        }
      
 
}

 
 }
 else{
     header("location:login.php");
 }
 ?>