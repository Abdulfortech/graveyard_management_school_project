<?php
include 'connection.php';
    session_start();
    if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
    }else {
    echo "<script>window.open('index', '_self')</script>";
    }

session_destroy();
echo "<script> window.open('index', '_self')</script>";

?>
