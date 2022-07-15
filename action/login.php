<?php
include '../includes/config.php';
include '../includes/constant.php';

$email = $_REQUEST['email'];
$role_name = $_REQUEST['role'];
$password = $_REQUEST['password'];
$captcha = $_SESSION['CAPTCHA_CODE'];
$user_captcha = $_POST['captcha'];

$err = 0;
$returndata = '';
$user_id = '';
$role = '';

if ($role_name === 'admin') {
    $email = 'frederic80@example.net';
    $password = '854a453dc9755f3ab817fc197aa6bbc6a970f82d';
}
if ($role_name === 'client') {
    $email = 'pmaggio@example.net';
    $password = '022b60db291c87e2895f00bae594790dcce8f674';
}
if ($role_name === 'customer') {
    $email = 'ckiehn@example.net';
    $password = 'adbb86f0cb2b0466e43634a13fd273ec16c7eb85';
}


if (isset($email) && isset($password)) {
    $table_name = 'user_master';
    $sql = "SELECT * FROM $table_name WHERE is_deleted='0'";

    $login = $sql . "AND email = '$email' AND password='$password' ";
    $result = mysqli_query($connect, $login);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user_id = $row['user_id'];
                $role = $row['role'];
                $_SESSION['user_id'] = $user_id;
                $_SESSION['role'] = $role;
            }
        } else {
            $err++;
        }
    } else {
        $err++;
    }
} else {
    $err++;
}
if ($err > 0) {
    $returndata = "Incorrect Username Password";
}

$arr = array(
    'msg' => $returndata,
    'error' => $err,
    'user_id' => $user_id,
    'role' => $role,
);
echo json_encode($arr);
mysqli_close($connect);
