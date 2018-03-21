<?php
	$server = "mysql12.000webhost.com";
	$username = "a7401916_hp";
	$password = "pk47i20";
	$db = "a7401916_db";

	$conn = mysqli_connect($server, $username, $password, $db);

	if (!$conn){
		$tag = '999';
		die();
	}

	$username = $_POST['email'];
	$pwd = sha1($_POST['pwd']);

	if (isset($_POST['sli'])) {
		$sli = 1;
	}
	else
		$sli = 0;

	$select = "SELECT ID, NAME, PASSWORD FROM USERS WHERE USERNAME='$username';";

	$result = mysqli_query($conn, $select);

	$db_pwd = "";
    $name = "";
    $id = "";

    $tag = "";
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
        	$db_pwd = $row['PASSWORD'];
        	$name = $row['NAME'];
        	$id = $row['ID'];
    	}
    	$tag = '900';
	}
	elseif (mysqli_num_rows($result) == '0') {
		$tag = '1';
	}
	else {
		$tag = '3';
	}
	
	if ($tag == '900') {
		if ($db_pwd == $pwd) {
			SetSession($username, $pwd);
			$tag = '0';
		}
		else
			$tag = '2';
	}
	if ($sli == '1') {
		$cookie_key = "username";
		$cookie_value = $username;
		setcookie($cookie_key, $cookie_value, time() + (86400 * 30), "/");

		$cookie_name = "passwd";
		$cookie_value = $pwd;
		setcookie($cookie_key, $cookie_value, time() + (86400 * 30), "/");
	}

	function SetSession($username, $pwd)
	{
		session_start();
		$_SESSION['SID'] = session_id();
		$_SESSION['username'] = $username;
	}

	if ($_GET['platform'] == 'web') {
		switch ($tag) {
		case '0':
			header('Location: index.php?tag=0');
			break;
		case '1':
			header('Location: user.php?error=1');
			break;
		case '2':
			header('Location: user.php?error=2&uname='.$username);
			break;
		case '3':
			header('Location: message.php?tag=3');
			break;
		case '999':
			header('Location: message.php?tag=999');
			break;
		default:
			break;
		}	
	}
	elseif ($_GET['platform'] == 'mobile'){
		$array = array('TAG' => intval($tag));
		echo json_encode($array);
	}
?>