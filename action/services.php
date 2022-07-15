<?php
include '../includes/config.php';
include '../includes/constant.php';

// echo '<pre>';
// print_r($_REQUEST);
// echo '</pre>';
$table = 'user_service_master';

function get_enum($column_name, $table, $connect)
{
    $sql = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
WHERE TABLE_NAME = '$table' AND COLUMN_NAME = '$column_name'";

    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    $row = mysqli_fetch_array($result);
    $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE']) - 6))));
    return  $enumList;
}
$enum  = get_enum('status', $table, $connect);

if (isset($_REQUEST['action'])) {
    if (($_REQUEST['action'] == 'update_service')) {
        $name = $_REQUEST['table'];
        $id = $_REQUEST['id'];
        $value = $_REQUEST['value'];
        $column = 'status';

        switch ($value) {
            case "false":
                $status = 2;
                break;
            case "true":
                $status = 1;
                break;
        }

        switch ($name) {
            case "year":
                $table = 'financial_year_master';
                $id_column = 'year_id';
                break;
            case "service":
                $table = 'services_master';
                $id_column = 'service_id';
                break;
        }


        $sql  = "UPDATE  $table
        SET $column = $status, modified_at = '$time'
        WHERE $id_column = $id";

        $result = mysqli_query($connect, $sql);

        if ($result) {
            echo '1';
        } else {
            echo ("Error description: " . mysqli_error($connect));
        }
        exit;
    }

    if (($_REQUEST['action'] == 'update')) {
        $service_id = $_REQUEST['service_id'];
        $value = $_REQUEST['value'];
        $column = $_REQUEST['column'];

        $sql  = "UPDATE  $table
        SET $column = '$value', modified_at = '$time'
        WHERE user_service_id = $service_id";

        $result = mysqli_query($connect, $sql);

        if ($result) {
            echo 'Updated ' .  $column . ' to' .  $value . ' at service id >>>' . $service_id;
        } else {
            echo ("Error description: " . mysqli_error($connect));
        }
        print_r($column);
        exit;
    }
    if (($_REQUEST['action'] == 'service_filters') || ($_REQUEST['action'] == 'load_services')) {
        $filters = array();
        $service = array();
        $year = array();
        $assigned_to = array();

        $sql = "SELECT * FROM services_master WHERE is_deleted = '0'";
        $result = mysqli_query($connect, $sql);

        while ($row = mysqli_fetch_array($result)) {
            $service[] = array(
                "id" => $row['service_id'],
                "name" => $row['service_name'],
                "price" => $row['price'],
                "status" => $row['status'],
            );
        }
        $sql = "SELECT * FROM financial_year_master WHERE is_deleted = '0'";
        $result = mysqli_query($connect, $sql);

        while ($row = mysqli_fetch_array($result)) {
            $year[] = array(
                "id" => $row['year_id'],
                "name" => $row['year_name'],
                "status" => $row['status'],
            );
        }
        if (($_REQUEST['action'] == 'load_services')) {
            $filters['service'] = $service;
            $filters['year'] = $year;
            print_r(json_encode($filters));
            exit;
        }

        $sql = "SELECT * FROM user_master AS um JOIN user_details AS ud ON (um.user_id = ud._user_id) WHERE um.is_deleted = '0' AND um.role = '2' ";
        $result = mysqli_query($connect, $sql);

        while ($row = mysqli_fetch_array($result)) {
            $assigned_to[] = array(
                "id" => $row['user_id'],
                "name" => $row['first_name'],
            );
        }

        $filters['service'] = $service;
        $filters['year'] = $year;
        $filters['assigned_to'] = $assigned_to;
        $filters['status'] = get_enum('status', $table, $connect);
        $filters['payment'] = get_enum('payment', $table, $connect);

        print_r(json_encode($filters));
        exit;
    }
}


// Table's primary key
$primaryKey = 'user_service_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = array(
    array('db' => '`us`.`user_service_id`', 'dt' => 0, 'field' => 'user_service_id'),
    array('db' => '`us`.`_user_id`',  'dt' => 1, 'field' => '_user_id'),
    array('db' => '`s`.`service_name`',  'dt' => 2, 'field' => 'service_name'),
    array('db' => '`y`.`year_name`',   'dt' => 3, 'field' => 'year_name'),
    array(
        'db' => '`us`.`price`',     'dt' => 4, 'field' => 'price'
    ),
    array(
        'db' => '`us`.`payment`', 'dt' => 5, 'field' => 'payment',
        'formatter' => function ($d, $row) {
            $d = str_replace("_", " ", $d);
            return ucwords($d);
        }
    ),
    array(
        'db' => '`us`.`status`',     'dt' => 6, 'field' => 'status',
        'formatter' => function ($d, $row) {
            $d = str_replace("_", " ", $d);
            return $d = ucwords($d);
        }
    ),
    array('db' => '`ud`.`first_name`',     'dt' => 7, 'field' => 'first_name'),
    array('db' => '`us`.`created_at`',     'dt' => 8, 'field' => 'created_at'),
    array('db' => '`us`.`modified_at`',     'dt' => 9, 'field' => 'modified_at'),
    array('db' => '`us`.`invoice_file`',     'dt' => 10, 'field' => 'invoice_file'),
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

$joinQuery = "FROM `user_service_master` AS `us` JOIN `user_master` AS `um` ON (`us`.`_user_id` = `um`.`user_id`)  JOIN `services_master` AS `s` ON ( `s`.`service_id`= `us`.`_service_id`)  JOIN `financial_year_master` AS `y` ON ( `y`.`year_id`= `us`.`_year_id`) JOIN `user_details` AS `ud` ON ( `ud`.`_user_id`= `us`.`_assigned_to`) ";
$extraWhere = "`um`.`is_deleted` = '0'";
// $groupBy = "`u`.`office`";   
// $having = "`u`.`salary` >= 140000";

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere)
);
