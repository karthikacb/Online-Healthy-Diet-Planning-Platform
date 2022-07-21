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
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
	  <link rel="stylesheet" href="css/shared/components/_table.scss">
    <!-- End layout styles -->
   
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
              <h3 class="page-title"> Reported Users</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Reported Users</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Reported Users</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"></a>
                      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search User" title="Type in a name">
                    </div>
                    
                    <div class="table-responsive border rounded p-1">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                          
                            <th class="font-weight-bold">User Details</th>
                            <th class="font-weight-bold">Id-Proof</th>
                            <th class="font-weight-bold">Dietitian Selected By User</th>

                            <!-- <th class="font-weight-bold">Status</th> -->
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          include '../connection.php';


$sql="select * from plandetails where  status='Reported' & 'Updated' & 'Posted'";
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
$id=$r['logid'];
$did=$r['detailid'];
$sql1="select * from register where loginid=$id";
$res1=mysqli_query($con,$sql1);
$r1=mysqli_fetch_array($res1);
$sqe="select * from plandetails where  detailid=$did";
$ree=mysqli_query($con,$sqe);
$k=mysqli_fetch_array($ree);
$dietid=$r['dname'];
$sg="select * from dietitian where dietionid=$dietid";
$rg=mysqli_query($con,$sg);
$j=mysqli_fetch_array($rg);

?>
		<tr><td><?php echo $r1['fname'];?>&nbsp<?php echo $r1['lname'];?><br/><br/>
    <?php echo $r1['adress'];?><br/></br>
    <?php echo $r1['email'];?></br></br>
    <?php echo $r1['phone'];?></br></br>
		<?php echo $r1['gender'];?></td>
    <td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100" /></td>
    <td>
				<?php echo $j['name'];?><br />
				<?php echo $j['email'];?><br />
				<?php echo $j['phonenumber'];?> <br />
				</td>
		</form>		
                      <?php
}
?>
                        </tbody>
                      </table>
                      <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
                    </div>
                    
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
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
}
else
header('location:../healthlogin.php');
?>