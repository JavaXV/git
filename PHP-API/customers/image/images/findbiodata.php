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
           	
        $sql = "SELECT * FROM Accounts WHERE AccountNo='$accountno'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $ids = $row['id']; 
            // $Branch =$row['Branch']; 
            // $CustomerId =$row['CustomerId']; 
            
            
            
														
          }
        } else {
         //echo "0 results";
        }
        
        mysqli_close($conn);
}

?>

<?php
//  $host      = "127.0.0.1";
//  $username  = "becnouco_land";
//  $password  = "$.AYV?_caQQC";
//  $dbname    = "becnouco_land";

//         // Create connection
//         $conn = mysqli_connect($host, $username, $password, $dbname);
//         // Check connection
//         if (!$conn) {
//           die("Connection failed: " . mysqli_connect_error());
//         }
        
//         $Balance ="";

           	
           	
//         $sql = "SELECT * FROM Person WHERE CustomerId='$CustomerId'";
//         $result = mysqli_query($conn, $sql);
        
//         if (mysqli_num_rows($result) > 0) {
//           // output data of each row
//           while($row = mysqli_fetch_assoc($result)) {
//             //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//             $id = $row['id']; 
//             $Branch =$row['Branch']; 
//             $CustomerId =$row['CustomerId']; 
//             $FullName = $row['Fullname'];
//             $Job = $row['Job']; 
//             $Gender = $row['Gender'];
//             $FieldOfficer = $row['FieldOfficer']; 
//             $Country = $row['country']; 
//             $Address = $row['HomeAddress']; 
//             $BusStop = $row['NearestBusStop']; 
//             $MaritalStatus = $row['MaritalStatus']; 
//             $DateOfBirth = $row['DateOfBirth'];
			
// 			$SMSAlert  = $row['SMSAlert']; 
//             $AccountNo = $row['AccountNo']; 
//             $NextOfKin = $row['NextOfKin']; 
//             $NextOfKinAddress = $row['NextOfKinAddress']; 
//             $NextOfKinPhone = $row['NextOfKinPhone'];
// 		    $Email  = $row['Email'];
// 		    $image  = $row['logo'];
														
//           }
//         } else {
//          //echo "0 results";
//         }
        
//         mysqli_close($conn);
        
    


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
            
             $Relationship = $row['Relationship'];
             $Localgovt    = $row['Localgovt'];
             $State        = $row['State'];
             $HomeAddress       = $row['HomeAddress'];
             $OfficeAddress     = $row['OfficeAddress'];
			
			$SMSAlert  = $row['SMSAlert']; 
            $AccountNo = $row['AccountNo']; 
            $NextOfKin = $row['NextOfKin']; 
            $NextOfKinAddress = $row['NextOfKinAddress']; 
            $NextOfKinPhone = $row['NextOfKinPhone'];
		    $Email  = $row['Email'];
		    $image  = $row['logo'];
		    $logo  = $row['image'];
		    $Product = $row['Product'];
														
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
        
        $Balance ="";
        if(isset($_POST['accountno1'])){
            $accountno = $_POST['accountno'];
            $id = $_POST['id'];
            $Branch =$_POST['branch']; 
            $CustomerId =$_POST['customerid']; 
            $FullName = $_POST['fullname'];
            $Job = $_POST['job']; 
            $Gender = $_POST['gender'];
            $FieldOfficer = $_POST['fieldofficer']; 
            $Country = $_POST['country']; 
            $Address = $_POST['address']; 
            $BusStop = $_POST['busstop']; 
            $MaritalStatus = $_POST['marital'];  	
            $DateOfBirth = $_POST['birth'];
            $OfficeAddress     = $_POST['OfficeAddress'];
            
             $Relationship = $_POST['relationship'];
             $Localgovt    = $_POST['localgovt'];
             $State        = $_POST['state'];
             $HomeAddress        = $_POST['address'];
			
			$SMSAlert  = $_POST['phoneno']; 
            $AccountNo = $_POST['accountnoX']; 
            $NextOfKin = $_POST['kin1']; 
            $NextOfKinAddress = $_POST['kin2']; 
            $NextOfKinPhone = $_POST['kin3'];
		    $Product = $_POST['product'];
           	
           	
        $sql = "UPDATE Person SET Branch='$Branch',OfficeAddress='$OfficeAddress',CustomerId='$CustomerId',FullName='$FullName',Job='$Job',Gender='$Gender',FieldOfficer='$FieldOfficer',country='$Country',HomeAddress='$Address',NearestBusStop='$BusStop',MaritalStatus='$MaritalStatus',DateOfBirth='$DateOfBirth',Relationship='$Relationship',Localgovt='$Localgovt',State='$State',SMSAlert='$SMSAlert',AccountNo='$AccountNo',NextOfKin='$NextOfKin',NextOfKinAddress='$NextOfKinAddress',NextOfKinPhone='$NextOfKinPhone',Product='$Product' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
          echo"<div style='font-size:30px; float:left; left:50px;'>";
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
       
		
        
        mysqli_close($conn);
        
    }


