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
			<h1 class="mt-4 mb-3">Trainer's List
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
				<li class="breadcrumb-item active">Trainer's List</li>
			</ol>
		</div>

      

      
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Trainers</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center"> Name</th>
								<th class="text-center">Age</th>
								<th class="text-center">Gender</th>
								<th class="text-center">Contact</th>
								<th class="text-center">Email</th>
								 <th class="text-center">Address </th>
								 <th class="text-center">Category</th>
								 <th class="text-center">Id-Proof</th>
								 <th class="text-center">Image</th>
								 <th class="text-center">Certificate</th>
								 
                            </tr>
                        </thead>
                        <tbody>
                        <?php
						
include '../connection.php';
$sql3="select * from trainer WHERE status=1";
$res = mysqli_query($con,$sql3);
//$r = mysqli_fetch_assoc($res);
while($r=mysqli_fetch_array($res))
{
$id=$r['category'];
$sql1="select * from category WHERE cid=$id";
$res1 = mysqli_query($con,$sql1);
$r1 = mysqli_fetch_array($res1);
?>
		<tr><td><?php echo $r['name'];?></td>
        <td><?php echo $r['age'];?></td>
     <td><?php echo $r['gender'];?></td>
	 <td><?php echo $r['number'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $r['address'];?></td>
	 <td><?php echo $r1['cname'];?></td>
	 <td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100"></td>
	 <td><img src="../uploads/<?php echo $r['photo'];?>" width="100" height="100"></td>
	 <td><img src="../uploads/<?php echo $r['certificate'];?>" width="100" height="100"></td></tr>
                      <?php
}
?>
				</tbody>
                    </table>
                    <div>
                    <button type="submit" class="btn btn-primary"><a href="addtrainingsection.php" style="color:white;">Add Training Sections</a></button>
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
