<?php 
    include 'auth.php';
    // generate reg number
    $code = "GRV/".strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 6));
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @Abdulfortech">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Graveyard Management System | New Request</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
    <link rel="stylesheet" href="vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="admin/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="admin/vendor/datatables/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
    <?php include 'navbar.php';?>
    <section class="farko p-3 mt-5">
      <center>
        <div class="col-md-6">              
            <div class="container text-center mt-5 page-card">
                <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">Request A Placement In Graveyard</span></h1>
                <form method="POST" action="process.php">
                    <input type="text" value="<?= $userid?>" name="id" hidden>
                    <div class="form-group text-start">
                        <label for="floatingInput">Registration No.</label>
                        <input type="text" class="form-control" name="code" value="<?= $code ?>" readonly>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-12">
                            <label for="floatingInput">Name of the Deceased</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-4">
                            <label for="floatingInput"> Gender</label>
                            <select class="form-control" name="gender" required>
                                <option selected value="">Choose..</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="floatingInput">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" required>
                        </div>
                        <div class="col-md-4">
                            <label for="floatingInput">Date of Death</label>
                            <input type="date" class="form-control" name="dod" required>
                        </div>
                    </div>
                    <div class="form-group text-start row">
                        <div class="col-md-4">
                            <label for="floatingInput">Size</label>
                            <input type="text" class="form-control" name="size" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="floatingInput">GraveYard</label>
                            <input type="text" class="form-control" name="graveyard" placeholder="Makabarta e.g Tarauni" required>
                        </div>
                        <div class="col-md-4">
                            <label for="floatingInput">State of Origin</label>
                            <select class="form-control" name="state" required>
                                <option selected value="">Choose..</option>
                                <?php include 'state-list.php';?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="floatingInput">Address</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                    </div>
                    
                    <button class=" btn btn-lg btn-success mt-4" type="submit" name="addRequest">Submit</button>
                </form>


            </div>
        </div>
      </center>
    </section>
  </main>

<!--Footer-->

<!--Footer-->
    <footer class="pt-3 mt-4 text-muted border-top text-center">
        &copy; <?= date("Y")?> <a href="https://abdulfortech.com" target="_blank">Abdulfortech</a></p>
    </footer>
<!--/.Footer-->

<!-- scripts -->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendor/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/js/bootstrap.min.js"></script>  
<!-- lga plugin -->
<script src="vendor/lga/lga.min.js"></script>
<!-- overlayScrollbars -->
<script src="vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
  <?php if (isset($_SESSION['msg'])) { $msg = $_SESSION['msg'];?>
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
    <!-- DataTables -->
    <script src="admin/vendor/datatables/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/vendor/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/vendor/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="admin/vendor/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
        });
    </script>

      
  </body>
</html>
