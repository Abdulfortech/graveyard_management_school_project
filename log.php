<?php 
include 'connection.php';
session_start();
// sign up
if(isset($_POST['signup'])){
  $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
  $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = md5($_POST['password']);
  $status =1;
  $checkEmail = $conn->query("SELECT * FROM users WHERE email='".$email."' ");
  if(mysqli_num_rows($checkEmail) == 0){ 
    $query = $conn->query("INSERT INTO users (fname, lname, email, phone, password, status) VALUE('$fname', '$lname', '$email', '$phone', '$password', '$status')") OR die($conn->error);
    if ($query) {
      $_SESSION['userid'] = $conn->insert_id;
      // alert message
      $_SESSION['msg'] = 'Account created successfully. Please complete your profile';
      echo "<script> window.open('profile', '_self')</script>";
    }else{
      // alert message
      $_SESSION['msg'] = 'There is problem. Try again later';
      echo "<script> window.open('signup', '_self')</script>";
    }
  }else{
    // alert message
    $_SESSION['msg'] = 'The email already exist';
    echo "<script> window.open('signup', '_self')</script>";
  }
   
}

// Sign in
if(isset($_POST['signin'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  // // verify
  $query = $conn->query("SELECT * FROM users WHERE email='".$username."' and password='".$password."' and status='1'");
  // if the record exist
  $result = mysqli_num_rows($query);
  if($result === 1) {
    // fetching user id
    while($row = $query->fetch_assoc()){
      $userid = $row['id'];
    }
    // preparing data for login
    $_SESSION['userid'] = $userid;
    echo "<script>window.open('home', '_self')</script>";
  }else{
    $_SESSION['msg'] = 'There is problem try again later.';
    echo "<script>window.open('index', '_self')</script>";
  }

}

?>