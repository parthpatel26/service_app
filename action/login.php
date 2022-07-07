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
    $email = 'igerlach@example.net';
    $password = '2c5c7b112348b23dc7fe919ccbe1a41fdd7fd7fe';
}
if ($role_name === 'client') {
    $email = 'sondricka@example.net';
    $password = '56540f1a29f459069acbd751bf8045e68b491bbf';
}
if ($role_name === 'customer') {
    $email = 'lcrona@example.com';
    $password = '8793146f0c47dd017677b74342ff6b04';
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
