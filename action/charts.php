<?php
include '../includes/config.php';
include '../includes/constant.php';

$chart_name = '';
$period = 'week';
$record = array();


function x_axis($date, $format)
{
    return date_format($date, $format);
}

function rev_stat_chart($connect, $period)
{
    $data = array();
    if ($period == 'week') {
        $period = 'day';
        $n = 7;
        $format = 'd M';
    }
    if ($period == 'month') {
        $period = 'day';
        $n = 30;
        $format = 'd M';
    }
    if ($period == 'year') {
        $period = 'month';
        $n = 12;
        $format = 'M';
    }

    $sql = "SELECT DATE_FORMAT(created_at, '%Y-%m-%d') as date, $period(created_at) AS i, sum(price) AS revenue
    FROM user_service_master
    WHERE status = 2 AND created_at > now() - INTERVAL $n $period
    group by $period(created_at)
    order by (created_at) ASC";

    if ($result = mysqli_query($connect, $sql)) {
        $total = 0;
        while ($row = mysqli_fetch_array($result)) {
            $total +=  $row['revenue'];
            $date =  date_create($row['date']);
            $data['chart'][] = array(
                x_axis($date, $format),
                $row['i'],
                $row['revenue'],
            );
        }
        $data['total'] = $total;
    }
    return $data;
}
function customer_chart($connect)
{

    $sql = "SELECT DAY(created_at) AS i, count(user_id) AS customers
    FROM user_master
    WHERE is_deleted = '0' AND MONTH(created_at) = MONTH(now()) AND YEAR(created_at) = YEAR(now())
    group by DAY(created_at)
    order by (created_at) ASC";

    if ($result = mysqli_query($connect, $sql)) {
        $total = 0;
        while ($row = mysqli_fetch_array($result)) {
            $total +=  $row['customers'];
            $data['chart'][] = array(
                $row['i'],
                $row['customers'],
            );
        }
        $data['total'] = $total;
    }
    return $data;
}
function total($connect)
{
    $info = array();

    $sum = "SELECT SUM(price) FROM user_service_master WHERE is_deleted='0'";

    $sum1 = $sum . "AND payment = 2";
    $revenue = intval(mysqli_fetch_column(mysqli_query($connect, $sum1)));

    $sum2 = $sum . "AND payment = 3";
    $incoming = intval(mysqli_fetch_column(mysqli_query($connect, $sum2)));

    $count = "SELECT COUNT(user_service_id) FROM user_service_master WHERE is_deleted='0'";

    $count1 = $count . "AND payment = 2";
    $sales = intval(mysqli_fetch_column(mysqli_query($connect, $count1)));

    $count2 = $count . "AND status = 3";
    $completed = intval(mysqli_fetch_column(mysqli_query($connect, $count2)));


    $info['revenue'] = $revenue;
    $info['incoming'] = $incoming;
    $info['sales'] = $sales;
    $info['completed'] = $completed;
    return  $info;
}

if (isset($_REQUEST['period']) && isset($_REQUEST['chart'])) {

    $period = $_REQUEST['period'];
    $chart_name = $_REQUEST['chart'];

    if ($chart_name == 'rev_stat') {
        $record['rev_stat'] = rev_stat_chart($connect, $period);
        echo json_encode($record);
        exit;
    }
} else {
    $record['stats'] = total($connect);
    $record['rev_stat'] = rev_stat_chart($connect, $period, '');
    $record['customers'] = customer_chart($connect);
    echo json_encode($record);
}
