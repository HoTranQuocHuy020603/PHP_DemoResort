<?php include "../../config/connection/Dbcon.php";
global $con; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($con, "select * FROM `employee` WHERE id= $id");


    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $phonenumber = $row['phonenumber'];
    $gender = $row['gender'];
    $position = $row['position'];
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    $result = mysqli_query($con, "update `employee` set `firstname` ='$frstname', `lastname` ='$lastname',
    `email`='$email',
    `phonenumber`='$phonenumber',`gender`= '$gender',`position`= '$position' where id='$id';");
    if($result){
        
        header('location:../../pages/employee/ListEmployee.php');
        
        ob_end_flush();
        
        
    }
}
?>