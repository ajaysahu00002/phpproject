<?php include_once('header.php'); ?>



<section class="viewdetails">
    <?php 
    echo $customer_details = $_GET['customer_id'];
    
    echo $sql = "SELECT * FROM student_details where id ='".$customer_details."'";

    $result = mysqli_query( $connection,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo  $row["id"] ." ". $row["student_name"] ." ".$row["father_name"];
   
    }
}
 else {
    echo "0 results";
}
$connection->close();
   
    ?>
 
</section>

<?php include_once('footer.php');?>
