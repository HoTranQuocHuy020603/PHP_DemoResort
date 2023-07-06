<?php include "../../config/connection/Dbcon.php";
global $con; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($con, "select * FROM user WHERE id= $id");


    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    $isAdmin = $row['isAdmin'];
    $isEmployee = $row['isEmployee'];
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $isAdmin = $_POST['isAdmin'];
    $isEmployee = $_POST['isEmployee'];
    $result = mysqli_query($con, "update `user` set `password` ='$password', isAdmin='$isAdmin',
    isEmployee='$isEmployee' where id='$id';");
    if($result){
        
        header('location:../../pages/account/ListAccount.php');
        
        ob_end_flush();
        
        
    }
}
?>