<?php
session_start();
?>
<?php include "config/connection/Dbcon.php";
global $con;
$result = mysqli_query($con, "select * from service");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Alibas Home</title>

	<?php include "includes/head.php" ?>

</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand " href="">Alibas Resort</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item"><a class="nav-link" href="">Home</a></li>
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
		<a href=""><img src="image/logo.png" alt="Image" class="img-responsive" style="width: 20%; margin-left: 500px;"></a>

		<p>We are very pleased to welcome you in here</p>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<h2>About the resort</h2>
				<h3>Excellent location. Very friendly staff.</h3>
				<h4>Hotel very clean with excellent amenities. Would highly
					recommend. Great staff, they are very helpfull. Clean comfy room
					and Nice pool and little gym. Very sad that we had to leave because
					of corona. Breakfast also very good Good location. Walking distance
					to the Old City. Breakfast wasn't extensive but more than decent.
					Comfortable and very clean rooms Featuring an outdoor natural
					swimming pool and free private parking, Alibas resort offers budget
					accommodation with free Wi-Fi and flat-screen TVs.Wonderful staff</h4>
			</div>
			<div class="col-sm-4">
				<img src="image/home.gif" class="img-responsive margin" alt="image" style="width: 100%">
			</div>
		</div>
	</div>

	<div class="container-fluid bg-grey">
		<div class="row">
			<div class="col-sm-5">
				<span class="glyphicon glyphicon-globe logo"></span>
			</div>
			<div class="col-sm-5">
				<h2>Our Values</h2>
				<h4>
					<strong>MISSION:</strong> Therefore, having to face daily risks
					from life such as polluted environment, lack of energy, work
					diseases, a vacation at high-class resorts is an inevitable
					manifestation of an increasingly modern life. is an indispensable
					need of modern life. So we have a duty to help our customers feel
					comfortable and minimize negativity.
				</h4>
				<p>
					<strong>VISION:</strong> We hope Alibas Resort will become the
					second home of each customer. That's why, right from the design
					stage, we have been very meticulous in every detail, from living
					room furniture, kitchen area or lighting system for each space so
					that customers feel comfortable and fully enjoy each space. the
					moment when coming to Alibas Resort
				</p>
			</div>
		</div>
	</div>

	<div class="container-fluid text-center bg-img">
		<h1>Our Service</h1>

		<div class="row text-center">
			<?php while ($row = mysqli_fetch_assoc($result)) : ?>
				<div class="col-md-3 mt-5">
					<div class="thumbnail">
						<img src="image/<?= $row['image'] ?>" alt="">
						<p>
							<strong><?= $row['name'] ?></strong>
						</p>
						<p>
							Category:
							<?= $row['category'] ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>


	<div class="container-fluid">
		<div class="text-center">
			<h2>Pricing</h2>
			<h4>Choose a payment plan that works for you</h4>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						<h1>Basic</h1>
					</div>
					<div class="panel-body">
						<p>
							<strong>1</strong> Single Bed
						</p>
						<p>
							<strong>1</strong> Television
						</p>
						<p>
							<strong>0</strong> Air-Conditioner
						</p>
						<p>
							<strong>1</strong> Refrigerator
						</p>
						<p>
							<strong>Full</strong> Service
						</p>
					</div>
					<div class="panel-footer">
						<h3>230.000VNĐ</h3>
						<h4>per day</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						<h1>Pro</h1>
					</div>
					<div class="panel-body">
						<p>
							<strong>1</strong> Double Bed
						</p>
						<p>
							<strong>1</strong> Television
						</p>
						<p>
							<strong>1</strong> Air-Conditioner
						</p>
						<p>
							<strong>1</strong> Refrigerator
						</p>
						<p>
							<strong>Full</strong> Service
						</p>
					</div>
					<div class="panel-footer">
						<h3>300.000VNĐ</h3>
						<h4>per day</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						<h1>Premium</h1>
					</div>
					<div class="panel-body">
						<p>
							<strong>2</strong> Double Bed
						</p>
						<p>
							<strong>2</strong> Television
						</p>
						<p>
							<strong>2</strong> Air-Conditioner
						</p>
						<p>
							<strong>2</strong> Refrigerator
						</p>
						<p>
							<strong>Full</strong> Service
						</p>
					</div>
					<div class="panel-footer">
						<h3>490.000VNĐ</h3>
						<h4>per day</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card-fluid bg-1 text-center">
		<img src="image/image3.png" style="width: 100%">
	</div>
	<?php include "includes/footer.php" ?>


</body>

</html>