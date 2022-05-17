<?php 
include_once ('header.php');

?>

<section class="deletedata">
    <?php
     echo $customer_details = $_GET['id'];
echo $sql = "DELETE  FROM student_details where id = '".$customer_details."'";
$result = mysqli_query( $connection,$sql);


if ($result) {
    echo "not delete";
    header('Location: select_data.php');
}
else{
    echo "data delete";
}

$connection->close();
   
    ?>


</section>
<?php include_once ('footer.php') ?>

