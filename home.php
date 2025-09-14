<?php include 'auth.php';?> 

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @ibn__aminu">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Graveyard Management System | Dashboard</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
	<?php include 'navbar.php';?> 
	<!-- Header container -->
	<div class="px-4 py-5 mt-5 text-center">
		<i class="fa fa-user-circle text-muted" style="font-size: 150px"></i>
		<h1 class="display-5 fw-bold text-color2"><?php echo $name;?>  </h1>
		<div class="col-lg-6 mx-auto">
		  <p class="lead mb-4">
              User Type : User<br>
		  </p>
		</div>
	</div>
	<!-- School News -->
	<section class="farko">
		<div class="container text-center mt-0 p-0">
			<div class="row">
				<div class="col-md-6  mb-3">
					<a href="profile" class="text-decoration-none">
						<div class="card shadow border-bottom-success py-4" style="border-radius: 10px">
							<div class="card-body p-3 text-success">
								<i class="fa fa-user " style="font-size: 50px"></i>
								<h3 class="text-dark text-center"> My Profile</h3>
							</div> 
						</div>
					</a>
				</div>
				<div class="col-md-6 mb-3">
					<a href="requests" class="text-decoration-none">
						<div class="card py-4 shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-success">
								<i class="fa fa-sitemap " style="font-size: 50px"></i>
								<h3 class="text-dark text-center"> My Requests</h3>
							</div> 
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- PROJECT HIRING -->
  </main>

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
      
  </body>
</html>
