<?php
session_start();
?>
<?php
include "../../config/connection/Dbcon.php";
global $con;
$result = mysqli_query($con, "select * from user");
?>
<!Doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Page of Create Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include "../../includes/head.php" ?>
	<style>
		.jumbotron {
			background-image: url('../../image/image2.png');
			background-size: cover;
			color: #ffffff;
			padding: 100px 25px;
			margin-bottom: 0;
		}

		.bg-grey {
			background-color: #f6f6f6;
		}

		.bg-black {
			background-color: black;
		}

		.container-fluid {
			padding: 60px 50px;
		}

		.container-fluid2 {
			padding: 6px 50px;
		}

		.logo {
			font-size: 300px;
			color: green;
		}

		@media screen and (max-width: 768px) {
			.col-sm-4 {
				text-align: center;
				margin: 25px 0;
			}
		}

		.thumbnail {
			padding: 0 0 15px 0;
			border: none;
			border-radius: 0;
		}

		.bg-img {
			background-image: url('../../image/imagenavbar.jpg');
		}

		.panel {
			border: 1px solid green;
			border-radius: 0;
			transition: box-shadow 0.5s;
		}

		.panel:hover {
			box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
		}

		.panel-footer .btn:hover {
			border: 1px solid green;
			background-color: #fff !important;
			color: green;
		}

		.panel-heading {
			color: #fff !important;
			background-color: green !important;
			padding: 25px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		.panel-footer {
			background-color: #fff !important;
		}

		.panel-footer h3 {
			font-size: 32px;
		}

		.panel-footer h4 {
			color: #aaa;
			font-size: 14px;
		}

		.navbar {
			margin-bottom: 0;
			background-color: black;
			z-index: 9999;
			border: 0;
			font-size: 12px !important;
			line-height: 1.42857143 !important;
			letter-spacing: 4px;
			border-radius: 0;
		}

		.navbar li a,
		.navbar .navbar-brand {
			color: #fff !important;
		}

		.navbar-nav li a:hover,
		.navbar-nav li.active a {
			color: black !important;
			background-color: #fff !important;
		}

		.navbar-default .navbar-toggle {
			border-color: transparent;
			color: #fff !important;
		}

		.dropdown-menu {
			background-color: #000;
		}
	</style>
	<link rel="icon" type="image/png" href="../../image/favicon.ico" />
	<style>
		body {
			background-image: url('../../image/quayletan.jpg');
			background-repeat: no-repeat;
			background-size: contain;
			width: 100%;
			height: 100vh;
			overflow: auto;
		}

		.body2 {
			color: #fff;
		}

		/*-----for border----*/
		.containers {
			font-family: Roboto, sans-serif;
			background-image: url('../../image/darkblueback.jpg');
			border-style: 1px solid grey;
			margin: 0 auto;
			text-align: center;
			opacity: 1.8;
			margin-top: 67px;
			box-shadow: 3px 8px 5px 3px #fff;
			max-width: 500px;
			padding-top: 10px;
			height: 363px;
			margin-top: 166px;
			margin-bottom: 166px;
		}

		.row2 {
			margin-right: 0px;
			margin-left: 0px;
		}

		.row {
			margin-right: -15px;
			margin-left: -15px;
		}

		/*--- for label of user name---*/
		.username {
			margin-left: 1px;
			font-family: sans-serif;
			font-size: 14px;
			color: white;
			margin-top: 5px;
		}

		#username {
			margin-top: 5px;
		}

		/*---for heading-----*/
		.heading {
			text-decoration: bold;
			text-align: center;
			font-size: 30px;
			color: #F96;
			padding-top: 10px;
		}

		/*-----------for Password--------*/
		.pass {
			color: white;
			margin-top: 9px;
			font-size: 14px;
			font-family: sans-serif;
			margin-left: 6px;
			margin-top: 9px;
		}

		#password {
			margin-top: 6px;
		}

		/*--------------for IsAdmin---------------*/
		/*--------------label---------*/
		.isAdmin {
			color: white;
			font-family: sans-serif;
			font-size: 14px;
			margin-left: 28px;
			margin-top: 8px;
		}

		/*--------------for IsEmployee---------------*/
		/*--------------label---------*/
		.idEmployee {
			color: white;
			font-family: sans-serif;
			font-size: 14px;
			margin-left: 28px;
			margin-top: 8px;
		}

		/*---------- for Input type--------*/
		.col-xs-4.Yes {
			color: white;
			font-size: 13px;
			margin-top: 9px;
			padding-bottom: 16px;
		}

		.col-xs-4.No {
			color: white;
			font-size: 13px;
			margin-top: 9px;
			padding-bottom: 16px;
			padding-right: 95px;
		}

		/*------------For submit button---------*/
		.sbutton {
			color: white;
			font-size: 20px;
			border: 1px solid white;
			background-color: #080808;
			width: 32%;
			margin-left: 41%;
			margin-top: 16px;
			box-shadow: 0px 2px 2px 0px white;
		}

		.btn.btn-warning:hover {
			box-shadow: 2px 1px 2px 3px #99ccff;
			background: #5900a6;
			color: #fff;
			transition: background-color 1.15s ease-in-out, border-color 1.15s ease-in-out, box-shadow 1.15s ease-in-out;
		}
	</style>

