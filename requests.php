<?php include 'auth.php';?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @Abdulfortech">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Graveyard Management System | My Requests</title>
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
        <div class="col-md-10">    
                        
		    <div class="container text-center mt-4 page-card">
            <h1 class="featurette-heading fw-bold mt-4 mb-1 text-success">My Requests</h1>
            <center>
                <a href="request" class="btn btn-success mb-3">New Request</a>
            </center>
                
                <table id="example1" class="table table-bordered table-striped text-start">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Request Code</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Date of Death</th>
                            <th>Size</th>
                            <th>Graveyard</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $requests = $conn->query("SELECT * FROM requests WHERE status=1 AND user_id=$userid  ORDER BY id DESC") or die($conn->error);
                            $count = 1;
                            foreach($requests as $request){
                        ?>
                        <tr>
                            <td><?= $count; ?></td>
                            <td><?= $request['code']?></td>
                            <td><?= $request['name']?></td>
                            <td><?= $request['gender'];?></td>
                            <td><?= $request['dob']?></td>
                            <td><?= $request['dod']?></td>
                            <td><?= $request['size']?></td>
                            <td><?= $request['graveyard']?></td>
                            <td>
                                <?php if($request['status'] == 1){echo '<span class="badge bg-success badge-pill">Active</span>';}
                                    else{echo '<span class="badge bg-warning badge-pill">Inactive</span>';}?>
                            </td>
                            <td>
                                <!-- <a href="request?id=<?= $request['request_id']?>" class="btn btn-sm btn-success shadow-sm">
                                    <i class="fa fa-eye fa-sm text-white"></i>
                                </a> -->
                                <a href="process.php?action=DeleteRequest&id=<?= $request['user_id']?>" class="btn btn-sm btn-danger shadow-sm">
                                    <i class="fa fa-trash fa-sm text-white"></i>
                                </a>  
                            </td>
                            
                        </tr>
                        <?php $count++;}?>
                    </tbody>
                </table>
            </div>
        </div>
        </center>
	</section>
	<!-- PROJECT HIRING -->
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
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
    </script>

      
  </body>
</html>
