<?php
session_start();
?>
<?php 
include "config/connection/Dbcon.php";
global $con;
$result =mysqli_query($con,"select * from service");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Service Page</title>
<?php include "includes/head.php" ?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Alibas Resort</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="Service.php">Service</a></li>

					<?php if (isset($_SESSION['username'])) { 
						include "includes/navbar.php"; } ?>
					<?php if (!isset($_SESSION['username'])) {
						echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> ';
					} ?>
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron text-center">
	<a href="index.php"><img src="image/logo.png" alt="Image" class="img-responsive"
			style="width: 20%; margin-left: 500px;"></a>

		<p>We are very pleased to welcome you in here</p>
	</div>
	

	<div class="container-fluid text-center bg-img">
		<h1>Our Service</h1>

		<div class="row text-center">
		<?php while($row=mysqli_fetch_assoc($result)) : ?>
			<div class="col-md-3 mt-5">
				<div class="thumbnail">
					<img src="image/<?=$row['image']?>" alt="">
					<p>
						<strong><?=$row['name']?></strong>
					</p>
					<p>
						Category:
						<?=$row['category']?></p>
				</div>
			</div>
			<?php endwhile;?>
		</div>
	</div>


	<?php include "includes/footer.php" ?>

</body>
</html>