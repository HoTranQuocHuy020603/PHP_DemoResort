<?php include "config/connection/Dbcon.php" ;
global $con;?>

<?php 
session_start(); 

if(isset($_GET['act']) && $_GET['act'] == 'logout'){
     unset($_SESSION['username']);  
  }

if ($_POST){
   $username = $_POST['login-username'];
   $password = $_POST['login-password'];
   $result = mysqli_query($con,"select * from user where username='$username' and password ='$password'");
   $row = mysqli_fetch_assoc($result);

   if($row){
     $_SESSION['username'] = $row;
     $_SESSION['username'] = $username;
     $_SESSION['isAdmin'] = $row['isAdmin'];
     $_SESSION['isEmployee'] = $row['isEmployee'];
     header("Location:index.php");

   }else{

        echo '<p class="text-danger">Wrong username or pass !!!</p>' ;
         
   }

}
?>