</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../../index.php">Alibas Resort</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item"><a class="nav-link" href="">
							<?php include "../../config/pages/account/create.php" ?>
						</a></li>
					<li class="nav-item"><a class="nav-link" href="../../index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="../../Service.php">Service</a></li>

					<?php if (isset($_SESSION['username'])) {
						if (isset($_SESSION['isAdmin'])  == true) {
							$isAdmin = $_SESSION['isAdmin'];
							if ($isAdmin == 1) { ?>
								<li class="nav-item"><a class="nav-link" href="../../pages/account/ListAccount.php">Account</a></li>
						<?php }
						} ?>
						<li class="nav-item"><a class="nav-link" href="../../pages/employee/ListEmployee.php">Employee</a></li>
						<li class="nav-item"><a class="nav-link" href="../../pages/customer/ListCustomer.php">Customer</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">

								</span><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ""; ?><span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="../../login.php?act=logout">
										Logout</a></li>
							</ul>
						</li> <?php  } ?>
					<?php if (!isset($_SESSION['username'])) {
						echo '<li class="nav-item"><a class="nav-link" href="../../login.php">Login</a></li> ';
					} ?>
				</ul>
			</div>
		</div>
	</nav>

	<div class="containers">

		<form action="" method="post">

			<!---heading---->
			<header class="heading"> Add New</header>
			<hr>
			</hr>
			<!---Form starting---->
			<div class="row2 ">
				<!--- For UserName---->
				<div class="col-sm-12">
					<div class="row2">
						<div class="col-xs-4">
							<label class="username">User Name :</label>
						</div>
						<div class="col-xs-8">
							<input type="text" name="username" id="fname" placeholder="Enter User Name" class="form-control" required>
						</div>
					</div>
				</div>
				<!-----For Password and confirm password---->
				<div class="col-sm-12">
					<div class="row2">
						<div class="col-xs-4">
							<label class="pass">Password :</label>
						</div>
						<div class="col-xs-8">
							<input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" required>
						</div>
					</div>
				</div>

				<!-----------For IsAdmin And IsEmployee-------->
				<div class="col-sm-12">
					<div class="row2">
						<div class="col-xs-4 ">
							<label class="isAdmin">IsAdmin:</label>
						</div>

						<div class="col-xs-4 Yes">
							<input type="radio" name="isAdmin" id="isAdmin" value="1" required>Yes
						</div>

						<div class="col-xs-4 No">
							<input type="radio" name="isAdmin" id="isAdmin" value="0" required>No
						</div>

					</div>

					<div class="row2">
						<div class="col-xs-4 ">
							<label class="isEmployee body2">IsEmployee:</label>
						</div>

						<div class="col-xs-4 Yes">
							<input type="radio" name="isEmployee" id="isEmployee" value="1" required>Yes
						</div>

						<div class="col-xs-4 No">
							<input type="radio" name="isEmployee" id="isEmployee" value="0" required>No
						</div>

					</div>

					<div class="col-sm-12">
						<button type="submit" class="btn btn-warning">Add</button>
					</div>
				</div>
			</div>
		</form>

	</div>
	<?php include "../../includes/footer.php" ?>
</body>

</html>