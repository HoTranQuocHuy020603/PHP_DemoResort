
<?php if (isset($_SESSION['isAdmin'])  == true ) {
    $isAdmin = $_SESSION['isAdmin'];
    if($isAdmin == true){?>
    <li class="nav-item"><a class="nav-link" href="pages/account/ListAccount.php">Account</a></li>
<?php } } ?>
<li class="nav-item"><a class="nav-link" href="pages/employee/ListEmployee.php">Employee</a></li>
<li class="nav-item"><a class="nav-link" href="pages/customer/ListCustomer.php">Customer</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">

</span><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ""; ?><span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li class="nav-item"><a class="nav-link" href="login.php?act=logout">
        Logout</a></li>
    </ul>
</li>