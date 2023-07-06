<?php include "../../config/connection/Dbcon.php";
global $con;
?>

<?php

if (isset($_POST['submit'])) {
    $srch = $_POST['txtSearchValue'];
    $result = mysqli_query($con, "select * FROM `customer` where 
       `firstname` like '%$srch%' 
    or `lastname` like '%$srch%' 
    or `email` like '%$srch%' 
    or `phonenumber` like '%$srch%'
    or `gender` like '%$srch%' ;"); 

}else{  $srch = null;
		$result = mysqli_query($con, "select * from customer"); }?>

