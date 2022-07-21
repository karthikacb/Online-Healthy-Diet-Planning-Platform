<?php      
    include 'connection.php';
    $programid=$_GET['programid'];
    $sql="select *from `tbl_healthclasses` where programid='$programid'";
    $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
    $programname=$row['programname'];
	$conname=$row['conname'];
	 $date=$row['date'];
	 $time=$row['time'];
	 $ampm=$row['ampm'];
	 $mode=$row['mode'];
    $description = $row['description'];
    $link = $row['link'];
    

    if(isset($_POST['s']))
    {
    $programid=$_GET['programid'];
	$programname = $_POST['programname'];
    $conname = $_POST['conname'];
	$date = $_POST['date'];  
	$time = $_POST['time']; 
	$ampm = $_POST['ampm'];  
	$mode = $_POST['mode'];   
    $description = $_POST['description'];
    $link = $_POST['link']; 
    
    
   
        mysqli_query($con,"UPDATE `tbl_healthclasses` SET `programid`='$programid',`programname`='$programname',`conname`='$conname',`date`='$date',`time`='$time',`ampm`='$ampm',`mode`='$mode',`description`='$description',`link`='$link' where programid='$programid'");
    
            header('location: ../addcounselling.php');
     }
  
      
    
 ?>




<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Admin Panel</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

</head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
     

   

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    <!-- Register Forms -->
                    <h2 class="content-heading">UPDATE PROGRAMS</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Update Programs</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    
                                    <form method="post">
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-username">Program Name</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="programname" id="programname" onfocusout="f1()" value="<?php echo $programname ?>" required onChange="Valr();">
                                            </div>
                                        </div>
										<span id="msgr" style="color:red;"></span>
<script>		
function Valr() 
{
    var val = document.getElementById('programname').value;
	 if(val=="")
	 {
	    document.getElementById('msgr').innerHTML="** please fill program name";
		return false;
		}
     if (!val.match(/^[A-Z][a-z\ ]{3,}$/)) 
    {
        document.getElementById('msgr').innerHTML="Start with a Capital letter & Only alphabets !!";
		            document.getElementById('programname').value = "";
        return false;
    }
document.getElementById('msgr').innerHTML=" ";
    return true;
}
</script>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-username">Name Of person conducting program</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="conname" id="conname" onfocusout="f1()" value="<?php echo $conname?>" required onChange="Valname();">
                                            </div>
                                        </div>
                                        <span id="msg1" style="color:red;"></span>
<script>		
function Valname() 
{
    var val = document.getElementById('conname').value;
	 if(val=="")
	 {
	    document.getElementById('msg1').innerHTML="** please fill name";
		return false;
		}
     if (!val.match(/^[A-Z][a-z\ ]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets !!";
		            document.getElementById('conname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Date</label>
                                            <div class="col-12">
                                                 <input type="date" class="form-control" name="date"  id="date"   min="<?= date('Y-m-d');?>" onfocusout="f1()" value=<?php echo $date?> required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Time</label>
                                            <div class="col-12">
                                                 <input type="time" class="form-control" name="time"  id="time" onfocusout="f1()" value=<?php echo $time?> required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">AM/PM</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="ampm"  id="ampm" onfocusout="f1()" value=<?php echo $ampm?> required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Mode</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="mode"  id="mode"  onfocusout="f1()" value="<?php echo $mode ?>" required onChange="Vallmode();">
                                            </div>
                                        </div>
										<span id="msg2" style="color:red;"></span>
<script>		
function Vallmode() 
{
    var val = document.getElementById('mode').value;
	 if(val=="")
	 {
	    document.getElementById('msg2').innerHTML="** please fill mode";
		return false;
		}
     if (!val.match(/^[A-Z][a-z\ ]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets !!";
		            document.getElementById('mode').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
                                         <div class="form-group row">
                                            <label class="col-12" for="register1-password">Description</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="discription" id="discription"  onfocusout="f1()" value="<?php echo $discription ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Program Link</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="link" id="link"  onfocusout="f1()" value="<?php echo $link ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-success" name="s">
                                                    <i class=""></i> Update
                                                </button>
												<button type="submit" class="btn btn-alt-success" >
                                                    <a href="../viewprograms.php"><i class=""></i> Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
                        </div>
                        
                       </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

          
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>
    </body>
</html>
