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
	<title>OCRS - Courses</title>
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
    <?php include 'navbar.php';
        $regs = $conn->query("SELECT * FROM courses_reg WHERE status=1  and student_id=$studentid") or die($conn->error);
        $countReg = mysqli_num_rows($regs);
    ?> 
	<!-- Section -->
	<section class="farko p-3 mt-5">
      <center>
        <div class="col-md-10">              
		    <div class="container text-center mt-4 page-card">
                <h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">Register <span class="text-color2">a Course</span></h1>
                <form method="POST" action="process.php">
                    <input type="text" value="<?= $studentid?>" name="id" hidden>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-6">
                            <label for="floatingInput">Course</label>
                                <select class="form-control" name="course" required>
                                    <option value="">Choose..</option>
                                    <?php  $courses = $conn->query("SELECT * FROM courses WHERE status=1 ") or die($conn->error);
                                        while ($row = $courses->fetch_assoc()) {
                                            echo '<option value="'.$row['course_id'].'">'.$row['title'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="floatingInput">Metric Number</label>
                                <input type="text" class="form-control" value="<?= $reg?>" name="reg" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="floatingInput">Class</label>
                                <select class="form-control" name="level" required>
                                    <option><?= $level?></option>
                                    <?php  $classes = $conn->query("SELECT * FROM classes WHERE status=1 ") or die($conn->error);
                                        while ($row = $classes->fetch_assoc()) {
                                            echo '<option value="'.$row['class_id'].'">'.$row['title'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="floatingInput">Semester</label>
                                <select class="form-control" name="semester" required>
                                    <option value="">Choose..</option>
                                    <option>1st Semester</option>
                                    <option>2nd Semester</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="floatingInput">Seession</label>
                                <select class="form-control" name="session" required>
                                    <option value="">Choose..</option>
                                    <?php  $sessions = $conn->query("SELECT * FROM sessions WHERE status=1 ORDER BY session_id DESC") or die($conn->error);
                                        while ($row = $sessions->fetch_assoc()) {
                                            echo '<option>'.$row['title'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php if ($countReg >= 9) {
                        echo '<button class=" btn btn-lg btn-primary mt-4" type="submit" name="addCourse" disabled>Save</button> 
                        <p class="text-danger">Note! Only 9 courses are allowed to be registered</p>';
                        }else{
                            echo '<button class=" btn btn-lg btn-primary mt-4" type="submit" name="addCourse">Save</button>';
                        }?>
                </form>

                <hr>

                <h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">All Registered <span class="text-color2">Courses</span></h1>
                <table id="example1" class="table table-bordered table-striped text-start">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Course </th>
                            <th>Metric Number</th>
                            <th>Class</th>
                            <th>Semester</th>
                            <th>Session</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 1;
                            foreach($regs as $reg){
                        ?>
                        <tr>
                            <td><?= $count; ?></td>
                            <td>
                                <?php $course = $conn->query("SELECT * FROM courses WHERE course_id= ".$reg['course_id']." ");
                                    $row1 = mysqli_fetch_array($course);
                                    echo $row1['title'];
                                ?>
                            </td>
                            <td><?= $reg['reg']?></td>
                            <td><?= $reg['class']?></td>
                            <td><?= $reg['semester']?></td>
                            <td><?= $reg['session']?></td>
                            <td>
                                <?php if($reg['status'] == 1){echo '<span class="badge bg-success badge-pill">Active</span>';}
                                    else{echo '<span class="badge bg-warning badge-pill">Inactive</span>';}?>
                            </td>
                            <td>
                                <a href="process.php?action=DeleteReg&id=<?= $reg['creg_id']?>" class="btn btn-sm btn-danger shadow-sm">
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
