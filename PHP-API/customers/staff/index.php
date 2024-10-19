<?php

 $servername  ="localhost";
 $username    ="becnouco_land";
 $password    ="$.AYV?_caQQC";
 $dbname      ="becnouco_land";
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['login'])) {
    
    $pin           =$_POST['pin'];
    $password      =$_POST['password'];

$sql = "UPDATE Staff SET Passwword='$password' WHERE status='$pin'";

if (mysqli_query($conn, $sql)) {
  $message ="Password successfully Update";
  echo "<script type='text/javascript'>alert('$message');</script>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Becnou | Password_Generate</title>
  </head>
  <body>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
        <form action="" method="post">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <!--<img src="assets/images/becnou.png">-->
                <h5 style="text-align: center; color: blue;">Generate Password</h5>
                </div>
                <div class="form-group">
                  <input type="text" name="pin" class="form-control _ge_de_ol" type="text" placeholder="Enter Pin" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="text" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                <!--<div class="checkbox form-group">-->
                <!--  <div class="form-check">-->
                <!--    <input class="form-check-input" type="checkbox" value="" id="">-->
                <!--    <label class="form-check-label" for="">-->
                <!--      Remember me-->
                <!--    </label>-->
                <!--  </div>-->
                <!--  <a href="#">Forgot Password</a>-->
                <!--</div>-->

                <div class="form-group">
                     <button type="submit" name="login" value="login" class="_btn_04">Generate</button>
                </div>

                <!--<div class="form-group nm_lk"><p>Or Login With</p></div>-->

                <div class="form-group pt-0">
                  <div class="_social_04">
                    <ol>
                      <!--<li><i class="fa fa-facebook"></i></li>-->
                      <!--<li><i class="fa fa-twitter"></i></li>-->
                      <!--<li><i class="fa fa-google-plus"></i></li>-->
                      <!--<li><i class="fa fa-instagram"></i></li>-->
                      <!--<li><i class="fa fa-linkedin"></i></li>-->
                    </ol>
                  </div>
                </div>
                 <div class="form-group pt-0">
                  <div class="_social_04">
                    <ol>
                      <!--<li><i class="fa fa-facebook"></i></li>-->
                      <!--<li><i class="fa fa-twitter"></i></li>-->
                      <!--<li><i class="fa fa-google-plus"></i></li>-->
                      <!--<li><i class="fa fa-instagram"></i></li>-->
                      <!--<li><i class="fa fa-linkedin"></i></li>-->
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </form>
        </div>
        
        
      </div>
    </section>
  </body>
</html>