?>



<?php 
// Include the database configuration file 
include_once 'dbConfig.php'; 
 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";
 
        // Create connection
        $db = mysqli_connect($host, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
 
$statusMsg = ''; 
 
// File upload directory 
$targetDir = "Uploads/"; 
 
if(isset($_POST["submit"])){ 
    $smsalert=$_POST['phoneno'];
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database
                $Up =  $fileName;
                $insert = $db->query("UPDATE Person SET image='$Up' WHERE AccountNo='$smsalert'"); 
             
                if($insert){ 
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
// Display status message 
echo"<div style='font-size:30px; float:left; left:50px;'>";
echo $statusMsg; 
?>


<?php 
// Include the database configuration file 
include_once 'dbConfig.php'; 
 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";
 
        // Create connection
        $db = mysqli_connect($host, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
 
$statusMsg = ''; 
 
// File upload directory 
$targetDir = "Uploads/"; 
 
if(isset($_POST["submit1"])){ 
    $smsalert=$_POST['phoneno'];
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database
                $Up =  $fileName;
                $insert = $db->query("UPDATE Person SET logo='$Up' WHERE AccountNo='$smsalert'"); 
             
                if($insert){ 
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
// Display status message 
echo"<div style='font-size:30px; float:left; left:50px;'>";
echo $statusMsg; 
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
           	
        $sql = "SELECT * FROM Accounts WHERE AccountNo='$accountno'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $ids = $row['id']; 
            $Balance =$row['AccountBalance']; 
    
														
          }
        } else {
         //echo "0 results";
        }
        
        mysqli_close($conn);
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
    <title>Find Bio-Data(AccountNo)</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <style>
    .button {
      background-color: #04AA6D;
      border: none;
      color: white;
      top: 10;
      padding: 25px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      height: 100;
    }
    </style>
	
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
					  <li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/acctnodate.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">AccountNo | Date</p>
                        </a>
                    </li>
                       <li class="nav-item active">
                        <a class="nav-link" href="https://apps.becnou.com/api/PHP-API/customers/image/images/findbiodata.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">Bio-Information</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="pageno.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">pageNO|Account  </p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="pageno1.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">pageNO|Transact </p>
                        </a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="https://apps.becnou.com/api/PHP-API/customers/image/images/findguarantor.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">Find | Guarantor </p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/dailyfieldofficer.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">FieldOfficer | Date </p>
                        </a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/smscheck.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">Find | SmsAlert </p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/acctno_pageno.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">AcctNo| PageNo </p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/fieldmonthyear.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">Officer|Mnth/Yr </p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/findloan.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">Officer|Product </p>
                        </a>
                    </li>
					<li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/fieldofficeryear.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">FieldOfficer| Year </p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://becnou.com/901.90.23/124.0.1/transactiontype.php">
                            <i class="nc-icon nc-notes"></i>
                            <p style="color:yellow;">TranType|ActNo </p>
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
																	    <label for="exampleFormControlInput1" class="form-label">Check</label>
																		<button type="submit" class="btn btn-primary" name="findX">Find User-Info</button>
																	</div>																	
																	</div>	
																	<div class="col-sm">
																	<div class="mb-3">
																	    <label for="exampleFormControlInput1" class="form-label">Check</label> 
																	     <div class="form-group">
                                                                            <button class="btn btn-primary" type="submit" name="accountno1"  style="height:70px; width:200px;">UPDATE BIO.INFO</button>
                                                                        </div>
																	
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
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Customer-Id</label>
                                                    <input type="text" class="form-control" name="customerid" placeholder="Custoemr-Id" value="<?php  echo $CustomerId; ?>">
                                                </div>
                                            </div>
                                            <div class="coN-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">FullName</label>
                                                    <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php  echo $FullName; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Field-Officer</label>
                                                    <input type="text" class="form-control" name="fieldofficer" placeholder="field-Officer" value="<?php  echo $FieldOfficer; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?php  echo $Email; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <div class="col-md-16">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <input type="text" class="form-control" name="gender" placeholder="Gender" value="<?php  echo $Gender; ?>">
                                                </div>
                                            </div>
                                    
                                        <div class="row">
                                           
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" name="country" placeholder="Country" value="<?php  echo $Country; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Home-Address</label>
                                                    <input type="text" class="form-control" name="address" placeholder="Address" value="<?php  echo $Address; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Product</label>
                                                    <input type="text" class="form-control" name="product" placeholder="Address" value="<?php  echo $Product; ?>">
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Nearest-BusStop</label>
                                                    <input type="text" class="form-control" name="busstop" placeholder="Nearest-BusStop" value="<?php  echo $BusStop; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Marital-Status</label>
                                                    <input type="text" class="form-control" name="marital" placeholder="Marital-Status" value="<?php  echo $MaritalStatus; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Date-Of-Birth</label>
                                                    <input type="text" class="form-control" name="birth" placeholder="Date-Of-Birth" value="<?php  echo $DateOfBirth; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>PhoneNo</label>
                                                    <input type="text" class="form-control" name="phoneno" placeholder="PhoneNo" value="<?php  echo $SMSAlert; ?>">
                                                </div>
                                            </div>  
                                            

             
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Next-Of-kin-Relationship</label>
                                                    <input type="text" class="form-control" name="relationship" placeholder="Next-Of-kin" value="<?php  echo $Relationship; ?>">
                                                </div>
                                            </div>
                                            
                                             <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Local-Govt</label>
                                                    <input type="text" class="form-control" name="localgovt" placeholder="Next-Of-kin" value="<?php  echo $Localgovt; ?>">
                                                </div>
                                            </div>
                                            
                                             <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>State.Of.Origin</label>
                                                    <input type="text" class="form-control" name="state" placeholder="Next-Of-kin" value="<?php  echo $State; ?>">
                                                </div>
                                            </div>
                                            
                                             <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Home-Address</label>
                                                    <input type="text" class="form-control" name="address" placeholder="Next-Of-kin" value="<?php  echo $HomeAddress; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Next-Of-kin-Name</label>
                                                    <input type="text" class="form-control" name="kin1" placeholder="Next-Of-kin" value="<?php  echo $NextOfKin; ?>">
                                                </div>
                                            </div>
                                              <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Office-Address</label>
                                                    <input type="text" class="form-control" name="OfficeAddress" placeholder="Office-Address" value="<?php  echo $OfficeAddress; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Job</label>
                                                    <input type="text" class="form-control" name="job" placeholder="Job Doing" value="<?php  echo $Job; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Next-Of-kin-Address</label>
                                                    <input type="text" class="form-control" name="kin2" placeholder="Next-Of-Address" value="<?php  echo $NextOfKinAddress; ?>">
                                                </div>
                                            </div>
                                             
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Next-Of-kin-PhoneNo</label>
                                                    <input type="text" class="form-control" name="kin3" placeholder="Next-Of-PhoneNo" value="<?php  echo $NextOfKinPhone; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Account-CreatedBy</label>
                                                    <input type="text" class="form-control" name="create" placeholder="Account-CreatedBy" value="<?php  echo $FullName; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Account-Id</label>
                                                    <input type="text" class="form-control" name="id" placeholder="Account-Id" value="<?php  echo $id; ?>">
                                                </div>
                                            </div>
                                              <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Account-No</label>
                                                    <input type="text" class="form-control" name="accountnoX" placeholder="Account-Id" value="<?php  echo $AccountNo; ?>">
                                                </div>
                                            </div>
                                            
                                            <!--<div class="col-md-4 pl-1">-->
                                            <!--    <div class="form-group">-->
                                            <!--        <label>Account-Balance</label>-->
                                                       <input type="text" class="form-control" disabled="" name="create" placeholder="Account-Balance" value="<?php  //echo 'NGN' . number_format($Balance, 2) ?>">
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                               
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                        <br><br><br><br><br><br>
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
                                                // echo "<img src='".$row['logo']."' style='width:150px; height:150px;'>";
                                                // echo '<h3>' . ' Signature Upload' . '<h3>'; 
                                                // echo '<br>'; 
                                                 
                                                // echo "<img src='".$row['image']."' style='width:150px; height:150px;'>";
                                                // echo '<h3>' . 'Image Upload' . '<h3>'; 
                                                // echo '<br>';
                                                // echo '<br>';
                                                
                                            }
                                           
                                           ?>
                                           
                                           
                                          <div id="content">
                                                <?php 
                                                  echo "<img src='". "Uploads/" . $logo."' style='width:150px; height:150px;'>";
                                                  echo '<h3>' . ' Image Upload' . '<h3>'; 
                                                ?>
                                                <form method="POST" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="phoneno" placeholder="PhoneNo" value="<?php  echo $AccountNo; ?>">
                                                        <input class="form-control" type="file" name="file" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit" name="submit">UPLOAD IMAGE</button>
                                                    </div>
                                                </form>
                                          </div>
                                          <br>
                                          <hr>
                                          <br>
                                           <div id="content">
                                                <?php 
                                                  echo "<img src='". "Uploads/" . $image."' style='width:150px; height:150px;'>";
                                                  echo '<h3>' . ' Signature Upload' . '<h3>'; 
                                                ?>
                                                <form method="POST" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="phoneno" placeholder="PhoneNo" value="<?php  echo $AccountNo; ?>">
                                                        <input class="form-control" type="file" name="file" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit" name="submit1">UPLOAD SIGNATURE</button>
                                                    </div>
                                                </form>
                                          </div>
                                          
                                           
                                        </a>
                                    </div>
                                    <br><br><br>
                                    
                                   
                                </div>
                                <hr>
                               
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
