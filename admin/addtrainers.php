<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
include '../connection.php';
if(isset($_POST['b']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phonenumber=$_POST['number'];
$email=$_POST['email'];
$address=$_POST['address'];
$category=$_POST['category'];
$file=$_FILES['idproof']['name'];
move_uploaded_file($_FILES["idproof"]["tmp_name"], "../uploads/".$_FILES["idproof"]["name"]);
$file1=$_FILES['photo']['name'];
move_uploaded_file($_FILES["photo"]["tmp_name"], "../uploads/".$FILES["photo"]["name"]);
$file2=$_FILES['certificate']['name'];
move_uploaded_file($_FILES["certificate"]["tmp_name"], "../uploads/".$FILES["certificate"]["name"]);
$username=$_POST['username'];
$password=$_POST['password'];
 $s1 = "SELECT * FROM login WHERE username = '$username'";
    $result1 = mysqli_query($con, $s1);
    $row1=mysqli_fetch_assoc($result1);
    $uname= isset($row1['username']) ? $row1['username'] : '';
	if ($uname!="") 
            {
            echo "<script>alert('please enter another username'); window.location.href='addtrainers.php';</script>";
            }
            else
			{

            $sq = "INSERT INTO login (username,password,type1,status) VALUES ('$username','$password','trainer','1')";
            mysqli_query($con, $sq);
            $sqll = "SELECT * FROM login WHERE username = '$username' and password = '$password' and type1 = 'trainer'";
            $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
             $loid=$row['loginid'];
             $sql = "INSERT INTO trainer(name,age,gender,number,email,address,category,idproof,photo,certificate,loginid,status)values('$name',$age,'$gender','$phonenumber','$email','$address','$category','$file','$file1','$file2',$loid,1)";
            mysqli_query($con, $sql);
            echo "<script> alert('Trainer Added'); window.location.href='addtrainers.php';</script>";
            }
        }
       
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Trainers </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Trainers</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: left;">Add Trainers</h4>
					<br>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Enter Trainer name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" required onchange="Validate();">
                      </div>
					  <span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('name').value;

    if (!val.match(/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/)) 
    {
        document.getElementById('msg1').innerHTML="Only alphabets are allowed!!";
		            document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script> 
                      <div class="form-group">
                        <label for="exampleInputName1">Enter Age</label>
                       <input type="number" name="age" id="age" placeholder="Enter Age" value="" class="form-control" required onchange="Validage();"/>
                      </div>
					  <span id="msg2" style="color:red;"></span>
						<script>		
function Validage() 
{
    var val = document.getElementById('age').value;

    if (!val.match(/^[1-9]+$/)) 
    {
        document.getElementById('msg2').innerHTML="Enter Correct age";
		            document.getElementById('age').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Gender</label>
                        <select name="gender" value="" class="form-control" required='true'>
                          <option value="">Choose Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputName1">Enter Phone Number</label>
                       <input type="number" name="number" class="form-control" maxlength="10" id="number" placeholder="Enter Phone Number" required onchange="Validat();">
                      </div>
					  <span id="msg4" style="color:red;"></span>
			
<script>
function Validat() 
{
    var val = document.getElementById('number').value;

    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('number').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
                      <div class="form-group">
                        <label for="exampleInputName1">Enter Email-Id</label>
                       <input type="text" name="email" id="email" placeholder="Enter Email-Address" class="form-control" required onchange="Validata();">
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
                      
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Enter Address</label>
                        <input type="text" name="address" id="address" placeholder="Enter Address" class="form-control" required>
                      </div>
					  
                     
                       <div class="form-group">
                        <label for="exampleInputEmail3">Choose Trainer</label>
                        <select name="category" class="form-control" required='true'>
                        <option value="">Select Category</option>
      <?php $query=mysqli_query($con,"select * from category where status='active'");
      while($row=mysqli_fetch_array($query))
      { 
      ?>
       <option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?>
      </option>
      <?php }?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Upload id proof</label>
                        <input type="file" class=""  name="idproof" id="idproof" class="form-control" required onChange="return fileValidation1();">
                      </div>
					  <script>
        function fileValidation1() {
            var fileInput = 
                document.getElementById('idproof');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">	Upload Photo</label>
                       <input type="file" class=""  name="photo" id="photo" class="form-control" required onChange="return fileValidation();">
                      </div>
					  <script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('photo');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
                      <div class="form-group">
                        <label for="exampleInputName1">Upload Certificate</label>
                          <input type="file" class=""  name="certificate" id="certificate" class="form-control" required onChange="return fileValidation2();">
                      </div>
<script>
        function fileValidation2() {
            var fileInput = 
                document.getElementById('certificate');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>
                
                       <div class="form-group">
                        <label for="exampleInputName1">Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter username" class="form-control" required onchange="Validatun();">
                      </div>
					  <span id="msg8" style="color:red;"></span>
<script>		
function Validatun() 
{
    var val = document.getElementById('username').value;

    if (!val.match(/^[A-Za-z]+$/)) 
    {
        document.getElementById('msg8').innerHTML="User name field required only alphabet characters";
		
		     document.getElementById('username').value = "";
        return false;
    }
document.getElementById('msg8').innerHTML=" ";
    return true;
}

</script>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                          <input type="password" name="password" id="password" placeholder="Enter password" class="form-control" required onchange="Validp();">
                      </div>
					  <span id="msg9" style="color:red;"></span>
<script>		
function Validp() 
{
    var val = document.getElementById('password').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msg9').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg9').innerHTML=" ";
    return true;
}

</script>
                      <div>
                      <button type="submit" class="btn btn-primary mr-2"  name="b">Add Trainer</button>
					  
                     </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
			
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
}
else
header('location:../healthlogin.php');
?>