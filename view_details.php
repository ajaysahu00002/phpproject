<?php include_once('header.php'); ?>



<section class="viewdetails">
    <?php 
    echo $customer_details = $_GET['customer_id'];
    
     $sql = "SELECT * FROM student_details where id ='".$customer_details."'";

    $result = mysqli_query( $connection,$sql);

if ($result->num_rows > 0) {
    // output data of each row

?>
<table border="1" bgcolor="#efefef" cellspacing="0" >
<tr>
  <th class="manage">id</th>
  <th class="manage">student_name</th>
  <th class="manage">father_name</th>
  <th class="manage">email_id</th>
  <th class="manage">password</th>
  <th class="manage">phone_number</th>
  <th class="manage">student_adderss</th>
  <th class="manage">student_subject</th>
  <th class="manage">gender</th>
  <th class="manage">student_time</th>
  <th class="manage">your_opinion</th>
  <th class="manage">select_area</th>
  <th class="manage">student_profile</th>
  <th class="manage">Action</th>
</tr>
<?php
    while($row = $result->fetch_assoc()) { ?>
        <td><?php   echo $row['id']; ?></td>
        <td><?php    echo $row['student_name']; ?></td>
<td><?php    echo $row['father_name']; ?></td>
<td><?php    echo $row['email_id'] ; ?></td>
<td><?php    echo $row['student_password'] ; ?></td>
<td><?php    echo $row['phone_number'] ; ?></td>
<td><?php    echo $row['student_adderss'] ; ?></td>
<td><?php    echo $row['stdudent_subject'] ; ?></td>
<td><?php    echo $row['gander'] ; ?></td>
<td><?php    echo $row['student_time'] ; ?></td>
<td><?php    echo $row['your_opinion'] ; ?></td>
<td><?php    echo $row['select_area'] ; ?></td>
<td><img style="width:100px; padding:10px;" src="image/<?php echo $row['student_profile'] ; ?>" alt="user profile" /></td>

   <?php }
    ?>
   
  
  <?php
}
 else {
    echo "0 results";
}
$connection->close();
   
    ?>
 
</section>

<?php include_once('footer.php');?>
