<?php
 
include 'database.php';
?>

<section class="updatearea">
<form action="" method="post" enctype="multipart/form-data">
			    					<div >
			               student_name: <input type="text" name="name"  placeholder="First Name">
			    					</div>
			    				<div>
			    					father's_name:	<input type="text" name="fathername" placeholder="Last Name">
			    					</div>
			    			
			    						<div>
			    					email_id:	<input type="email" name="email"  placeholder="email_id">
			    					</div>
			    			        <div >
			    					password:	<input type="password" name="password"  placeholder="Password">
			    					</div>
                                    <div >
			    				phone_number:	<input type="number" name="number" placeholder="phone_number">
			    					</div>
                                    <div >
			    				address:	<input type="text" name="address"  placeholder="address">
			    					</div>
                                    <div>
                                        hindi: <input type="checkbox" value="hindi" name="ajay[]"> 
                                        english: <input type="checkbox" value="english" name="ajay[]"> 
                                        maths: <input type="checkbox" value="maths" name="ajay[]"> 
                                        science: <input type="checkbox" value="science" name="ajay[]"> 
                                        physics: <input type="checkbox" value="physics" name="ajay[]"> 
                                        chemistry: <input type="checkbox" value="chemistry" name="ajay[]"> 
                                    </div>
                                    <div >
			    					gender:	<input type="radio" value="male" name="radio">male
                                    <input type="radio" value="female" name="radio">fimale
                                    <input type="radio" value="other" name="radio">other
			    					</div>
                                 time:   <input type="time"  name="time">
                                   
                              <div>select_city  <select  name="list">
			    				 <option value="lucknow" name="choose">lucknow </option>
                             <option value="delhi">delhi</option>
                              <option vlaue="kanpur">kanpur</option>
                                <option value="noida">jnoida</option>
                                 </select></div>
                              <div>your_opinion <textarea rows = "3" placeholder = "Player Details" name="write"></textarea></div>
                              choose_your_file  <input type="file" name="banner"   />
 <input type="submit" value="Register" name="register" >
                           </form>	
			    	
<?php
//this is use for get values form database for update
echo $customer_detial = $_GET['update_id'];

?>
<?php 
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
    //$sql = "UPDATE student_details set id= '".$customer_detial."'";                  
  echo  $sql = " UPDATE student_details SET student_name = '$fullnam', father_name = '$fathername', email_id='$email', student_password = '$password', phone_number = '$phonenumber', student_adderss = '$address', stdudent_subject = '$dd3', gander = '$gender', student_time = '$time', your_opinion = '$select', student_profile = '$filename' WHERE id = $customer_detial";
 //$sql = "INSERT INTO student_details (student_name, father_name, email_id, student_password, phone_number, student_adderss,stdudent_subject,gander,`student_time`, select_area , your_opinion, student_profile) VALUES ('$fullnam', '$fathername', '$email', '$password', '$phonenumber','$address','$dd3','$gender','$time','$select','$opinion','$bannername')";



if (mysqli_query($connection,$sql))
{
       
header('location','select_data.php') ;
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

?>
</section> 
<?php include_once ('footer.php')  ?>



