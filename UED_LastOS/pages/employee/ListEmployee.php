<?php
session_start();

?>
<?php
include "../../config/connection/Dbcon.php";
global $con;
?>
<!DOCTYPE html>
<html>

<head>
	<title>Employee Page</title>

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
	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<link rel="icon" type="image/png" href="../../image/favicon.ico" />
	<style>
		.bg-img {
			background-image: url('../../image/quayletan.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			width: 100%;
			height: 100vh;
			overflow: auto;
			margin-top: 1rem;
			margin-bottom: 1rem;
		}

		.h3 {
			color: white;
		}

		.table {
			background-color: #a3b4cd;
			width: 75%;
			margin-bottom: 7rem;
			margin-left: 150px;
		}

		.thead-light {
			background-color: #ffd9d9;
		}

		.text-left {
			text-align: end !important;
			margin-left: -10px;
		}

		.fa-mars {
			color: blue;
		}

		.fa-venus {
			color: pink;
		}

		.fa-edit {
			color: green;
		}

		.fa-trash-alt {
			color: red;
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
							<?php include "../../config/pages/customer/delete.php";
							?>
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

	<div class="jumbotron text-center">
		<a href="../../index.php"><img src="../../image/logo.png" alt="Image" class="img-responsive" style="width: 20%; margin-left: 500px;"></a>

		<p>We are very pleased to welcome you in here</p>
		<?php include "../../config/pages/employee/search.php"; ?>
		<form class="form-inline" action="" method="post">
			<div class="input-group">
				<input type="search" name="txtSearchValue" value="<?= $srch ?>" class="form-control" size="50" placeholder="Enter the word you want to search">
				<div class="input-group-btn">
					<button  name="submit" type="submit" class="btn btn-danger">Search</button>
				</div>
			</div>
		</form>
	</div>

	<div class="row">
		<div class="container bg-img">
			<h3 class="text-center h3">List of Employee</h3>
			<hr>
			<?php if ($_SESSION['isAdmin'] == 1){ ?>
				<div class="container text-left">
					<a href="../../pages/employee/CreateEmployee.php" class="btn btn-success">Add
						New</a>
				</div>
				<?php  }?>
			<br>
			<table class="table table-bordered">
				<thead class="thead-light">
					<tr>
						<th class="text-center">ID</th>
						<th class="text-center">First Name</th>
						<th class="text-center">Last Name</th>
						<th class="text-center">Email</th>
						<th class="text-center">Phone Number</th>
						<th class="text-center">Gender</th>
						<th class="text-center">Position</th>
						<?php if ($_SESSION['isAdmin'] == 1){ ?>
							<th class="text-center">Actions</th>
						<?php }?>
					</tr>
				</thead>
				<tbody>
				<?php while ($row = mysqli_fetch_assoc($result)) : ?>

						<tr>
						<td class="text-center"><?= $row['id']?></td>
							<td class="text-center"><?= $row['firstname']?></td>
							<td class="text-center"><?= $row['lastname']?></td>
							<td class="text-center"><?= $row['email']?></td>
							<td class="text-center"><?= $row['phonenumber']?></td>
							<td class="text-center">
								<?php if ($row['gender'] == 1) echo '<i class="fas fa-mars"></i> ' ?>

								<?php if ($row['gender'] == 0) echo '<i class="fas fa-venus"></i> ' ?>
							</td>
							<td class="text-center">
							    <?php if ($row['position'] == 1) echo 'Administrator' ?>

							    <?php if ($row['position'] == 0) echo 'Employee ' ?>
							</td>
							<?php if ($_SESSION['isAdmin'] == 1){ ?>
								<td class="text-center"><a href="EditEmployee.php?id=<?= $row['id'] ?>"><i class="fas fa-edit"></i></a>
									&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="showMess(<?= $row['id'] ?>)"><i class="fas fa-trash-alt"></i></a>
								</td>
							<?php }?>
						</tr>
					
				</tbody>
				<?php endwhile; ?>
			</table>
		</div>
	</div>
	<script>
		function showMess($id) {
			var option = confirm('Are you sure to delete this employee!!!');
			if (option === true) {
				window.location.href = '../../config/pages/employee/delete.php?id=' + $id;
			}

		}
	</script>
	<?php include "../../includes/footer.php" ?>
</body>

</html>