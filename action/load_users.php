<?php
include '../includes/config.php';
include '../includes/constant.php';

$sql = "SELECT * FROM user_master AS U INNER JOIN user_details AS D ON U.user_id = D._user_id WHERE U.is_deleted='0'";
// $sql .= " WHERE is_deleted='0' ";


// $sql1 = "SELECT COUNT(*) FROM user_master";



// $limit = 50;
// if (isset($_GET["page"])) {
//     $page_number  = $_GET["page"];
// } else {
//     $page_number = 1;
// };
// $start = ($page_number - 1) * $limit;

// $result1 = mysqli_query($conn, $sql1);
// $row = mysqli_fetch_row($result1);
// $total_records = $row[0];
// $total_pages = ceil($total_records / $limit);

if (!empty($_GET["search"])) {
    $search  = $_GET["search"];
    $sql .=  " AND gender='$search' ";
    $sql1 .= " WHERE gender='$search'";
}

// $sql .= " LIMIT $start, $limit ";
// $result = mysqli_query($conn, $sql);

////// test code //////////////

$srNo = 0;
$return_arr = array();

$result = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_array($result)) {
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';

    $id = $row['user_id'];
    $email = $row['email'];
    $password = $row['password'];
    $pan = $row['pan_number'];
    $adhar = $row['adhar_number'];
    $status = $row['status'];
    $created = $row[26];

    $return_arr[] = array(
        "id" => $id,
        "email" => $email,
        "password" => $password,
        "pan" => $pan,
        "adhar" => $adhar,
        "status" => $status,
        "created" => $created,
    );
}
echo json_encode($return_arr);
