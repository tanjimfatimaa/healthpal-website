<?php

    # require_once db_connect.php;

    $server = "mysql12.000webhost.com";
    $username = "a7401916_rayhan";
    $password="pk47i20";
    $db="a7401916_db";

    $tag = "";

    $con = mysqli_connect($server, $username, $password, $db);
    mysqli_autocommit($con, TRUE);

    if (!$con) {
        $tag = '999';
        die();
    }

    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $password = sha1($_POST['passwd']);
    $maincat = $_POST['maincat'];
    $subcat = $_POST['subcat'];
    $type = $_POST['type'];
    $loc = $_POST['location'];
    $service = $_POST['svc'];
    $bhrs = $_POST['bhrs'];
    $bstat = $_POST['bstat'];

    $sql = "INSERT INTO VENDOR_INFO (name, email, passwd, maincat, subcat, btype, location, service, bhrs, bstat) VALUES ('$name', '$uname', '$password', '$maincat', '$subcat', '$type', '$loc', '$service', '$bhrs', '$bstat')";

    $check = "SELECT * FROM VENDOR_INFO WHERE email='$uname'";

    $checkResult = mysqli_query($con, $check);

    if ($checkResult) {
        $row = mysqli_num_rows($checkResult);
        if ($row > 0)
               $tag='12';
    }
    if ($tag != '12') {
        $result = mysqli_query($con, $sql);
        if ($result == 1) {
            $tag = '10';
        }
        else {
            $tag = '11';
        }
    }

    $ar = array('TAG' => intval($tag));
    echo json_encode($ar);
 ?>
