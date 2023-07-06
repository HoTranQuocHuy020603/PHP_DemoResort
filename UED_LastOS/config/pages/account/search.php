<?php include "../../config/connection/Dbcon.php";
global $con;
?>

<?php

if (isset($_POST['submit'])) {
    $srch = $_POST['txtSearchValue'];
    $result = mysqli_query($con, "select * FROM `user` where 
        `username` like '%$srch%' 
    or password like '%$srch%' 
    or `isAdmin` like '%$srch%' 
    or `isEmployee` like '%$srch%' ;"); 

}else{  $srch = null;
		$result = mysqli_query($con, "select * from user"); }?>

