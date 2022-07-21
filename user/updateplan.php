<?php      
    include '../connection.php';
    $detailid1 = $_GET['detailid'];
    $sql = "select * from `plandetails` where detailid='$detailid1'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $age1 = $row['age'];
    $height1 = $row['height'];
    $weight1 = $row['weight'];
    $targetweight = $row['targetweight'];
    $sugar1 = $row['sugar'];
    $bp1 = $row['bp'];
    $cho1 = $row['cho'];
    $habits1 = $row['habits'];
	$dietrequired1 = $row['dietrequired'];
	$disease1 = $row['disease'];
    $discription1 = $row['discription'];
	//$datee=$row['updt'];
	$da = $row['date'];
    

    if(isset($_POST['submit']))
    {
	$d=date('d-m-y');
    $detailid=$_GET['detailid'];
	$age = $_POST['age'];
	$height = $_POST['height'];  
    $weight = $_POST['weight'];
    $targetweight = $_POST['targetweight'];
    $sugar = $_POST['sugar'];
    $bp = $_POST['bp'];
    $cho = $_POST['cho'];
    $habits = $_POST['habits'];
    $dietrequired = $_POST['dietrequired'];
    $disease = $_POST['disease'];
    $discription = $_POST['discription'];
        //$s="INSERT INTO 'plandietdetailspr'('p_id','age','weight','dietrequired','habits','disease','discription','updt') values('$detailid','$age','$weight','$dietrequired','$habits','$disease','$discription','$datee')";
		
		$df="INSERT INTO `planbackup`(`detailid`,`age`,`height`, `weight`, `sugar`, `bp`, `cho`, `dietrequired`, `habits`, `disease`, `discription`, `updt`) VALUES ('$detailid','$age1','$height1','$weight1','$sugar1','$bp1','$cho1','$dietrequired1','$habits1','$disease1','$discription1','$da')";
        $dm=mysqli_query($con,$df);
		mysqli_query($con,"UPDATE `plandetails` SET `detailid`='$detailid', `date`='$d', `age`='$age',`height`='$height',`weight`='$weight',`targetweight`='$targetweight',`sugar`='$sugar',`bp`='$bp',`cho`='$cho',`habits`='$habits',`dietrequired`='$dietrequired',`disease`='$disease',`discription`='$discription' where detailid='$detailid'");
    
            header('location:mydietdetails.php');
     }
 ?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>ONLINE HEALTHY DIET PLANNING PLATFORM</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="viewdietitian.php">Dietitian Profile</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="requestdietplan.php">Post Health Profile</a></li> -->
						<li class="nav-item"><a class="nav-link" href="mydietdetails.php">My Diet Details</a></li>
						<li class="nav-item"><a class="nav-link" href="mydietplan.php">My Diet Plans</a></li>
						<li class="nav-item"><a class="nav-link" href="diethistory.php">My Diet History</a></li>
                        <li class="nav-item"><a class="nav-link" href="viewprograms.php">Diet Programs</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">My Account</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="userprofile.php">Profile</a>
								<a class="dropdown-item" href="change-password.php">Change Password</a>
								<a class="dropdown-item" href="../healthlogout.php">Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>UPDATE DIET PLAN</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>UPDATE DIET PLAN</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form  method="post"  enctype="multipart/form-data">

					  <!-- <div class="col-md-12">
								<div class="form-group">
								<label><b>Date:</b></label>
									<input type="date" class="form-control" name="date" id="date" max="<?= date('Y-m-d');?>" required onchange="Validage();">
								</div>                                 
							</div>   -->
							

							<div class="col-md-12">
								<div class="form-group">
								<label><b>Age:</b></label>
									<input type="text" class="form-control" name="age"  value="<?php echo $age1 ?>" placeholder="Please Enter Age">
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Height:</b></label>
									<input type="text" placeholder="Please Enter Height"  value="<?php echo $height1 ?>" class="form-control" name="height">
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Weight:</b></label>
									<input type="text" placeholder="Please Enter Weight"  value="<?php echo $weight1 ?>" class="form-control" name="weight">
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Target Weight:</b></label>
									<input type="text" placeholder="Please Enter Target Weight"  value="<?php echo $targetweight ?>" class="form-control" name="targetweight">
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Sugar count:</b></label>
									<input type="text" placeholder="Please Enter Sugar count"  value="<?php echo $sugar1 ?>" class="form-control" name="sugar">
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Blood-Pressure count:</b></label>
									<input type="text" placeholder="Please Enter blood pressure count"  value="<?php echo $bp1 ?>" class="form-control" name="bp">
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Cholesterol count:</b></label>
									<input type="text" placeholder="Please Enter Cholesterol count"  value="<?php echo $cho1 ?>" class="form-control" name="cho">
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Current Food Habits:</b></label>
								<input type="text" class="form-control" name="habits"  value="<?php echo $habits1 ?>" placeholder="Enter Current Food Habits" />
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Diet Required For:</b></label>
								<input type="text" class="form-control" name="dietrequired"  value="<?php echo $dietrequired1 ?>" placeholder="Enter Current Food Habits" />
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Disease:</b></label>
								<input type="text" class="form-control" name="disease"  value="<?php echo $disease1 ?>" placeholder="Enter Current Food Habits" />
								</div> 
							</div>
							
									<div class="col-md-12">
										<div class="form-group">
										<label><b>Description:</b></label>
											<input type="text"  name="discription"   value="<?php echo $discription1 ?>"class="form-control"   placeholder="Enter Description" />
										</div>                                 
									</div>
								</div>
								    <div class="submit-button text-center">
									<input type="submit" class="btn btn-common" id="submit" name="submit" value="Update">
									<button class="btn btn-common"><a href="mydietdetails.php">Cancel</button>
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<!-- Start Contact info -->
	
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
				<h3>About Us</h3>
					<p>Healthier diets help us to maintain our health and keep us away from many diseases. For better recovery from diseases or surgery etc individual have special needs according to their medical profile, cultural backgrounds and nutrient requirements.</p>
				</div>
				<!-- <div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div> -->
				<!-- <div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div> -->
				<!-- <div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div> -->
					<!-- <ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul> -->
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">ONLINE HEALTHY DIET PLANNING PLATFORM</p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: 'Yamifood Restaurant'
				}
			]
		});	
	</script>
</body>
</html>
