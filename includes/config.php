<?php
defined("DB_SERVER") ? null : define("DB_SERVER", "localhost");
defined("DB_NAME")   ? null : define("DB_NAME", "service_app");
defined("DB_USER")   ? null : define("DB_USER", "root");
defined("DB_PASS")   ? null : define("DB_PASS", "");
$connect = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
session_start();
