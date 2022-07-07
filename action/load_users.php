<?php
include '../includes/config.php';
include '../includes/constant.php';

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'load_users') {

        $return_arr = array();

        $sql = "SELECT * FROM user_master AS U INNER JOIN user_details AS D ON U.user_id = D._user_id WHERE U.is_deleted='0'";

        $result = mysqli_query($connect, $sql);
        $users = array();

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['user_id'];
            $email = $row['email'];
            $password = $row['password'];
            $role = $row['role'];
            $pan = $row['pan_number'];
            $adhar = $row['adhar_number'];
            $status = $row['status'];
            $created = $row[26];
            $users[] = array(
                "id" => $id,
                "email" => $email,
                "password" => $password,
                "role" => $role,
                "pan" => $pan,
                "adhar" => $adhar,
                "status" => $status,
                "created" => $created,
            );
        }

        $return_arr['users'] = $users;

        print_r(json_encode($return_arr));
        exit;
    }
    if ($_POST['action'] == 'count_user') {
        $info = array();

        $count = "SELECT COUNT(user_id) FROM user_master WHERE is_deleted='0'";

        $total = intval(mysqli_fetch_column(mysqli_query($connect, $count)));

        $count1 = $count . "AND role='1'";
        $admin = intval(mysqli_fetch_column(mysqli_query($connect, $count1)));

        $count2 = $count . "AND role='2'";
        $client = intval(mysqli_fetch_column(mysqli_query($connect, $count2)));

        $count3 = $count . "AND role='3'";
        $customer = intval(mysqli_fetch_column(mysqli_query($connect, $count3)));


        $info['total'] = $total;
        $info['admin'] = $admin;
        $info['client'] = $client;
        $info['customer'] = $customer;

        print_r(json_encode($info));
        exit;
    }

    if ($_POST['action'] == 'delete_user' && $_POST['id']) {
        $id = $_POST['id'];
        print_r(json_encode($id));
        exit;
    }
    if ($_POST['action'] == 'block_user' && $_POST['id']) {
        $id = $_POST['id'];
        print_r(json_encode($id));
        exit;
    }
}
