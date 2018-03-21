<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>HealthPal - Contact Us</title>
		<meta name="keywords" content="HealthPal" />
		<meta name="description" content="HealthPal - blood donor community and emergency solution" />
		<link href="http://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700,900" rel="stylesheet" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />

		<script src="script/jquery-2.2.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

	</head>
	<body>
		<div id="header-wrapper">
			<div id="header" class="container">
				<div id="logo">
					<h1><a href="index.php">HealthPal</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li>
							<a href="index.php" accesskey="1" title="">MAP</a>
						</li>
						<li>
							<a href="user.php" accesskey="2" title="">LOGIN/SIGNUP</a>
						</li>
						<li>
							<a href="forum.php" accesskey="3" title="">FORUM</a>
						</li>
						<li>
							<a href="about.php" accesskey="4" title="">ABOUT</a>
						</li>
						<li class="active">
							<a href="contact.php" accesskey="5" title="">CONTACT US</a>
						</li>
						<li>
							<a href="stat.php" accesskey="5" title="">STATISTICS</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>
		<div id="welcome" class="container2">
			<div class="title">
				<h2 style="font-weight:200;color:#900000;">Thanks for visiting HealthPal</h2>
			</div>
			Please leave a comment, suggestion or any kind of opinion below about how we could do things better
		</div>

		<div class="container2" style="background-color:#FFFFFF;">
			<div style="width:500px; margin: 0 auto;">
				<form name="emailform" role="form-inline" action="sentmail.php" method="post">
					<div class="form-group">
						<label for="name">Your Name: </label>
						<input name="name" style="width:500px;" type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input name="email" style="width:500px;" type="email" class="form-control" id="email" placeholder="Enter email" required>
					</div>
					<div class="form-group">
						<label for="message">Enter your message:</label>
						<input name="message" style="width:500px; height:100px" type="text" class="form-control" id="message" placeholder="Your Message" required>
					</div>
					<button style="width:100px;" type="submit" id="button" class="btn btn-danger">
						Submit
					</button>
				</form>
				<br />
				<br />
			</div>

		</div>
		</div>
		<div id="copyright" class="container">
			<p>
				&copy; HealthPal, <?php echo date('Y') ?>.
				All rights reserved.
			</p>
		</div>
	</body>
</html>
