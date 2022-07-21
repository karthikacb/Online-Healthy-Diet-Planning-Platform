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
			<h1 class="mt-4 mb-3">Workout/Yoga Programs
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
				<li class="breadcrumb-item active">Workout/Yoga Programs</li>
			</ol>
		</div>

      

      
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Workout/Yoga Programs</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center"> Name</th>
								<th class="text-center">Trainer Name</th>
								<th class="text-center">Date</th>
								<th class="text-center">Time</th>
								<th class="text-center">Mode</th>
								 <th class="text-center">Link </th>
								 <th class="text-center">Action</th>
								 
								 
                            </tr>
                        </thead>
                        <tbody>
                        <?php
include '../connection.php';

$sql="select * from tbl_trainingsec WHERE status='active'";
$result = mysqli_query($con, $sql);
while($r=mysqli_fetch_array($result))
{
    $trainerid=$r['tname'];
    $sql2="select * from trainer where tid = $trainerid";
	$res12=mysqli_query($con,$sql2);
	$k=mysqli_fetch_array($res12);
    ?>
		<tr><td><?php echo $r['wy'];?></td>
		<td><?php echo $k['name'];?></td>
		<td><?php echo $r['date'];?></td>
		<td><?php echo $r['time'];?><?php echo $r['ampm'];?></td>
		<td><?php echo $r['mode'];?></td>
		<td><?php echo $r['link'];?></td>
        <td><a style="color:#F63" href="deletetrainingsections.php?id=<?php echo $r['trainid'];?>"><b>Delete</a></td></tr>
       </tr>
                      <?php
}
?>
				</tbody>
                    </table>
                    
                    
</div>
					<div class="account-dropdown__footer"></div>
	                

                </div>
      <!-- /.row -->

    </div>
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
