<?php
session_start();
$id=$_SESSION['id'];
include '../connection.php';
$q="select * from dietitian where loginid=$id";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
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
			<h1 class="mt-4 mb-3">PROFILE
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
				<li class="breadcrumb-item active">Profile</li>
			</ol>
		</div>

      

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4 contact-left">
          <h3>My Profile</h3>
          <form action="editprofileprocess.php" method="post">
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Please enter your name." value="<?php echo $row['name'];?>"  required onchange="Validate();" >
                <p class="help-block"></p>
              </div>
            </div>
			<span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('name').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>		
            <div class="controls">
                <label>Age:</label>
                <input type="number" class="form-control" name="age" id="age" placeholder="Please enter your age." value="<?php echo $row['age'];?>"  required onchange="Validate();" >
                <p class="help-block"></p>
              </div>
			  <div class="controls">
                <label>Gender:</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="Please enter your phone number." value="<?php echo $row['gender'];?>" required onchange="Validat();" readonly>
              </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="number" class="form-control" id="phonenumber" name="phonenumber" placeholder="Please enter your phone number." value="<?php echo $row['phonenumber'];?>" required onchange="Validat();">
              </div>
            </div>
			<span id="msg4" style="color:red;"></span>
								<script>
function Validat() 
{
    var val = document.getElementById('phonenumber').value;

    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phonenumber').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email address." value="<?php echo $row['email'];?>" required onchange="Validata();">
              </div>
            </div>
			<span id="msg5" style="color:red;"></span>
<script>		
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) 
    {
        document.getElementById('msg5').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}

		</script>
            <div class="control-group form-group">
              <div class="controls">
                <label>Clinic:</label>
                <input type="text" class="form-control" id="clinic" name="clinic" placeholder="Please enter your email address." value="<?php echo $row['clinic'];?>" required onchange="Validata();">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Experience:</label>
                <input type="number" class="form-control" id="experiencedyears" name="experiencedyears" placeholder="Please enter your email address." value="<?php echo $row['experiencedyears'];?>" required onchange="Validata();">
              </div>
            </div>
		        <div class="control-group form-group">
              
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
			      <button type="submit" class="btn btn-primary" id="sendMessageButton"><a href="indexd.php"  style="color:white">Cancel</a></button>
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
