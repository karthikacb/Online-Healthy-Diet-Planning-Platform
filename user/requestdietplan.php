<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
	
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
						<li class="nav-item"><a class="nav-link" href="dietplanpayment.php">Diet Plan Payment</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Diet Details</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="mydietdetails.php">My Diet Details</a>
								<a class="dropdown-item" href="diethistory.php">My Diet-Details History</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Diet Plan</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="mydietplan.php">My Diet Plans</a>
								<a class="dropdown-item" href="mydietplanhistory.php">My Diet-Plan History</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Programs</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="viewprograms.php">Diet Programs</a>
								<a class="dropdown-item" href="viewtrainingsections.php">Workout/Yoga Sections</a>
							</div>
						</li>
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
					<h1>REQUEST FOR DIET PLAN</h1>
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
						<h2>REQUEST FOR DIET PLAN</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form  method="post" action="requestdetailsprocess.php" enctype="multipart/form-data">
						<div class="row">
						<td><select name="dname" style="display:inline-flex">
				        <option value="0">Choose Dietitian</option>
						
		<?php
		include '../connection.php';
		$sql2="SELECT `name`,`dietionid` from `dietitian` where status='1'";
        $res2=mysqli_query($con,$sql2);
        while($r2=mysqli_fetch_array($res2))

		{ 
		?>
				<option value="<?php echo $r2['dietionid'];?>"><?php echo $r2['name'];?></option>
				<?php
				}
				?>
				</select>
				
				<!-- <td><a href="viewdietitian.php?dietionid=<?php echo $r2['name'];?>">Dietitian Profile</a></td> -->
				<br>

				            <!-- <div class="col-md-12">
								<div class="form-group">
								<label><b>Date:</b></label>
									<input type="date" class="form-control" name="date" id="date" min="<?= date('Y-m-d');?>" required>
								</div>                                 
							</div> -->
			
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Age:</b></label>
									<input type="text" class="form-control" name="age" id="age" placeholder="Please Enter Age" required onchange="Validage();">
								</div>                                 
							</div>
							<span id="msg1" style="color:red;"></span>
						<script>		
function Validage() 
{
    var val = document.getElementById('age').value;

    if (!val.match(/^[1-9]?[0-9]{1}$|^100$/)) 
    {
        document.getElementById('msg1').innerHTML="Enter Age Correctly";
		            document.getElementById('age').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Height(cm):</b></label>
									<input type="text" placeholder="Please Enter Height" class="form-control" name="height" id="height" required onchange="Validhei();">
								</div> 
							</div>
							<span id="msg2" style="color:red;"></span>
						<script>		
function Validhei() 
{
    var val = document.getElementById('height').value;

    if (!val.match(/^\d{2,3}/)) 
    {
        document.getElementById('msg2').innerHTML="Enter Height Correctly";
		            document.getElementById('height').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Current Weight(kg):</b></label>
									<input type="text" placeholder="Please Enter Weight" class="form-control" name="weight" id="weight" required onchange="Validwei();">
								</div> 
							</div>
							<span id="msg3" style="color:red;"></span>
						<script>		
function Validwei() 
{
    var val = document.getElementById('weight').value;

    if (!val.match(/^\d{2,4}/)) 
    {
        document.getElementById('msg3').innerHTML="Enter Weight Correctly";
		            document.getElementById('weight').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>                
                            <div class="col-md-12">
								<div class="form-group">
								<label><b>Target Weight(kg):</b></label>
									<input type="text" placeholder="Please Enter Your Weight" class="form-control" name="targetweight" id="targetweight" required onchange="Validwei();">
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Sugar Count:</b></label>
									<input type="text" placeholder="Please Enter Your Weight" class="form-control" name="sugar" id="targetweight" required onchange="Validwei();">
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Blood Pressure Count:</b></label>
								<input type="text" class="form-control" name="bp"  placeholder="Enter Current Food Habits" required>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Cholesterol Count:</b></label>
								<input type="text" class="form-control" name="cho"  placeholder="Enter Current Food Habits" required>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Current Food Habits:</b></label>
								<input type="text" class="form-control" name="habits"  placeholder="Enter Current Food Habits" required>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Diet Required For:</b></label>
								<input type="text" class="form-control" name="dietrequired" placeholder="Enter Current Food Habits" required>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label><b>Any Disease:</b></label>
								<input type="text" class="form-control" name="disease" placeholder="Any disease Please describe.." required>
								</div> 
							</div>
							<!-- <div class="col-md-12">
										<div class="form-group">
										<label><b>Disease:</b></label>
										    <select name="disease" class="form-control">
											<option value="0">Select</option>
									        <option value="Heart">Heart</option>
									        <option value="Skin">Skin</option>
									        <option value="Tooth">Tooth</option>
									        <option value="Eye">Eye </option>
									        <option value="Bone">Bone</option>
									        <option value="Lung">Lung</option>
									        <option value="Kidney">Kidney</option>
									        <option value="No Disease">No Disease</option>
											</select>
										</div>
									</div> -->
									<div class="col-md-12">
										<div class="form-group">
										<label><b>ID-PROOF:</b></label>
										<input type="file" class="form-control" name="idproof" id="idproof" required onChange="return fileValidation1();">
										</div> 
									</div>
									<script>
        function fileValidation1() {
            var fileInput = 
                document.getElementById('idproof');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
									<div class="col-md-12">
										<div class="form-group">
										<label><b>Description:</b></label>
											<textarea type="text"  name="discription"  class="form-control"   placeholder="Enter Description" required></textarea>
										</div>                                 
									</div>
								</div>
								    <div class="submit-button text-center">
									<button class="btn btn-common" type="submit">Post Profile</button>
									<button class="btn btn-common" type="submit"><a href="index.php">Cancel</a></button>
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
<?php
}
else
header('location:../healthlogin.php');
?>