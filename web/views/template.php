<?php 

$path = TemplateController::path();

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation + Sidebar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- CSS -->

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/fontawesome-free/css/all.min.css">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/adminlte/adminlte.min.css">

  <!-- JS -->

  <!-- jQuery -->
  <script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 
</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
	<div class="wrapper">

		 <?php 

		 		include "modules/top.php";
		  	include "modules/navbar.php";
		   	include "modules/sidebar.php"; 

		  ?>

		  <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		    <!-- Content Header (Page header) -->
		    <div class="content-header">
		      <div class="container">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
		          </div><!-- /.col -->
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Home</a></li>
		              <li class="breadcrumb-item"><a href="#">Layout</a></li>
		              <li class="breadcrumb-item active">Top Navigation</li>
		            </ol>
		          </div><!-- /.col -->
		        </div><!-- /.row -->
		      </div><!-- /.container-fluid -->
		    </div>
		    <!-- /.content-header -->

		    <!-- Main content -->
		    <div class="content">
		      <div class="container">
		        <div class="row">
		          <div class="col-lg-6">
		            <div class="card">
		              <div class="card-body">
		                <h5 class="card-title">Card title</h5>

		                <p class="card-text">
		                  Some quick example text to build on the card title and make up the bulk of the card's
		                  content.
		                </p>

		                <a href="#" class="card-link">Card link</a>
		                <a href="#" class="card-link">Another link</a>
		              </div>
		            </div>

		            <div class="card card-primary card-outline">
		              <div class="card-body">
		                <h5 class="card-title">Card title</h5>

		                <p class="card-text">
		                  Some quick example text to build on the card title and make up the bulk of the card's
		                  content.
		                </p>
		                <a href="#" class="card-link">Card link</a>
		                <a href="#" class="card-link">Another link</a>
		              </div>
		            </div><!-- /.card -->
		          </div>
		          <!-- /.col-md-6 -->
		          <div class="col-lg-6">
		            <div class="card">
		              <div class="card-header">
		                <h5 class="card-title m-0">Featured</h5>
		              </div>
		              <div class="card-body">
		                <h6 class="card-title">Special title treatment</h6>

		                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		                <a href="#" class="btn btn-primary">Go somewhere</a>
		              </div>
		            </div>

		            <div class="card card-primary card-outline">
		              <div class="card-header">
		                <h5 class="card-title m-0">Featured</h5>
		              </div>
		              <div class="card-body">
		                <h6 class="card-title">Special title treatment</h6>

		                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		                <a href="#" class="btn btn-primary">Go somewhere</a>
		              </div>
		            </div>
		          </div>
		          <!-- /.col-md-6 -->
		        </div>
		        <!-- /.row -->
		      </div><!-- /.container-fluid -->
		    </div>
		    <!-- /.content -->
		</div>
	  <!-- /.content-wrapper -->

	  
		  <!-- /.control-sidebar -->
		 <?php 

		 	include "modules/footer.php";   		

		?>
 
	</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>

</body>
</html>
