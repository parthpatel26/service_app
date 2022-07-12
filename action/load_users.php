<?php
include '../includes/config.php';
include '../includes/constant.php';

if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == 'getData') {
        $table = 'user_master';

        // Table's primary key
        $primaryKey = 'user_id';

        // Array of database columns which should be read and sent back to DataTables.
        // The `db` parameter represents the column name in the database, while the `dt`
        // parameter represents the DataTables column identifier. In this case simple
        // indexes
        $columns = array(
            array('db' => '`um`.`user_id`', 'dt' => 0, 'field' => 'user_id'),
            array('db' => '`um`.`email`',  'dt' => 1, 'field' => 'email'),
            array('db' => '`um`.`password`',  'dt' => 2, 'field' => 'password'),
            array('db' => '`um`.`role`',  'dt' => 3, 'field' => 'role',   'formatter' => function ($d, $row) {
                if ($d == 1) {
                    return $d = 'Admin';
                }
                if ($d == 2) {
                    return $d = 'Client';
                }
                if ($d == 3) {
                    return $d = 'Customer';
                }
            }),
            array('db' => '`ud`.`first_name`',  'dt' => 4, 'field' => 'first_name'),
            array('db' => '`ud`.`pan_number`',  'dt' => 5, 'field' => 'pan_number'),
            array('db' => '`ud`.`adhar_number`',  'dt' => 6, 'field' => 'adhar_number'),
            array('db' => '`um`.`status`',  'dt' => 7, 'field' => 'status'),
            array('db' => '`ud`.`created_at`',  'dt' => 8, 'field' => 'created_at'),


        );

        // SQL server connection information
        $sql_details = array(
            'user' => DB_USER,
            'pass' => DB_PASS,
            'db'   => DB_NAME,
            'host' => DB_SERVER
        );

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

        // require( 'ssp.class.php' );
        require(ROOT . 'assets/lib/DataTable.php');

        $joinQuery = "FROM `user_master` AS `um` JOIN `user_details` AS `ud` ON (`ud`.`_user_id` = `um`.`user_id`)";
        $extraWhere = "`um`.`is_deleted` = '0'";
        // $groupBy = "`u`.`office`";   
        // $having = "`u`.`salary` >= 140000";

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere)
        );

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
        $sql = "UPDATE user_master SET is_deleted='1' WHERE user_id='$id'";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo ('0');
        } else {
            echo (mysqli_error($connect));
        }
        exit;
    }
    if ($_POST['action'] == 'block_user' && $_POST['id']) {
        $id = $_POST['id'];
        $sql = "UPDATE user_master SET status='inactive' WHERE user_id='$id'";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo ('0');
        } else {
            echo (mysqli_error($connect));
        }
        exit;
    }
}
