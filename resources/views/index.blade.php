<!DOCTYPE html>
<html lang="en">
<head>
	<title>arya lavasani | resume</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">


</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



	<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-resume">Resume</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>




	<section class="site-hero" style="background-image: url(images/image_main.jpg);" id="section-home" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row intro-text align-items-center justify-content-center">
				<div class="col-md-10 text-center pt-5">

					<h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">Arya Lavasani</strong></h1>
					<strong class="d-block text-white text-uppercase letter-spacing">and this is My Resume</strong>

				</div>
			</div>
		</div>
	</section> <!-- section -->





	{{-- @include('portfolio') --}}
	@include('resume')
	@include('about')
	@include('services')
	@include('blog')
	@include('contact')
	


	<footer class="site-footer">
		<div class="container">

			<div class="row mb-5">
				<p class="col-12 text-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true" ></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>

			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<p>
						{{-- <a href="#" class="social-item"><span class="icon-facebook2"></span></a> --}}
						{{-- <a href="#" class="social-item"><span class="icon-twitter"></span></a> --}}
						<a href="#" class="social-item"><span class="icon-instagram2"></span></a>
						<a href="#" class="social-item"><span class="icon-linkedin2"></span></a>
						{{-- <a href="#" class="social-item"><span class="icon-vimeo"></span></a> --}}

					</p>
				</div>
			</div>

		</div>
	</footer>




	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>

	<script src="js/vendor/jquery.easing.1.3.js"></script>

	<script src="js/vendor/jquery.stellar.min.js"></script>
	<script src="js/vendor/jquery.waypoints.min.js"></script>

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(document).ready(function(e){
	
			$(document).on('click','.submitBtn',function(){
					var data = $('#contactUs_form').serialize();
					$.ajax({
						url:"{{route('contact')}}",
						type:"POST",
						data:data,
						success:function(response){
							var message = response.message;
							$('.contactUs-response').removeClass('d-none').addClass('alert alert-success').html(message).fadeOut(5000);
							
						}
					})
				});
		});
	

	</script>
    </body>
    </html>
