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
		<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
		

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
				<li class="active"><a href="index.php" accesskey="1" title="">MAP</a></li>
				<li><a href="user.php" accesskey="2" title="">LOGIN/SIGNUP</a></li>
				<li><a href="forum.php" accesskey="3" title="">FORUM</a></li>
				<li><a href="about.php" accesskey="4" title="">ABOUT</a></li>
				<li><a href="contact.php" accesskey="5" title="">CONTACT US</a></li>
				<li><a href="stat.php" accesskey="5" title="">STATISTICS</a></li>
			</ul>
		</div>
	</div>
	<div style="width:1000px; margin: 0 auto;">
      	<form class="form-inline" role="search">
        <div>
            <input type="text" class="search-query" style="width:970px;" placeholder="Search for hospitals, blood donors etc" name="srch-term" id="srch-term">
        </div>
        </form>
		<div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 22.9006342, lng: 89.5013834},
          zoom: 15
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
	</div>
	
		
	<div id="banner" class="container"><span>HealthPal will be available soon</span></div>
</div>
<div id="wrapper">
	<div id="page" class="container">
		
	</div>
</div>
<div id="copyright" class="container" style="margin">
			<p>
				&copy; HealthPal, <?php echo date('Y') ?>.
				All rights reserved.
			</p>
		</div>
</body>
</html>
