<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Quite Light</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="{{asset('assets/frontend/plugin-frameworks/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/frontend/plugin-frameworks/swiper.css')}}" rel="stylesheet">	
	<link href="{{asset('assets/frontend/fonts/ionicons.css')}}" rel="stylesheet">		
	<link href="{{asset('assets/frontend/common/styles.css')}}" rel="stylesheet">
	
	
</head>
<body>
	
	<header>
		<a class="logo" href="/"><img src="{{asset('assets/frontend/images/logo-white.png')}}" alt="Logo"></a>
		
		<div class="right-area">
			<form class="src-form">
				<button type="submit"><i class="ion-search"></i></a></button>
				<input type="text" placeholder="Search here">
			</form><!-- src-form -->
		</div><!-- right-area -->
		
		<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
		
		<ul class="main-menu" id="main-menu">
			<li><a href="/">Home</a></li>
			<li class><a href="category">Category</a></li>
			<li><a href="single">Art</a></li>
			<li><a href="contact">Contact</a></li>
		</ul>
		
		<div class="clearfix"></div>
	</header>
	
	
	<div class="slider-main h-500x h-sm-auto pos-relative pt-95 pb-25">
		<div class="img-bg bg-1 bg-layer-4"></div>
		<div class="container-fluid h-100 mt-xs-50">
			<div class="dplay-tbl">
				<div class="dplay-tbl-cell color-white text-center">
				
					<h1 class="ptb-50"><b>Terms of Use</b></h1>
					
				</div><!-- dplay-tbl-cell -->
			</div><!-- dplay-tbl -->
		</div><!-- container -->
	</div><!-- slider-main -->
	
	
	<section class="bg-1-white ptb-70 ptn-sm-50">
		<div class="container">
			<div class="row">
				<div class="col-xl-2"></div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
					<form class="form-block form-h-55 form-plr-20 form-bg-white text-center">
						<div class="row">
							<div class="col-sm-6 mb-30">
								<input type="text" placeholder="Name">
							</div><!-- col-sm-6-->	
							
							<div class="col-sm-6 mb-30">
								<input type="text" placeholder="Email">
							</div><!-- col-sm-6-->
							
							<div class="col-sm-12 mb-30">
								<textarea class="ptb-20 min-h-200x" placeholder="Comment"></textarea>
							</div><!-- col-sm-12-->
							
						</div><!-- row-->
						<button class="btn-b-lg btn-brdr-grey plr-25 color-ash" type="submit"><b>Send Message</b></button>
						
					</form>
				</div><!-- col-sm-6-->	
			</div><!-- row-->	
		</div><!-- container -->
	</section>
	
	
	<footer class="bg-191 color-ash pt-50 pb-20 text-left center-sm-text">
		
		<div class="container-fluid">
			<div class="row">
			
				<div class="col-lg-1"></div>
				
				<div class="col-md-4 col-lg-6 mb-30">
					<div class="card h-100">
						<div class="dplay-tbl">
							<div class="dplay-tbl-cell">
							
								<a href="#"><img src="{{asset('assets/frontend/images/logo-white.png')}}"></a>
								<p class="color-ash mt-25"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
								
							</div><!-- dplay-tbl-cell -->
						</div><!-- dplay-tbl -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
				
				<div class="col-md-4 col-lg-2 mb-30">
					<div class="card h-100">
						<div class="dplay-tbl">
							<div class="dplay-tbl-cell">
							
								<ul class="list-a-plr-10">
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-youtube"></i></a></li>
								</ul>
								
							</div><!-- dplay-tbl-cell -->
						</div><!-- dplay-tbl -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
				
				<div class="col-md-4 col-lg-2 mb-30 text-left">
					<div class="card h-100">
						<div class="dplay-tbl">
							<div class="dplay-tbl-cell">
								<form class="form-block form-brdr-b mx-w-400x m-auto">
						
									<input class="color-white ptb-15 center-sm-text" type="text" placeholder=" Your Email">
									<button class="mt-30 btn-brdr-grey color-ash w-100 text-center" type="submit">SUBSCRIBE</button>
								
								</form>
							</div><!-- dplay-tbl-cell -->
						</div><!-- dplay-tbl -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script src="{{asset('assets/frontend/plugin-frameworks/jquery-3.2.1.min.js')}}"></script>	
	<script src="{{asset('assets/frontend/plugin-frameworks/bootstrap.min.js')}}"></script>	
	<script src="{{asset('assets/frontend/plugin-frameworks/swiper.js')}}"></script>		
	<script src="{{asset('assets/frontend/common/scripts.js')}}"></script>
	
</body>
</html>