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
	<title>OCRS - Classes</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="../vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="../vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
    <link rel="stylesheet" href="../vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendor/datatables/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
    <?php include 'navbar.php';
        if($_GET){
            $classid = $_GET['id'];
        }elseif (isset($_POST['id'])) {
            $classid = $_POST['id'];
        }else{
            header("Location:classs");
        }
          $classINFOR = $conn->query("SELECT * FROM classes WHERE class_id='".$classid."' ") or die($conn->error);
          while ($row = $classINFOR->fetch_assoc()) {
            $title = $row['title'];
            $code = $row['code'];
            $status = $row['status'];
          }
    ?>
	<!-- Featured articles -->
	<section class="farko p-3 mt-5">
        <center>
        <div class="col-md-5">    
                        
		    <div class="container text-center mt-4 page-card">
            <h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">Edit <span class="text-color2">Class</span></h1>
            <form method="POST" action="process.php">
                <input type="text" value="<?= $classid?>" name="id" hidden>
                <div class="form-group text-start">
                    <label for="floatingInput">Class Title</label>
                    <input type="text" class="form-control" value="<?= $title?>" name="name">
                </div>
                <div class="form-group text-start mb-5">
                    <label for="floatingInput">Class Code</label>
                    <input type="text" class="form-control" value="<?= $code?>" name="code" readonly>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="editClass">Save Class</button>
            </form>
            </div>
        </div>
        </center>
	</section>
  </main>

    <!--Footer-->
        <footer class="pt-3 mt-4 text-muted border-top text-center">
            &copy; <?= date("Y")?> <a href="https://sgr.com.ng" target="_blank">SGR</a></p>
        </footer>
    <!--/.Footer-->

    <!-- scripts -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendor/js/bootstrap.bundle.min.js"></script> 
    <script src="../vendor/js/bootstrap.min.js"></script>  
    <!-- overlayScrollbars -->
    <script src="../vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
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
    <script src="../vendor/datatables/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendor/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendor/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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
