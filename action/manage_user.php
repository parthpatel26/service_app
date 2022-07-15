<?php
include '../includes/config.php';
include '../includes/constant.php';

if (isset($_POST['form_name'])) {
    if ($_POST['form_name'] === 'add_user') {
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $role = $_REQUEST['role'];

        $err = 0;
        $returndata = '';
        $user_id = '';

        if (isset($email) && isset($password)) {
            $table_name = 'user_master';
            $sql = "INSERT into $table_name (email, password, role, created_at) VALUES ('$email','$password','$role', '$time' )";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                $user_id = lastId($connect);
            } else {
                $returndata = mysqli_error($connect);
                $err++;
            }
        } else {
            $err++;
        }

        if (!empty($user_id)) {
            $table_name = 'user_details';
            $sql = "INSERT into $table_name (_user_id, first_name, last_name, created_at) VALUES ('$user_id','$first_name','$last_name','$time' )";
            $result = mysqli_query($connect, $sql);
            if ($result) {
            } else {
                $returndata = mysqli_error($connect);
                $err++;
            }
        } else {
            $err++;
        }
        if ($err == 0) {
            $returndata = "User Added Successfully";
        } else {
            $returndata = "Couldn't add user please try again..!";
        }


        $arr = array(
            'error' => $err,
            'msg' => $returndata,
            'user_id' => $user_id,
        );
        echo json_encode($arr);
        exit;
    }
}

mysqli_close($connect);
