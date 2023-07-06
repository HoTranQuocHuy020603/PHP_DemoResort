<?php include "../../config/connection/Dbcon.php";
global $con; ?>

<?php

if ($_POST) {
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $phonenumber = $_POST['phonenumber'];
     $gender = $_POST['gender'];
     $position = $_POST['position'];
     $result = mysqli_query($con, "insert into  `employee` 
     (`firstname`,`lastname`,`email`,`phonenumber`,`gender`,`position`) 
     VALUES ('$firstname','$lastname','$email','$phonenumber','$gender','$position');");

     if ($result) {

          echo '<p class="text-success">Add is success !!!</p>';
          
          
     }
}
?>