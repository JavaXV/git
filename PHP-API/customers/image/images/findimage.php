<?php
 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";

        // Create connection
        $conn = mysqli_connect($host, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $Balance ="";
        if(isset($_POST['accountno'])){
        $accountno = $_POST['accountno'];
           	
        $sql = "SELECT * FROM Person WHERE AccountNo='$accountno'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $id = $row['id']; 
            $Branch =$row['Branch']; 
            $CustomerId =$row['CustomerId']; 
            $FullName = $row['Fullname'];
            $Job = $row['Job']; 
            $Gender = $row['Gender'];
            $FieldOfficer = $row['FieldOfficer']; 
            $Country = $row['country']; 
            $Address = $row['HomeAddress']; 
            $BusStop = $row['NearestBusStop']; 
            $MaritalStatus = $row['MaritalStatus']; 
            $DateOfBirth = $row['DateOfBirth'];
            
             
			
			$SMSAlert  = $row['SMSAlert']; 
            $AccountNo = $row['AccountNo']; 
            $NextOfKin = $row['NextOfKin']; 
            $NextOfKinAddress = $row['NextOfKinAddress']; 
            $NextOfKinPhone = $row['NextOfKinPhone'];
		    $Email  = $row['Email'];
		    $image  = $row['logo'];
														
          }
        } else {
         //echo "0 results";
        }
        
        mysqli_close($conn);
}

?>


<?php
 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";

        // Create connection
        $conn = mysqli_connect($host, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        
        if(isset($_POST['accountno'])){
            
        $accountno = $_POST['accountno'];
        $pageno    = $_POST['pageno'];
           	
        $sql = "SELECT * FROM Accounts WHERE AccountNo='$accountno' AND PageNo='$pageno'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $id          = $row['id']; 
            $Balance     =$row['AccountBalance'];
            $Accwithdraw =$row['Accwithdraw'];
            $product     =$row['Product'];
            $Init        =$row['InitialDeposite'];
            $left        =$row['Leftmoney'];
            $lien        =$row['Lien'];
														
          }
        } else {
         //echo "0 results";
        }
        
        mysqli_close($conn);
}

?>


<?php
 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";

        // Create connection
        $conn = mysqli_connect($host, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        
        if(isset($_POST['accountno'])){
            
        $accountno = $_POST['accountno'];

           	
        $sql = "SELECT * FROM Person WHERE AccountNo='$accountno'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $id           = $row['id']; 
            $Balance      =$row['AccountBalance'];
            $product1     =$row['Product'];
      
           
														
          }
        } else {
         //echo "0 results";
        }
        
        mysqli_close($conn);
}

?>

                                
                                                   

