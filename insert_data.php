<?php
 
 
 
 require "database.php";
 if (isset($_POST['register'])) {
  //taking values from the form data(input)
 $fullnam = $_POST['name'];
 $fathername = $_POST['fathername'];
 $email = $_POST['email'];
 $password = md5( $_POST['password']);
    $phonenumber = $_POST['number'];
$address = $_POST['address'];
$dd3 = implode(',', $_POST['ajay']);
$gender = $_POST['radio'];
$time = $_POST['time']; 
$select = $_POST['list'];
$opinion = $_POST['write'];




$randomnumber = rand();
 $upload_folder = "image/";
 $filename = $_FILES["banner"]["name"];
 $explodefile = explode(".", $filename);
$bannerexptype = $explodefile[1];
 $photoname = $explodefile[0];

 $storenamewithrandom = $photoname.$randomnumber ;
  $bannername= $storenamewithrandom.'.'.$bannerexptype;
 $tempname = $_FILES['banner']['tmp_name'];
 $file_location = $upload_folder . $bannername ;


 if($bannerexptype=='jpg' || $bannerexptype=='jpeg' || $bannerexptype=='png' || $bannerexptype=='gif')
{
 move_uploaded_file($tempname, $file_location);
// echo "File is image <br/>";
//echo "File type = " .$bannerexptype;

} 
else
{
echo "<h2 style='color:red'>File is not image</h2>";
}

if($fullnam !="" && $fathername !="" && $email !="" && $password !="" && $phonenumber !="" && $address !="" && $dd3 !="" && $gender !="" && $time !="" && $select !="" && $opinion !="")
{                     
  
 $sql = "INSERT INTO student_details (student_name, father_name, email_id, student_password, phone_number, student_adderss,stdudent_subject,gander,`student_time`, select_area , your_opinion, student_profile) VALUES ('$fullnam', '$fathername', '$email', '$password', '$phonenumber','$address','$dd3','$gender','$time','$select','$opinion','$bannername')";



if (mysqli_query($connection,$sql))
{
echo "<script>alert('<h2 style=color:green>entry successfull registered</h2>')</script>";
}


else {
// echo "entry unsuccessfull";
mysqli_error($connection);
}





} 
else {

if($fullnam =="")
{
echo "name required";
}
if($fathername =="")
{
echo "name required";
}
if($email =="")
{
echo "name required";
}
if($password =="")
{
echo "name required";
}
if($phonenumber =="")
{
echo "name required";
}
if($address =="")
{
echo "name required";
}
if($dd3 =="")
{
echo "name required";
}
if($gender =="")
{
echo "name required";
}
if($time =="")
{
echo "name required";
}
if($select =="")
{
echo "name required";
}
if($opinion =="")
{
echo "name required";
}

} 

   
}       

//mysqli_query($connection,$sql);   
mysqli_close($connection);

                                            //fetch data feom database or select


?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
