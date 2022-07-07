<?php
include '../includes/config.php';
include '../includes/constant.php';

$table = 'user_service_master';

// Table's primary key
$primaryKey = 'user_service_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array('db' => '`us`.`user_service_id`', 'dt' => 0, 'field' => 'user_service_id'),
    array('db' => '`s`.`service_name`',  'dt' => 1, 'field' => 'service_name'),
    array('db' => '`y`.`year_name`',   'dt' => 2, 'field' => 'year_name'),
    array('db' => '`us`.`price`',     'dt' => 3, 'field' => 'price'),
    array('db' => '`us`.`payment`',     'dt' => 4, 'field' => 'payment'),
    array('db' => '`us`.`status`',     'dt' => 5, 'field' => 'status'),
    array('db' => '`ud`.`first_name`',     'dt' => 6, 'field' => 'first_name'),
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

$joinQuery = "FROM `user_service_master` AS `us` JOIN `user_master` AS `um` ON (`us`.`_user_id` = `um`.`user_id`)  JOIN `services_master` AS `s` ON ( `s`.`service_id`= `us`.`_service_id`)  JOIN `financial_year_master` AS `y` ON ( `y`.`year_id`= `us`.`_year_id`) JOIN `user_details` AS `ud` ON ( `ud`.`_user_id`= `us`.`_assigned_to`)";
$extraWhere = "`um`.`is_deleted` = '0'";
// $groupBy = "`u`.`office`";
// $having = "`u`.`salary` >= 140000";

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere)
);
