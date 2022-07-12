<?php
include '../includes/config.php';
include '../includes/constant.php';

$sql = "SELECT DATE_FORMAT(created_at, '%Y/%m/%d') as date, day(created_at) AS i, sum(price) AS revenue
FROM user_service_master
WHERE status = 2 AND created_at > now() - INTERVAL 7 day
group by day(created_at)
order by (created_at) DESC";
if ($result = mysqli_query($connect, $sql))
    while ($row = mysqli_fetch_array($result)) {
        $data[] = array(
            $row['date'],
            $row['i'],
            $row['revenue'],
        );
    }
else {
    echo mysqli_error($connect);
}
echo json_encode($data);
