
<?php
                                      //db connection

              require "database.php";
              $sql= "SELECT * FROM student_details";
              $result=mysqli_query($connection,$sql);
                                //we will find how many rows in the database
           
           
              // $num = mysqli_num_rows($result);
             // echo  ($num);
              //echo "<br>";


              
             /*   $select = mysqli_fetch_assoc($result);//it is function and its called data from table step by step
                echo var_dump($select);
                echo "<br>";
              }
              if ($num>0) {
                  $select = mysqli_fetch_assoc($result);
                  echo var_dump($select);*/
                 



                  ?>
                   <table border="1" bgcolor="#efefef" cellspacing="0" >
                  <tr>
                    <th>id</th>
                    <th>student_name</th>
                    <th>father_name</th>
                    <th>email_id</th>
                    <th>password</th>
                    <th>phone_number</th>
                    <th>student_adderss</th>
                    <th>student_subject</th>
                    <th>gender</th>
                    <th>student_time</th>
                    <th>your_opinion</th>
                    <th>select_area</th>
                    <th>student_profile</th>
                    <th>Action</th>
                  </tr>
                  <tr>
                  <?php 
                  while ( $select = mysqli_fetch_assoc($result)) { ?>
           
    <td><?php    echo $select['id'] ; ?></td>
    <td><?php    echo $select['student_name'] ; ?></td>
    <td><?php    echo $select['father_name'] ; ?></td>
    <td><?php    echo $select['email_id'] ; ?></td>
    <td><?php    echo $select['student_password'] ; ?></td>
    <td><?php    echo $select['phone_number'] ; ?></td>
    <td><?php    echo $select['student_adderss'] ; ?></td>
    <td><?php    echo $select['stdudent_subject'] ; ?>3</td>
    <td><?php    echo $select['gander'] ; ?></td>
    <td><?php    echo $select['student_time'] ; ?></td>
    <td><?php    echo $select['your_opinion'] ; ?></td>
    <td><?php    echo $select['select_area'] ; ?></td>
    <td><img style="width:100px; padding:10px;" src="image/<?php echo $select['student_profile'] ; ?>" alt="user profile" /></td>
    <td><a href="view_details.php?customer_id=<?php echo $select['id']; ?>" >Customer Dtails</a>
  <a href="update_data.php?update_id=<?php echo $select['id']; ?>">update</a>
<a href="delete_data.php?delid=<?php echo $select['id']; ?>">delete</a></td>
  </tr>
   

                    
            <?php      }
              
              
?></table>
          