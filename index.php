<?php
include 'includes/constant.php';
include 'includes/config.php';
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    redirectTo('login.php');
}
if ($_SESSION['role'] == 3) {
    redirectTo('customer/index.php');
} else {
    redirectTo('admin/index.php');
}
