<?php include "config/connection/Dbcon.php";
global $con; ?>

<?php

if ($_POST) {
     $username = $_POST['login-username'];
     $password = $_POST['login-password'];
     $result = mysqli_query($con, "select * from user where username='$username'");
     $row = mysqli_fetch_assoc($result);

     if (!$row) {
          $rs = mysqli_query($con, "insert into  `user` (`username`,`password`,isAdmin,isEmployee) 
          VALUES ('$username','$password',0,0);");
          echo '<p class="text-success">Singing is success !!!</p>';
          
          
     } else {
         
          echo '<p class="text-danger">Having username !!!</p>';
     }
}
?>