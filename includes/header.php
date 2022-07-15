<?php

$times = substr_count($_SERVER['PHP_SELF'], "/");
if ($times <= 2) {
    include('includes/constant.php');
} else {
    include('../includes/constant.php');
}
include(ROOT . 'includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= ROOT ?>images/favicon.ico">

    <?php
    $title = 'TriCore IT Services';
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == 1) {
            $title = 'Admin - Dashboard';
        }
        if ($_SESSION['role'] == 2) {
            $title = 'Client - Dashboard';
        }
    } ?>

    <title><?php echo $title; ?></title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="<?= ROOT ?>css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="<?= ROOT ?>css/style.css">
    <link rel="stylesheet" href="<?= ROOT ?>css/skin_color.css">
    <link rel="stylesheet" href="<?= ROOT ?>css/horizontal-menu.css">
    <link rel="stylesheet" href="<?= ROOT ?>css/custom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script src="../js/jquery.js"></script> -->
</head>