<?php
require 'includes/header.php'
?>

<main>
	<link rel="stylesheet" href="CSS/login.css">
        <div class = "bg">
			<div class = "h-100 center-me">
				<div class = "my-auto">
					<form class = "form-signin" action = "includes/login-helper.php" method = "post" style = "background-color: white;">
						<img id = "LoginLogo" src="Images/LoginLogo.png" alt="Logo">					
						<h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
						<label for="inputEmail" class="sr-only">Username or Email address</label>
						<input type="text" id="inputEmail" name = "uname" class="form-control" placeholder="Username/Email" required autofocus>
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="inputPassword" name = "pwd" class="form-control" placeholder="Password" required>
						<div class="checkbox mb-3">
							<label>
								<input type="checkbox" value="remember-me"> Remember me
							</label>
						</div>
						<a href = "signup.php">Don't have an account? Register here</a>
						<button class="btn btn-lg btn-dark btn-block" name = "login-submit" type="submit">Sign in</button>
						<p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
					</form>
				</div>
				<div class = "carouselRow">
				<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
						<li data-target="#carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="Images/Carousel1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="Images/Carousel2.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="Images/Carousel3.jpg" alt="Third slide">
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
</main>
