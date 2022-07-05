<?php
include 'functions.php';
date_default_timezone_set('Asia/Kolkata');

$documents = ROOT . 'user_uploads/documents';
$profile_pic = ROOT . 'user_uploads/profile_pic';
$time = date("Y-m-d-H:i:s.u");

define('ROOT_DOCUMENTS', $documents);
define('ROOT_PROFILE_PIC', $profile_pic);
define('TIME', $time);
