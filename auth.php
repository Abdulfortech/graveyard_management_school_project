<?php
include 'connection.php';
session_start();
if (isset($_SESSION['userid'])) {
  $userid = $_SESSION['userid'];
}else {
  echo "<script>window.open('index', '_self')</script>";
}

  $userINFOR = $conn->query("SELECT * FROM users WHERE id='".$userid."' ") or die($conn->error);
    while ($row = $userINFOR->fetch_assoc()) {
    $fname = $row['fname'];
    $lname = $row['lname'];
    $name = $fname ." ". $lname;
    $dob = $row['dob'];
    $gender = $row['gender'];
    $lga = $row['lga'];
    $state = $row['state'];
    $address = $row['address'];
    $phone = $row['phone'];
    $email = $row['email'];
    $status = $row['status'];
    }
?>