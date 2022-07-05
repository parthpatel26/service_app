<?php
include '../includes/config.php';

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$captcha = $_SESSION['CAPTCHA_CODE'];
$user_captcha = $_POST['captcha'];
echo $email;
$err = 0;

if (!empty($user_captcha)) {
    $sql = "SELECT * FROM user_master WHERE is_deleted='0'";
    $sql .= "AND email = '$email' AND password='$password' ";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $role = $row['_category_id'];
        }
    }
    if ($result) {
        $returndata = "Data Added Successfully";
    } else {
        $err++;
        $returndata = "Couldn't add data";
    }
} else {
    $err++;
    $returndata = "Couldn't add data";
}

$arr = array(
    'msg' => $returndata,
    'error' => $err
);
echo json_encode($arr);
mysqli_close($connect);
