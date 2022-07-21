<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>DIETITIAN PANEL</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link active" href="indexd.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="viewdietplanrequest.php">Diet Plan Request</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="userdietdetails.php">User Diet Details</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="userdiethistory.php">User Diet History</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="viewtrainerlist.php">Trainer's List</a>
                  </li>
                  <!--<li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Portfolio
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                     </div>
                  </li>-->
                  <!--<li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Blog
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                        <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                        <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                     </div>
                  </li>-->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     My Account
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="dprofile.php">Profile</a>
                        <a class="dropdown-item" href="changepassword.php">Change Password</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="../healthlogout.php">Logout</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>
	
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Add Training Sections
			</h1>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="indexd.php">Home</a>
				</li>
				<li class="breadcrumb-item active">Add Training Sections</li>
			</ol>
		</div>

      

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4 contact-left">
          <h3>Add Training Sections</h3>
          <form method="post" enctype="multipart/form-data">
            <div class="control-group form-group">
              <div class="controls">
                <label>Workout/Yoga:</label>
                <input type="text" class="form-control" name="wy" id="wy" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Trainer:</label>
                <select name="tname">
				        <option value="0">Choose Trainer</option>
						
		<?php
		include '../connection.php';
		$sql2="SELECT `name`,`tid` from `trainer` where status='1'";
        $res2=mysqli_query($con,$sql2);
        while($r2=mysqli_fetch_array($res2))

		{ 
		?>
				<option value="<?php echo $r2['tid'];?>"><?php echo $r2['name'];?></option>
				<?php
				}
				?>
				</select>
              </div>
            </div> 
            <div class="control-group form-group">
              <div class="controls">
                <label>Mode:</label>
                <input type="text" class="form-control" name="mode" id="mode" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Date:</label>
                <input type="date" class="form-control" min="<?= date('Y-m-d');?>" name="date" id="date" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Time:</label>
                <input type="link" class="form-control" name="time" id="time" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>AM/PM:</label>
                <input type="link" class="form-control" name="ampm" id="ampm" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Link:</label>
                <input type="link" class="form-control" name="link" id="link" required>
              </div>
            </div>
		        
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" name="b">Add</button>
			      <button type="submit" class="btn btn-primary" ><a href="viewdietplanrequest.php"  style="color:white;">Cancel</a></button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <?php
include '../connection.php';
if(isset($_POST['b']))
{
$wy=$_POST['wy'];
$tname=$_POST['tname'];
$link=$_POST['link'];
$date=$_POST['date'];
$time=$_POST['time'];
$ampm=$_POST['ampm'];
$mode=$_POST['mode'];
$sql="insert into tbl_trainingsec(wy,tname,link,date,time,ampm,mode,status) values('$wy','$tname','$link','$date','$time','$ampm','$mode','active')";
$result = mysqli_query($con, $sql);
echo "<script> alert('Successfully added training sections'); window.location.href='addtrainingsection.php';</script>";

							}
								
							?>
    <!-- /.container -->

    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
			</div>
		</div>
        <div class="container">
            <div class="footer-logo">
				<a href="#"><img src="images/footer-logo.png" alt="" /></a>
			</div>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="copyright text-center">ONLINE HEALTHY DIET PLANNING PLATFORM</p>
    
            <!--social_footer_ul ends here-->
        </div>
    </footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
</body>
</html>
<?php
}
else
header('location:../healthlogin.php');
?>