<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="Hospital Landing page" />
		<meta name="author" content="Abhishek Keshri" />
		<title>Hospital Landing</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
		<meta name="theme-color" content="#563d7c" />

		<style></style>
		<!-- Custom styles for this template -->
		<link href="styles/home.css" rel="stylesheet" />
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
				<a class="navbar-brand" href="#">Hospital</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
						</li>
					</ul>
					<a class="btn btn-dark" href="logout.php">Logout</a>
				</div>
			</nav>
		</header>

		<main role="main">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../images/doctor.jpg" class="img-responsive" />
						<div class="container">
							<div class="carousel-caption text-left">
								<h1>Hello, <?php echo $_SESSION['name']; ?></h1>

								<p>
									This is some random stuff I am writing here, I didn't want to
									use lorem ipsum. This is some random stuff I am writing here,
									I didn't want to use lorem ipsum.
								</p>

								<p>
									<a class="btn btn-lg btn-success" href="#" role="button">File a Digital Requisition Form</a>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="../images/doctor.jpg" class="img-responsive" />
						<div class="container">
							<div class="carousel-caption">
								<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
								<p>
									This is some random stuff I am writing here, I didn't want to
									use lorem ipsum. This is some random stuff I am writing here,
									I didn't want to use lorem ipsum.
								</p>
								<p>
									<a class="btn btn-lg btn-success" href="#" role="button">View Digital Requisition Forms</a>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="../images/doctor.jpg" class="img-responsive" />
						<div class="container">
							<div class="carousel-caption text-right">
								<h1>Hello, <?php echo $_SESSION['name']; ?></h1>

								<p>
									This is some random stuff I am writing here, I didn't want to
									use lorem ipsum. This is some random stuff I am writing here,
									I didn't want to use lorem ipsum.
								</p>
								<p>
									<a class="btn btn-lg btn-success" href="#" role="button">View Past Requisition Form</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

			<div class="container marketing">
				<!-- Three columns of size 4, total size is 12 -->
				<div class="row">
					<div class="col-lg-4">
						<i class="fas fa-heart"></i>
						<h2>Heading</h2>
						<p>
							This is some random stuff I am writing here, I didn't want to use
							lorem ipsum. This is some random stuff I am writing here, I didn't
							want to use lorem ipsum.
						</p>
						<p>
							<a class="btn btn-success" href="#" role="button">View Details &raquo;</a>
						</p>
					</div>

					<div class="col-lg-4">
						<i class="fas fa-book-medical"></i>
						<h2>Heading</h2>
						<p>
							This is some random stuff I am writing here, I didn't want to use
							lorem ipsum. This is some random stuff I am writing here, I didn't
							want to use lorem ipsum.
						</p>
						<p>
							<a class="btn btn-success" href="#" role="button">View Details &raquo;</a>
						</p>
					</div>

					<div class="col-lg-4">
						<i class="fas fa-capsules"></i>
						<h2>Heading</h2>
						<p>
							This is some random stuff I am writing here, I didn't want to use
							lorem ipsum. This is some random stuff I am writing here, I didn't
							want to use lorem ipsum.
						</p>
						<p>
							<a class="btn btn-success" href="#" role="button">View Details &raquo;</a>
						</p>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
			<div class="container marketing">
				<!-- Three columns of size 4, total size is 12 -->
				<div class="row">
					<div class="col-lg-4">
						<i class="fas fa-briefcase-medical"></i>
						<h2>Heading</h2>
						<p>
							This is some random stuff I am writing here, I didn't want to use
							lorem ipsum. This is some random stuff I am writing here, I didn't
							want to use lorem ipsum.
						</p>
						<p>
							<a class="btn btn-success" href="#" role="button">View Details &raquo;</a>
						</p>
					</div>

					<div class="col-lg-4">
						<i class="fas fa-brain"></i>
						<h2>Heading</h2>
						<p>
							This is some random stuff I am writing here, I didn't want to use
							lorem ipsum. This is some random stuff I am writing here, I didn't
							want to use lorem ipsum.
						</p>
						<p>
							<a class="btn btn-success" href="#" role="button">View Details &raquo;</a>
						</p>
					</div>

					<div class="col-lg-4">
						<i class="fas fa-stethoscope"></i>
						<h2>Heading</h2>
						<p>
							This is some random stuff I am writing here, I didn't want to use
							lorem ipsum. This is some random stuff I am writing here, I didn't
							want to use lorem ipsum.
						</p>
						<p>
							<a class="btn btn-success" href="#" role="button">View Details &raquo;</a>
						</p>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<!-- FOOTER -->
			<footer class="container">
				<p class="float-right"><a href="#">Back to top</a></p>
				<p>
					&copy; 1998-2022 Hospital &middot;
					<a href="#">Privacy</a> &middot; <a href="#">Terms</a>
				</p>
			</footer>
		</main>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>

	</html>
<?php
} else {
	header("Location: index.php");
	exit();
}
?>
