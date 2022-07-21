             <?php
                            include 'connection.php';
                            session_start();


                           
                                $myuser = $_POST['username'];
                                $mypass = $_POST['password'];


                                    $sql = "SELECT * FROM login WHERE username = '$myuser' and password = '$mypass' and type1='admin' and status='1'";
                                    $result = mysqli_query($con, $sql);

                                    $COUNT = mysqli_num_rows($result);
                                    if ($COUNT > 0) {
                                         $id = mysqli_query($con, $sql);
                                        $row=mysqli_fetch_assoc($id);
                                        // echo $row['loginid'];
                                        $_SESSION['id']=$row['loginid'];
                                         $_SESSION['logged_in'] = true;
                                        header("location:admin/dashboard.php");
                                    }


                            
                            
                                    $sqll = "SELECT * FROM login WHERE username = '$myuser' and password = '$mypass' and type1='user' and status='1'";
                                    $result1 = mysqli_query($con, $sqll);

                                    $COUNT1 = mysqli_num_rows($result1);
                                    if ($COUNT1 > 0) {
                                         $id = mysqli_query($con, $sqll);
                                        $row=mysqli_fetch_assoc($id);
                                         //echo $row['loginid'];
                                        $_SESSION['id']=$row['loginid'];
                                         $_SESSION['logged_in'] = true;
                                       header("location:user/index.php");

                                    }
                            

                                    $sq = "SELECT * FROM login WHERE username = '$myuser' and password = '$mypass' and type1='dietitian' and status='1'";
                                    $result2 = mysqli_query($con, $sq);

                                    $COUNT2 = mysqli_num_rows($result2);
                                    if ($COUNT2 > 0) {
                                         $id = mysqli_query($con, $sq);
                                        $row=mysqli_fetch_assoc($id);
                                        // echo $row['loginid'];
                                        $_SESSION['id']=$row['loginid'];
                                         $_SESSION['logged_in'] = true;
                                       header("location: dietitian/indexd.php");

                                    } 


                                    
                                        else {

                                        echo "<script> alert('incorrect password or email'); window.location.href='healthlogin.php';</script>";
                                        }

                            
                            ?>
