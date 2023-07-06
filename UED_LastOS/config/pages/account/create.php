<?php include "../../config/connection/Dbcon.php";
global $con; ?>

<?php

if ($_POST) {
     $username = $_POST['username'];
     $password = $_POST['password'];
     $isAdmin = $_POST['isAdmin'];
     $isEmployee = $_POST['isEmployee'];
     $result = mysqli_query($con, "select * from user where username='$username'");
     $row = mysqli_fetch_assoc($result);

     if (!$row) {
          $rs = mysqli_query($con, "insert into  `user` (`username`,`password`,isAdmin,isEmployee) 
          VALUES ('$username','$password','$isAdmin','$isEmployee');");
          echo '<p class="text-success">Add is success !!!</p>';
          
          
     } else {
         
          echo '<p class="text-danger">Having username !!!</p>';
     }
}
?>