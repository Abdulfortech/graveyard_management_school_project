<?php 
    include 'auth.php';
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
	<title>Student Mobilizing App | Mobilization Status</title>
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
                <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">Mobilization Status</span></h1>
                <div class="card ">
                    <div class="card-body text-start">
                        <h3 class="text-center my-4">Mobilization Application</h3>
                        <h5>Applicant. : fdsfsdhf324q43</h5>
                        <h5>Application No. : fdsfsdhf324q43</h5>
                        <h5>Applied Before : fdsfsdhf324q43</h5>
                        <h5>Date of Application : fdsfsdhf324q43</h5>
                        <h5>Application Status. : fdsfsdhf324q43</h5>
                    </div>
                </div>
            </div>
        </div>
      </center>
    </section>
  </main>

<!--Footer-->

<!--Footer-->
    <footer class="pt-3 mt-4 text-muted border-top text-center">
        &copy; <?= date("Y")?> <a href="https://sgr.com.ng" target="_blank">SGR</a></p>
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