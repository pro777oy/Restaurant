<?php
include('db.php');
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Restaurant Management</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="admin/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="admin/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="admin/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><span>ADMIN</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle"  href="logout.php">
								<i class="icon-lock"></i>
								Logout
							</a>
							
						</li>
						<!-- start: Notifications Dropdown -->
						
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						
					</ul>		
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="dashboard.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						
						<li>
							<li><a href="home.php"><i class="halflings-icon list"></i><span class="hidden-tablet">Home</span></a></li>
						</li>

						<li>
							<li><a href="aboutus.php"><i class="halflings-icon list"></i><span class="hidden-tablet">About us</span></a></li>
						</li>

						<li>
							<li><a href="blog.php"><i class="halflings-icon list"></i><span class="hidden-tablet">Blog</span></a></li>
						</li>

						<li>
							<li><a href="menu.php"><i class="halflings-icon list"></i><span class="hidden-tablet">Menu</span></a></li>
						</li>

						<li>
							<li><a href="newseditform.php"><i class="halflings-icon list"></i><span class="hidden-tablet">News</span></a></li>
						</li>

						<li>
							<li><a href="subscribe.php"><i class="halflings-icon list"></i><span class="hidden-tablet">Subscribe User</span></a></li>
						</li>

						<li>
							<li><a href="message.php"><i class="halflings-icon list"></i><span class="hidden-tablet"> User Message</span></a></li>
						</li>

						<li>
							<li><a href="contacteditform.php"><i class="halflings-icon list"></i><span class="hidden-tablet"> Contact Info</span></a></li>
						</li>
						
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<!------------------------------------------>

		
			
    <!-- Modal content-->
    <?php

 $id = $_GET['id'];
$get_data = "SELECT * FROM menu WHERE id = $id";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{

	
	$name = $row['name'];
	$description = $row['description'];
	$price = $row['price'];
	echo "
      <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Update The Data</h4> 
      </div>

      <div class='modal-body'>
        <form action='menuedit.php?id=$id' method='post'>

             
        	

        	

        	<div class='form-group'>
        		<label>Name</label>
        		<input type='text' name='name' class='form-control' value='$name'>
        	</div>

        	<div class='form-group'>
        		<label>Description</label>
        		<textarea id='w3review' name='description' rows='4' cols='50'>$description</textarea>
        	</div>

        	<div class='form-group'>
        		<label>Price</label>
        		<input type='text' name='price' class='form-control' value='$price'>
        	</div>

        	
        	 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
        	
        </form>
      </div>

    </div>

  </div>
</div>


	";

}

?>

			<!------------------------------------------>
				
						
	<!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->



		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	
	
	<footer>

		<p>
			
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Administration</a></span>
		</p>

	</footer>
	
	
	<!-- start: JavaScript-->

		<script src="admin/js/jquery-1.9.1.min.js"></script>
	<script src="admin/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="admin/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="admin/js/jquery.ui.touch-punch.js"></script>
	
		<script src="admin/js/modernizr.js"></script>
	
		<script src="admin/js/bootstrap.min.js"></script>
	
		<script src="admin/js/jquery.cookie.js"></script>
	
		<script src='admin/js/fullcalendar.min.js'></script>
	
		<script src='admin/js/jquery.dataTables.min.js'></script>

		<script src="admin/js/excanvas.js"></script>
	<script src="admin/js/jquery.flot.js"></script>
	<script src="admin/js/jquery.flot.pie.js"></script>
	<script src="admin/js/jquery.flot.stack.js"></script>
	<script src="admin/js/jquery.flot.resize.min.js"></script>
	
		<script src="admin/js/jquery.chosen.min.js"></script>
	
		<script src="admin/js/jquery.uniform.min.js"></script>
		
		<script src="admin/js/jquery.cleditor.min.js"></script>
	
		<script src="admin/js/jquery.noty.js"></script>
	
		<script src="admin/js/jquery.elfinder.min.js"></script>
	
		<script src="admin/js/jquery.raty.min.js"></script>
	
		<script src="admin/js/jquery.iphone.toggle.js"></script>
	
		<script src="admin/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="'admin/js/jquery.gritter.min.js"></script>
	
		<script src="admin/js/jquery.imagesloaded.js"></script>
	
		<script src="admin/js/jquery.masonry.min.js"></script>
	
		<script src="admin/js/jquery.knob.modified.js"></script>
	
		<script src="admin/js/jquery.sparkline.min.js"></script>
	
		<script src="admin/js/counter.js"></script>
	
		<script src="admin/js/retina.js"></script>

		<script src="admin/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
