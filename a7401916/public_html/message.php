<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>HealthPal</title>
		<meta name="keywords" content="HealthPal" />
		<meta name="description" content="HealthPal - blood donor community and emergency solution" />
		<link href="http://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700,900" rel="stylesheet" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />

		<script src="script/jquery-2.2.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

	</head>
	<body style="font-weight:600;">
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
						<li>
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
				<h2>
				<?php
					if (isset($_GET['tag'])) {
						$var = $_GET['tag'];
						switch ($var) {
							case '999':
								echo "Connection Error: " . mysqli_connect_error();
								break;

							case '10':
								echo "You are successfully registered!";
								break;
							
							case '11':
								echo "WE couldn't register you at this moment";
								break;

							case '12':
								echo "you are already registered!";
								break;

							case '1':
								echo "No such user found!";
								break;
							case '3':
								echo "Something went wrong!";
								break;
							default:
								# code...
								break;
						}
					}
				?>
				</h2>
			</div>
			<a href="user.php">Go back to the main page</a>
			
		</div>

		<div class="container2" style="background-color:#FFFFFF;">
			

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
