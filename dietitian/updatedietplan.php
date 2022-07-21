<?php      
    include '../connection.php';
    error_reporting(0);
    $postid1 = $_GET['postid'];
    $did = $_GET['did'];
    $sql = "select * from `postsolution` where postid='$postid1' and detailid='$did'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
   //  $image1 = $row['image'];
    $dwm1 = $row['dwm'];
   //  $weight1 = $row['weight'];
   //  $targetweight = $row['targetweight'];
   //  $sugar1 = $row['sugar'];
   //  $bp1 = $row['bp'];
   //  $cho1 = $row['cho'];
   //  $habits1 = $row['habits'];
	// $dietrequired1 = $row['dietrequired'];
	// $disease1 = $row['disease'];
   //  $discription1 = $row['discription'];
	// //$datee=$row['updt'];
	// $da = $row['date'];
    

    if(isset($_POST['submit']))
    {
    $postid=$_GET['postid'];
	// $image = $_POST['image'];
   $file=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/".$file);
$dwm=$_POST['dwm'];
	//$dwm= $_POST['dwm'];  
   //  $weight = $_POST['weight'];
   //  $targetweight = $_POST['targetweight'];
   //  $sugar = $_POST['sugar'];
   //  $bp = $_POST['bp'];
   //  $cho = $_POST['cho'];
   //  $habits = $_POST['habits'];
   //  $dietrequired = $_POST['dietrequired'];
   //  $disease = $_POST['disease'];
   //  $discription = $_POST['discription'];
        //$s="INSERT INTO 'plandietdetailspr'('p_id','age','weight','dietrequired','habits','disease','discription','updt') values('$detailid','$age','$weight','$dietrequired','$habits','$disease','$discription','$datee')";
		
		$df="INSERT INTO `solutionbackup`(`postid`, `image`, `dwm`) VALUES ('$postid','$file','$dwm')";
        $dm=mysqli_query($con,$df);
		mysqli_query($con,"UPDATE `postsolution` SET `postid`='$postid', `image`='$file', `dwm`='$dwm' where `postid`='$postid'");
    
            header('location:userdietdetails.php');
     }
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
			<h1 class="mt-4 mb-3">Update Diet Plan
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
				<li class="breadcrumb-item active">Update Diet Plan</li>
			</ol>
		</div>

      

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4 contact-left">
          <h3>Diet-Food Solution</h3>
          <form  method="post" enctype="multipart/form-data">
            <div class="control-group form-group">
              <div class="controls">
                <label>Food Diet Remedies/Solutions:</label>
                <input type="file" class="form-control" name="image" id="image" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Follow Diet Plan(Days/weeks/Months):</label>
                <input type="text" style="height:100px;"class="form-control" id="dwm" name="dwm" placeholder="Please enter." required>
              </div>
            </div> 
		        
            <div id="success"></div>
            <!-- For success/fail messages -->
            <input type="submit" class="btn btn-primary" name="submit" value="Update Solution"/>
			      <button type="submit" class="btn btn-primary" ><a href="userdietdetails.php"  style="color:white;">Cancel</a></button>
          </form>
        </div>

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
