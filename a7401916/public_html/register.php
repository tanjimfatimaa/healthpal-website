<?php
	$server = "mysql12.000webhost.com";
	$username = "a7401916_hp";
	$password = "pk47i20";
	$db = "a7401916_db";

	$tag = "";

	$conn = mysqli_connect($server, $username, $password, $db);

	if (!$conn){
		$tag = '999';
		die();
	}

	$name = $_POST['sname'];
	$username = $_POST['semail'];
	$pwd = sha1($_POST['spwd']);
	$phn = $_POST['phn'];

	$blood = $_POST['blood'];

	if (isset($_POST['donor'])) {
		$donor = 1;
	}
	else
		$donor = 0;

	if (isset($_POST['public'])) {
		$public = 1;
	}
	else
		$public = 0;

	$check = "SELECT * FROM USERS WHERE USERNAME='$username';";
	if (mysqli_num_rows(mysqli_query($conn, $check)) > 0) {
		$tag = '12';
	}
	if ($tag != '12') {
		$insert = "INSERT INTO USERS (NAME, USERNAME, PASSWORD, PHONE, BLOOD, ISDONOR, ISPUBLIC) VALUES ( '$name', '$username', '$pwd', '$phn', '$blood', $donor, $public);";


		if (mysqli_query($conn, $insert)) {
			$tag = '10';
		}
		else
			$tag = '11';
	}
	

	if ($_GET['platform'] == 'web') {
		switch ($tag) {
			case '10':
				header('Location: message.php?tag=10');
				break;

			case '11':
				header('Location: message.php?tag=11');
				break;

			case '12':
				header('Location: message.php?tag=12');
				break;

			case '999':
				header('Location: message.php?tag=999');
				break;
			
			default:
				# code...
				break;
		}
	}
	else if ($_GET['platform'] == 'mobile') {
		$array = array('TAG' => intval($tag));
		echo json_encode($array);
	}

?>