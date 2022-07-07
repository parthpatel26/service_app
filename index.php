<?php
session_start();
session_destroy();
include 'includes/constant.php';
if (!isset($_SESSION['user_id']) && !isset($_SESSION['role'])) {
    redirectTo('login.php');
}
