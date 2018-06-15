<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">

	<title>Member SignUp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700);
		@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700);

		body {
			background: #fff;
			font-family: 'Roboto', sans-serif;
			color: #333;
			line-height: 22px;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: 'Roboto Condensed', sans-serif;
			font-weight: 400;
			color: #111;
			margin-top: 5px;
			margin-bottom: 5px;
		}

		h1,
		h2,
		h3 {
			text-transform: uppercase;
		}

		input.upload {
			position: absolute;
			top: 0;
			right: 0;
			margin: 0;
			padding: 0;
			font-size: 12px;
			cursor: pointer;
			opacity: 1;
			filter: alpha(opacity=1);
		}

		.form-inline .form-group {
			margin-left: 0;
			margin-right: 0;
		}

		.control-label {
			color: #333333;
		}

	</style>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<section>
					<h1 class="entry-title">
						<a href="<?php echo base_url(); ?>">
							<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
						</a>
						<span>Sign Up</span>
					</h1>
					<hr>
					<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/signup/process_signup" name="signup" id="signup" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label col-sm-3">Email ID
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-8 col-sm-9">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-envelope"></i>
									</span>
									<input type="email" class="form-control" name="email" id="emailid" required placeholder="Enter your Email ID">
								</div>
								<small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small>
							</div>
						</div>   

						<div class="form-group">
							<label class="control-label col-sm-3">Username
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-8 col-sm-9">
								<input type="text" class="form-control" name="username" id="username" required placeholder="Enter your Username here">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3">Set Password
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-5 col-sm-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-lock"></i>
									</span>
									<input type="password" class="form-control" name="password" id="password" required placeholder="Choose password (5-15 chars)">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Full Name
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-8 col-sm-9">
								<input type="text" class="form-control" name="full_name" id="mem_name" required placeholder="Enter Maiden Name if Married to verify">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Date of Birth
								<span class="text-danger">*</span>
							</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" name="date_of_birth" id="date_of_birth" required placeholder="Enter your Name here">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Gender
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-8 col-sm-9">
								<label>
									<input name="gender" type="radio" value="Male" checked=""> Male </label>
								&nbsp;&nbsp;&nbsp;
								<label>
									<input name="gender" type="radio" value="Female"> Female </label>
							</div>
						</div>    

						<div class="form-group">
							<label class="control-label col-sm-3">Civil Status
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-8 col-sm-9">
								<input type="text" class="form-control" name="civil_status" id="civil_status" required placeholder="Enter your Civil Status here">
							</div>
						</div>   

						<div class="form-group">
							<label class="control-label col-sm-3">Occupation
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-8 col-sm-9">
								<input type="text" class="form-control" name="occupation" id="occupation" required placeholder="Enter your Occupation here">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3">Contact No.
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-5 col-sm-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-phone"></i>
									</span>
									<input type="text" class="form-control" name="contact_no" id="contactnum" required placeholder="Enter your Primary contact no.">
								</div>
							</div>
						</div>   

						<div class="form-group">
							<label class="control-label col-sm-3">Year Graduated
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-8 col-sm-9">
								<input type="text" class="form-control" name="year_graduated" id="year_graduated" required placeholder="1990">
							</div>
						</div>   

						<div class="form-group">
							<label class="control-label col-sm-3">Course
								<span class="text-danger">*</span>
							</label>
							<div class="col-md-8 col-sm-9">
								<input type="text" class="form-control" name="course" id="course" required placeholder="Bachelor of Science in Information Technology">
							</div>
						</div>


						<div class="form-group">
							<div class="col-xs-offset-3 col-md-8 col-sm-9">
								<span class="text-muted">
									<span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our
									<a href="#">Terms</a> and that you have read our
									<a href="#">Policy</a>, including our
									<a href="#">Cookie Use</a>.</span>
							</div>
						</div>   

						
						<div class="form-group">
							<div class="col-xs-offset-3 col-xs-10">
								<input name="Submit" type="submit" value="Sign Up" class="btn btn-primary">
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
	<script type="text/javascript">


	</script>


</body>

</html>
