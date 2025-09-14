<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu">
	<meta name="twitter handle" content="Abdulfortech">
	<title>Graveyard Management System | Sign In</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
  <!-- Bootstrap core CSS -->
  <link href="vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- fontawesome -->
  <link href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body class="">
  <main> 
    <center>
        <h2 class="text-center text-success fw-bold mt-5">Graveyard Management System</h2>
      <div class="col-md-4 py-5">
          <div class="card bg-light card-success p-3">
            <center><i class="fa fa-user-circle text-success" style="font-size: 80px;"></i></center>
            <h3 class="text-success text-center font-weight-bold">User Sign Up</h3>
            <form role="form" method="POST" action="log.php" id="quickForm">
              <div class="card-body text-start p-0">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label>Firstname</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                  </div>
                  <div class="col-md-6">
                    <label>Lastname</label>
                    <input type="text" name="lname" class="form-control" placeholder="First Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email address" required>
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>  
                <center><input type="submit" name="signup" class="btn btn-success mt-4 mb-3" value="Sign Up"></center>
                <p class="text-center text-success">Have account ? <a href="index">Sign In</a></p>
              </div>
            </form>
          </div>
      </div>
    </center>
  </main>

<!-- scripts -->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendor/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/js/bootstrap.min.js"></script>  
<!-- overlayScrollbars -->
<script src="vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
  <?php session_start(); if (isset($_SESSION['msg'])) { $msg = $_SESSION['msg'];?>
  <script type="text/javascript">
      $(document).ready(function() {
          $.notify({
          title: "<b>Alert :</b>",
          message: "<?= $msg?>",
          icon: 'fa fa-bell',
          type: "info"
          });
      });
  </script>
  <?php  unset($_SESSION['msg']); }?>

      
  </body>
</html>
