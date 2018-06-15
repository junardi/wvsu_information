<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">

	<title>Login - WVSU JC Information System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url(); ?>css/bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">
	<style type="text/css">
		@import url("<?php echo base_url(); ?>css/fontawesome/css/font-awesome.min.css");
		.login-block {
			background: #DE6262;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to bottom, #FFB88C, #DE6262);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			float: left;
			width: 100%;
			padding: 50px 0;
		}

		.banner-sec {
			background: url(<?php echo base_url(); ?>images/pexels-photo.jpg) no-repeat left bottom;
			background-size: cover;
			min-height: 500px;
			border-radius: 0 10px 10px 0;
			padding: 0;
		}

		.container {
			background: #fff;
			border-radius: 10px;
			box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
		}

		.carousel-inner {
			border-radius: 0 10px 10px 0;
		}

		.carousel-caption {
			text-align: left;
			left: 5%;
		}

		.login-sec {
			padding: 50px 30px;
			position: relative;
		}

		.login-sec .copy-text {
			position: absolute;
			width: 80%;
			bottom: 20px;
			font-size: 13px;
			text-align: center;
		}

		.login-sec .copy-text i {
			color: #FEB58A;
		}

		.login-sec .copy-text a {
			color: #E36262;
		}

		.login-sec h2 {
			margin-bottom: 30px;
			font-weight: 800;
			font-size: 30px;
			color: #DE6262;
		}

		.login-sec h2:after {
			content: " ";
			width: 100px;
			height: 5px;
			background: #FEB58A;
			display: block;
			margin-top: 20px;
			border-radius: 3px;
			margin-left: auto;
			margin-right: auto
		}

		.btn-login {
			background: #DE6262;
			color: #fff;
			font-weight: 600;
		}

		.banner-text {
			width: 70%;
			position: absolute;
			bottom: 40px;
			padding-left: 20px;
		}

		.banner-text h2 {
			color: #fff;
			font-weight: 600;
		}

		.banner-text h2:after {
			content: " ";
			width: 100px;
			height: 5px;
			background: #FFF;
			display: block;
			margin-top: 20px;
			border-radius: 3px;
		}

		.banner-text p {
			color: #fff;
		} 

		.signup_confirmation { 
			padding: 0px;
		} 

		.error { 
			text-align: center;  
			color: #fff;   
			background-color: #E06864;
			padding: 20px;
		}  

		.success { 
			text-align: center;  
			color: #fff;   
			background-color: #5CB85C;
			padding: 20px;
		}  

		.success p { 
			padding: 0px;
			margin: 0px;
		} 

		.error p { 
			padding: 0px;
			margin: 0px;
		}  

		.error_login { 
			text-align: center;  
			color: #fff;   
			background-color: #E06864;
			padding: 10px;   
			margin-bottom: 20px;
		}     

		.error_login p { 
			padding: 0px;
			margin: 0px;
		} 

	</style>
	<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap4.min.js"></script>
	<script type="text/javascript">
		window.alert = function () {};
		var defaultCSS = document.getElementById('bootstrap-css');

		function changeCSS(css) {
			if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css +
				'" type="text/css" />');
			else $('head > link').filter(':first').replaceWith(defaultCSS);
		}
		$(document).ready(function () {
			var iframe_height = parseInt($('html').height());
			window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
		});

	</script>
</head>

<body>
	
	<?php   
		echo $this->session->flashdata('signup_message');
	?>

	<section class="login-block">
		<div class="container">
			<div class="row">
				<div class="col-md-4 login-sec">
					<h2 class="text-center">Login Now</h2>
					<form class="login-form" method="post" action="<?php echo base_url(); ?>index.php/login/process_login">
						<div class="form-group">
							<label for="exampleInputEmail1" class="text-uppercase">Username</label>
							<input type="text" name="username" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Password</label>
							<input type="password" name="password" class="form-control" placeholder="">
						</div>      

						<?php echo  $this->session->flashdata('error');  ?>

						<div class="form-check">
							<button type="submit" class="btn btn-login float-right">Login</button>
						</div>

					</form>
                    <div class="copy-text">Not a member? <a href="<?php echo base_url(); ?>index.php/signup">Signup</a></div>
				</div>
				<div class="col-md-8 banner-sec">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="banner-text">
										<h2>WVSU JC Alumni Information Management</h2>
										<p>Commits to uphold the vision, mission, and goals of the University</p>
									</div>
								</div>
							</div>
						
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">


	</script>


</body>

</html>