<?php
 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";

        // Create connection
        $conn = mysqli_connect($host, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        
        if(isset($_POST['findB'])){
            
        $branch = $_POST['branch'];
           	
        if($branch == "Yaba"){
           // header("Location: http://localhost:3005/WithdrawRedirect");
            
           echo "<script> window.location = 'http://192.168.8.105:3005/WithdrawRedirect'; </script>";

            
        }
         if($branch == "Ikeja"){
            
        }
         if($branch == "Ajah"){
            
        }
         if($branch == "Ikorodu"){
            
        }
}

?>

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
    <title>Find Image&Signature(AccountNo|PageNo)</title>
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
     <div class="wrapper" style="background-color:#cacccc">
         <div class="sidebar" data-image="../assets/img/sidebar-5.jpg" >
            <div class="sidebar-wrapper" style="background-color:#609478">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                      
                        <img src="becnou.png" height="100" width="100">
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/Transact.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">Daily | Transaction</p>
                        </a>
                    </li>
					  
                    <!--<li class="nav-item active">-->
                    <!--    <a class="nav-link" href="http://192.168.8.176:3005">-->
                    <!--        <i class="nc-icon nc-notes"></i>-->
                    <!--        <p style="color:yellow;">LogOut</p>-->
                    <!--    </a>-->
                    <!--</li>-->
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
                                    <a class="dropdown-item" href="#">becnou</a>
                                   
                                </div>
                            </li>
                            <!--<li class="nav-item">-->
                            <!--    <a class="nav-link" href="http://192.168.8.176:3005">-->
                            <!--        <span class="no-icon">Log out</span>-->
                            <!--    </a>-->
                            <!--</li>-->
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
															<h5>User Bio-Data Filtering</h5>
														</div>
														<div class="card-body">
															<form action="" method="POST">
																<div class="container">
																<div class="row">
																	<div class="col-sm">
																	<div class="mb-3">
																	  <label for="exampleFormControlInput1" class="form-label">AccountNumber</label>
																	  <input type="text" class="form-control" name="accountno" id="from_date" placeholder="Enter AccountNo" Style="width:180px;">
																	</div>
																	</div>
																	<div class="col-sm">
																	<div class="mb-3">
																	  <label for="exampleFormControlInput1" class="form-label">PageNumber</label>
																	  <input type="text" class="form-control" name="pageno" id="from_date" placeholder="Enter PageNo" Style="width:180px;">
																	</div>
																	</div>
																	
																	<div class="col-sm">
																	<div class="mb-3">
																	    <label for="exampleFormControlInput1" class="form-label">Check</label>
																		<button type="submit" class="btn btn-primary" name="findX">View User</button>
																	</div>																	
																	</div>		
																	<div class="col-sm">
																	<div class="mb-3">
																	    
																		<!--<button type="submit" class="btn btn-primary" name="findB" style="height:90px; width:150px;">Make Withdraw</button>-->
																	</div>																	
																	</div>		
																</div>
																</div>
													</div>
												  </div>
			                                    </div>								   
									<br><br>
                                </div>
                <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Find User Profile</h4>
                                </div>
                                <div class="card-body">
                                   
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Company (Branch)</label>
                                                    <input type="text" class="form-control" name="branch" placeholder="Branch" value="<?php  echo $Branch; ?>">
                                                </div>
                                            </div>
                                           
                                            <div class="coN-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">FullName</label>
                                                    <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php  echo $FullName; ?>">
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-md-4 pl-1">
                                                <!--<div class="form-group">-->
                                                <!--    <label>Account-Balance</label>-->
                                                       <input type="text" class="form-control" disabled="" name="create" placeholder="Account-Balance" value="<?php // echo 'NGN' . number_format($Balance, 2) ?>">
                                                <!--</div>-->
                                               
                                            
                                             <?php
                                             $host      = "localhost";
                                             $username  = "becnouco_land";
                                             $password  = "$.AYV?_caQQC";
                                             $dbname    = "becnouco_land";
                                             $conn = mysqli_connect($host, $username, $password, $dbname);
                                                   
                                              
                                                    $some_q = "SELECT SUM(DepositeAmount) AS `count_col` FROM Transactions WHERE AccountNumber='$accountno' AND PageNumber='$pageno'";
                                                    $results = mysqli_query($conn, $some_q) or die(mysqli_error());

                                                    while($row = mysqli_fetch_array($results)){
                                                        echo"<div style='font-size:30px; float:left; left:200px;'>";
                                                      // echo "ACCOUNTBAL(SUM)" . "=" . "" . 'NGN' . number_format($row['count_col'], 2);
                                                        echo '<br><br>';
                                                      
                                                         if($product1 == "Foundation Account"){
                                                             
                                                                if($Init >= 2000)
                                                                {
                                                                 $vab = $Init/2;
                                                                }else{
                                                                 $vab = $Init;
                                                                }
                                                                 $mute = $Init + $Accwithdraw;
                                                                 $val = $row['count_col'] - $mute;
                                                                 echo " INITIALS(CHARGE)" . "=" . "" . 'NGN' . number_format("-" .$vab, 2);
                                                                 echo '<br>';
                                                                 echo'</div>';
                                                                 
                                                     
                                                                 echo"<div style='font-size:25px; float:left; left:200px;'>";
                                                                 $mute = $Init + $Accwithdraw;
                                                                 $valX = $row['count_col'] - $vab;
                                                                 echo "DEBIT(SUM)" . "=" . "" . 'NGN' . number_format($valX, 2);
                                                                 echo '<br><br>';
                                                                 echo'</div>';
                                                                 
                                                                 
                                                                 echo"<div style='font-size:23px; float:left; left:200px;'>";
                                                                 $mute = $Init + $Accwithdraw;
                                                                 $valX = $row['count_col'] - $vab;
                                                                 echo "AMOUNT(REMAINING)" . "=" . "" . 'NGN' . number_format($left, 2);
                                                                 echo '<br><br>';
                                                                 echo'</div>';
                                                                 
                                                                 
                                                                if($lien == 1){
                                                                 echo"<div style='font-size:25px; float:left; left:200px;'>";
                                                                 echo "Account(is on Lien)" . "=" . "Lien" ;
                                                                 echo '<br><br>';
                                                                }else{}
                                                         }
                                                             if($product1 == "Project Plan Account" || $product1 == "Land Investment Plan Account" || $product1 == "Easy Buy Account"){
                                                                $vab = 0;
                                                                 echo '<br>';
                                                                 $mute = $Init + $Accwithdraw;
                                                                 $val = $row['count_col'] - $mute;
                                                                 echo " INITIALS(CHARGE)" . "=" . "" . 'NGN' . number_format("-" .$vab, 2);
                                                                 echo '<br>';
                                                                 echo'</div>';
                                                                 
                                                                 echo"<div style='font-size:25px; float:left; left:200px;'>";
                                                                 echo "AMOUNT(REMAINING)" . "=" . "" . 'NGN' . number_format($left, 2);
                                                                 echo '<br>';
                                                                 echo'</div>';
                                                                 
                                                                 $vab = 0;
                                                                 echo"<div style='font-size:25px; float:left; left:200px;'>";
                                                                 $mute = $Init + $Accwithdraw;
                                                                 $valX = $row['count_col'] - $vab;
                                                                 echo "DEBIT(SUM)" . "=" . "" . 'NGN' . number_format($valX, 2);
                                                                 echo '<br><br>';
                                                                 echo'</div>';
                                                                 
                                                                 if($lien == 1){
                                                                 echo"<div style='font-size:25px; float:left; left:200px;'>";
                                                                 echo "Account(is on Lien)" . "=" . "Lien" ;
                                                                 echo '<br><br>';
                                                                 }else{}
                                                              }
                                                         
                                                         
                                                        
                                                         
                                                       
                                                            
                                                    }
                                                    
                                                    
                                                    
                                    
                                            
                                          
                                           ?>
                                           
                                          
                                                
                                                  <div style="margin-left:200px;">
                                       
                                             <?php
                                             $host      = "127.0.0.1";
                                             $username  = "becnouco_land";
                                             $password  = "$.AYV?_caQQC";
                                             $dbname    = "becnouco_land";
                                    
                                            // Create connection
                                            $conn = mysqli_connect($host, $username, $password, $dbname);
                                            // Check connection
                                            if (!$conn) {
                                              die("Connection failed: " . mysqli_connect_error());
                                            }
                                             $sql = "SELECT * FROM Person WHERE AccountNo='$AccountNo'";
                                             $result = mysqli_query($conn, $sql);
                                            
                                             //public_html\image\tiper1.jpg
                                            
                                             while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
                                                echo "<img src='".$row['logo']."' style='width:400px; height:400px;'>";
                                                echo '<h6>' . ' Signature Upload' . '<h6>'; 
                                                echo '<br>';
                                                echo '<br>';
                                                 
                                                echo "<img src='".$row['image']."' style='width:400px; height:400px;'>";
                                                echo '<h6>' . 'Image Upload' . '<h6>'; 
                                            }
                                           
                                           ?>
                                       
                                       </div>
                                            </div>
                                        </div>
                                        
                                     
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
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
                            @
                            <script>
                                document.write(new Da                                   te().getFullYear())
                            </script> (Becnou)
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
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> 路 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> 路 426</button>
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
