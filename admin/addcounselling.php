<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
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
              <h3 class="page-title"> Add Classes </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Classes</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: left;">Add Classes</h4>
					<br>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Program Name</label>
                        <input type="text" name="programname" id="programname" class="form-control"  placeholder="Enter program name" value="" required onchange="Validate();">
                      </div>
					  <span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('programname').value;

    if (!val.match((/^[a-zA-Z ]*$/)))
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets are allowed!!";
		            document.getElementById('programname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
                      <div class="form-group">
                        <label for="exampleInputName1">Name of person Conducting the program</label>
                       <input type="text" name="conname" id="conname" placeholder="Enter Name of person Conducting the program" class="form-control" value="" required onchange="Validatec();">
                      </div>
					  <span id="msg2" style="color:red;"></span>
						<script>		
function Validatec() 
{
    var val = document.getElementById('conname').value;

    if (!val.match((/^[a-zA-Z ]*$/)) )
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets are allowed!!";
		            document.getElementById('conname').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
                      
                      
					  <div class="form-group">
                        <label for="exampleInputName1">Enter Program Date</label>
                       <input type="date" class="form-control" name="date" id="date"  min="<?= date('Y-m-d');?>"required onChange="vdate();">
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
                      <div class="form-group">        
                        <label for="exampleInputName1">Enter Program Time</label>
                       <input type="time" class="form-control" placeholder="Enter Program Time" name="time" id="time" required >
                      </div>
                      <div class="form-group">        
                        <label for="exampleInputName1">AM/PM</label>
                       <input type="text" class="form-control" placeholder="Enter Am/Pm" name="ampm" id="ampm" required >
                      </div>
                      <div class="form-group">        
                        <label for="exampleInputName1">Mode</label>
                       <input type="text" class="form-control" placeholder="Add Mode" name="mode" id="mode" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Add description</label>
                       <textarea type="text" class="form-control" placeholder="Add Description" name="description"  id="description" required onChange="Valiprg();"></textarea>
                      </div>
					  <span id="msgi1" style="color:red;"></span>
<script>		
function Valiprg() 
{
    var val = document.getElementById('description').value;
	 if(val=="")
	 {
	    document.getElementById('msgi1').innerHTML="** please fill description";
		return false;
		}
}
</script>
                      
                    
                      <div class="form-group">
                        <label for="exampleInputName1">Upload Poster/Brochure</label>
                       <input type="file" name="file"  id="file"  required onChange="return fileValidation();" />
                      </div>
					  <script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('file');
              
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
                        <label for="exampleInputName1">Program Link</label>
                       <textarea type="text" name="link" id="link" placeholder="Enter Link" class="form-control" value=""></textarea>
                      </div> 
                     <div>
                      <button type="submit" class="btn btn-primary mr-2"  name="b">Add Program</button>
					        
                     </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
			<?php
include '../connection.php';
if(isset($_POST['b']))
{
$programname=$_POST['programname'];
$conname=$_POST['conname'];
$date=$_POST['date'];
$time=$_POST['time'];
$ampm=$_POST['ampm'];
$mode=$_POST['mode'];
$description=$_POST['description'];
$link=$_POST['link'];
$file=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/".$_FILES["file"]{"name"});
$sql="insert into tbl_healthclasses(programname,conname,date,time,ampm,mode,description,file,link,status) values('$programname','$conname','$date','$time','$ampm','$mode','$description','$file','$link','active')";
$result = mysqli_query($con, $sql);
echo "<script> alert('Successfully added programs'); window.location.href='addcounselling.php';</script>";

							}
								
							?>
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