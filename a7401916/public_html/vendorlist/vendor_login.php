<?php

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


    $uname = $_POST['uname'];
    $passwd = sha1($_POST['passwd']);

    $query = "SELECT * FROM `VENDOR_INFO` WHERE email='$uname'";

    $db_id = "";
    $db_name = "";
    $db_uname = "";
    $db_passwd = "";
    $db_maincat = "";
    $db_subcat = "";
    $db_type = "";
    $db_svc = "";
    $db_bhrs = "";
    $db_bstat = "";

    if ($result = mysqli_query($con, $query)) {
        $row = mysqli_num_rows($result);
        if ($row == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $db_id = $row['id'];
                $db_name = $row['name'];
                $db_uname = $row['email'];
                $db_passwd = $row['passwd'];
                $db_maincat = $row['maincat'];
                $db_subcat = $row['subcat'];
                $db_type = $row['btype'];
                $db_svc = $row['service'];
                $db_bhrs = $row['bhrs'];
                $db_bstat = $row['bstat'];
            }
            $tag = '900';
        } else {
            $tag = '2';
        }
    } else {
        $tag = '3';
    }

    if ($tag == '900') {
        if ((strcmp($passwd, $db_passwd)) == 0) {
            SetSession($uname, $passwd);
            $tag = '1';
        } else {
            $tag = '0';
        }
    }

    function SetSession($uname, $passwd) {
        session_start();
        $_SESSION['sid'] = session_id();
        $_SESSION['uname'] = $uname;
        $_SESSION['pwd'] = $passwd;
    }

    $json = array('TAG' => intval($tag), 'ID' => $db_id, 'Name' => $db_name,
            'Email' => $db_uname, 'MainCat' => $db_maincat,
            'SubCat' => $db_subcat, 'Type' => $db_type,
            'Service' => $db_svc, 'Bhrs' => $db_bhrs, "Bstat" => $db_bstat);
    echo json_encode($json);

?>
