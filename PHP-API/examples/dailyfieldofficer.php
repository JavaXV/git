<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Zealluck Transaction</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
	
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Zealluck Resources
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="./Transact.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Transaction Table-List</p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="dailyfieldofficer.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Find-FieldOfficer with Date </p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="acctno_pageno.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>AccountNo with PageNo </p>
                        </a>
                    </li>
					  <li class="nav-item active">
                        <a class="nav-link" href="acctnodate.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Find AccountNo with Date</p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="findloan.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Find FieldOfficer with Product </p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="fieldmonthyear.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Find FieldOfficer with Month/Year </p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="fieldofficeryear.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Find FieldOfficer with Year </p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">
                            <i class="nc-icon nc-notes"></i>
                            <p>LogOut</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> All Transaction Table List </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <!--<li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <!--<li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>-->
                           
                        </ul>
                        <ul class="navbar-nav ml-auto">
                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Future</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Zealluck</a>
                                   
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                   <!------------------------------------------------------------>
									            <div class="row justify-content-center>
												  <div class="col-md-12">
													<div class="card">
														<div class="card-header">
															<h5>Transaction Filtering</h5>
														</div>
														<div class="card-body">
															<form action="" method="GET">
																<div class="container">
																<div class="row">
																	<div class="col-sm">
																	<div class="mb-3">
																	  <label for="exampleFormControlInput1" class="form-label">FieldOfficer</label>
																	  <input type="text" class="form-control" name="fieldofficer" id="from_date" placeholder="Enter fieldofficer">
																	</div>
																	</div>
																	<div class="col-sm">
																	<div class="mb-3">
																	  <label for="exampleFormControlInput1"  class="form-label">Date-To</label>
																	  <input type="date" class="form-control" name="to_date" id="to_date" placeholder="To Date">
																	</div>
																	</div>
																	<div class="col-sm">
																	<div class="mb-3">
																	    <label for="exampleFormControlInput1" class="form-label">Check</label>
																		<button type="submit" class="btn btn-primary">Find Transaction</button>
																	</div>																	
																	</div>				
																</div>
																</div>
															</form>	         												
													</div>
												  </div>
												      
                                                                    <div class="col-sm">
																	<div class="mb-3">
																	    <label for="exampleFormControlInput1" class="form-label">Total Deposite Sum</label>
																	    
																	</div>																	
																	</div>			
			                                    </div>								   
									<br><br>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Branch</th>
                                            <th>BranchID</th>
                                            <th>FieldOfficer</th>
                                            <th>DepositeAmount</th>
                                            <th>WithdrwalAmount</th>
                                            <th>PostedBy</th>
                                            <th>DateOfPost</th>
                                            <th>PageNumber</th>
                                            <th>AccountNumber</th>
                                            <th>TransactionType</th>
                                        </thead>
                                        <tbody>
                                           <?php
                                            $host      = "localhost";
                                            $username  = "root";
                                            $password  = "";
                                            $dbname    = "api_transaction";
                                            $conn = mysqli_connect("localhost", "root", "", "api_transaction");
											
                                             if(isset($_GET['fieldofficer']) && isset($_GET['to_date']))
											{
												$fieldofficer = $_GET['fieldofficer'];
												$to_date      = $_GET['to_date'];  											
                                                
                                                $query ="SELECT * FROM transactions WHERE FieldOfficer='$fieldofficer' AND ApprovedDate='$to_date'";
                                                $query_run = mysqli_query($conn, $query);

                                                if(mysqli_num_rows($query_run) > 0)
                                                {
                                                    foreach($query_run as $row)
                                                    {
                                                        ?>
                                                        <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['Branch']; ?></td>
                                                        <td><?php echo $row['BranchId']; ?></td>
                                                        <td><?php echo $row['FieldOfficer']; ?></td>
                                                        <td><?php echo $row['DepositeAmount']; ?></td>
                                                        <td><?php echo $row['WithdrawalAmount']; ?></td>
                                                        <td><?php echo $row['ApprovedByUsername']; ?></td>
                                                        <td><?php echo $row['ApprovedDate']; ?></td>
                                                        <td><?php echo $row['PageNumber']; ?></td>
                                                        <td><?php echo $row['AccountNumber']; ?></td>
                                                        <td><?php echo $row['TransactionType']; ?></td>
                                                        </tr>
                                                         

                                                       <?php
                                                    }
                                                }else{
                                                    echo "No Record Found";
                                                } 
                                                
                                                ?>
                                                
                                                
                                                <?php

                                                    $host      = "localhost";
                                                    $username  = "root";
                                                    $password  = "";
                                                    $dbname    = "api_transaction";
                                                   
                                                    $some_q = "SELECT SUM(DepositeAmount) AS `count_col` FROM transactions WHERE FieldOfficer='$fieldofficer' AND ApprovedDate='$to_date'";
                                                    $results = mysqli_query($conn, $some_q) or die(mysqli_error());

                                                    while($row = mysqli_fetch_array($results)){
                                                        echo"<div style='font-size:30px; float:right; padding-right:100px;'>";
                                                        echo "DEPOSITE(SUM)" . "=" . "" . 'NGN' . number_format($row['count_col'], 2);;
                                                        echo '<br><br>';
                                                        echo'</div>';
                                                    }

                                                   
                                            }
                                          
                                           ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
               
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                       
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Da                                   te().getFullYear())
                            </script> (ZRNL)
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
