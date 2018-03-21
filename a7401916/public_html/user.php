<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login or Sign Up - Healthpal</title>
		<meta name="keywords" content="HealthPal" />
		<meta name="description" content="HealthPal - blood donor community and emergency solution" />
		<link href="http://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700,900" rel="stylesheet" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />

		<script src="script/jquery-2.2.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/js/bootstrap-select.min.js"></script>
		<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
		<script type="text/javascript">
			$('.selectpicker').selectpicker({
				style : 'btn-danger',
				size : 4
			});

		</script>
	</head>
	<body>
		<div id="header-wrapper" style="height:600px;">
			<div id="header" class="container">
				<div id="logo">
					<h1><a href="index.php">HealthPal</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li>
							<a href="index.php" accesskey="1" title="">MAP</a>
						</li>
						<li class="active">
							<a href="user.php" accesskey="2" title="">LOGIN/SIGNUP</a>
						</li>
						<li>
							<a href="forum.php" accesskey="3" title="">FORUM</a>
						</li>
						<li>
							<a href="about.php" accesskey="4" title="">ABOUT</a>
						</li>
						<li>
							<a href="contact.php" accesskey="5" title="">CONTACT US</a>
						</li>
						<li>
							<a href="stat.php" accesskey="5" title="">STATISTICS</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="userpage">
				<div class="container">
					<h1 style="margin-bottom: 20px;margin-right: 60px;margin-left: 60px;margin-top: 60px;text-align:center;font-weight:200;color:#900000;">You need to log in to use all the features of HealthPal</h1>
					<ul class="nav nav-tabs" style="margin-left: 60px;margin-right: 60px">
						<li class="active">
							<a data-toggle="tab" href="#home">LOG IN</a>
						</li>
						<li>
							<a data-toggle="tab" href="#menu1">SIGN UP</a>
						</li>
					</ul>

					<div class="tab-content" style="margin-left: 60px;margin-right: 60px">
						<div id="home" class="tab-pane fade in active">
							<h3 style="text-align:center;color:#900000;">LOG IN TO HEALTHPAL</h3>
							<p style="text-align:center;color:#900000;"><?php
								if (isset($_GET['error'])) {
									$error = $_GET['error'];

									switch ($error) {
										case '1':
											echo "No such user exists!";
											break;
										case '2':
											echo "wrong password for " . $_GET['uname'];
											break;
										default:
										
											break;
									}
										
								}
								?>
							</p>
							<div style="width:300px;margin:0 auto;margin-top:30px;">
								<form role="form" method="post" action="login.php?platform=web">
									<div class="form-group">
										<label for="email">Email:</label>
										<input name="email" type="email" class="form-control" style="width:300px" id="email" placeholder="Enter email" required />
									</div>
									<div class="form-group">
										<label for="pwd">Password:</label>
										<input name="pwd" type="password" class="form-control" style="width:300px" id="pwd" placeholder="Enter password" required/>
									</div>
									<div class="checkbox">
										<label>
											<input name="sli" type="checkbox">
											Remember me</label>
									</div>
									<div style="width: 100px;margin:0 auto;">
										<button type="submit" class="btn btn-danger" style="width: 100px;margin-top:20px;">
											Log In
										</button>
									</div>

								</form>
							</div>
						</div>
						<div id="menu1" class="tab-pane fade">
							<h3 style="text-align:center;color:#900000;">SIGN UP FOR HEALTHPAL</h3>
							<div style="width:800px;margin:0 auto;margin-top:30px;">
								<form action="register.php?platform=web" role="form" method="post">
									<div style="width:400px; float:left;margin:0 auto;">
										<div class="form-group">
											<label for="sname">Your Name:</label>
											<input type="text" class="form-control" style="width:300px" id="sname" name="sname" placeholder="Enter your name" required />
										</div>
										<div class="form-group">
											<label for="semail">Email:</label>
											<input type="email" class="form-control" style="width:300px" id="semail" name="semail" placeholder="Enter your email" required />
										</div>
										<div class="form-group">
											<label for="spwd">Password:</label>
											<input type="password" class="form-control" style="width:300px" id="spwd" name="spwd" placeholder="Choose a password" required/>
										</div>

										<div class="form-group">
											<label for="spwd2">Password:</label>
											<input type="password" class="form-control" style="width:300px" id="spwd2" name="spwd2" placeholder="Re-enter password" required/>
										</div>
									</div>

									<div class="pull-left" style="width: 400px;">

										<div class="form-group">
											<label for="phn">Your phone number (with country code):</label>
											<input type="text" class="form-control" style="width:300px" id="phn" name="phn" placeholder="your phone number e.g. +8801933523208" required />
										</div>
										<div class="form-group">
											<label for="phn">Your blood group:</label>
											<select id="blood" name="blood" class="selectpicker" data-style="btn-danger">
												<option value="A+">A+</option>
												<option value="B+">B+</option>
												<option value="O+">O+</option>
												<option value="AB+">AB+</option>
												<option value="A-">A-</option>
												<option value="B-">B-</option>
												<option value="O-">O-</option>
												<option value="AB-">AB-</option>
											</select>
										</div>
										<br />
										<div class="checkbox">
											<label>
												<input value="d" name="donor" type="checkbox">
												I want to be a donor</label>
										</div>
										<div class="checkbox">
											<label>
												<input value="p" name="public" type="checkbox">
												Create as a Public Profile</label>
										</div>
										<div style="width: 100px;margin:0 auto;">
											<button type="submit" class="btn btn-danger" style="width: 100px;margin-top:20px;">
												Sign Up
											</button>
										</div>
									</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<div id="copyright" class="container" style="margin-top: 0px">
				<p>
					&copy; HealthPal, <?php echo date('Y') ?>.
					All rights reserved.
				</p>
			</div>
	</body>
</html>
