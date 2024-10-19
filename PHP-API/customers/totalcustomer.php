<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');
require '../inc/dbcon.php';

 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";
 $conn = mysqli_connect($host, $username, $password, $dbname);
 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    

 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "sk77BzE[Ln;O65";
 $dbname    = "becnouco_land";
                 $conn = mysqli_connect($host, $username, $password, $dbname);
               
               //---------------------------------YABA----------------------------------------
               
                $some_q = "SELECT SUM(Yaba) AS `count_col` FROM Accounts WHERE Branch='Yaba'";
                $results = mysqli_query($conn, $some_q) or die(mysqli_error());

                while($row = mysqli_fetch_array($results)){
                        // echo"<div style='font-size:30px; float:right; padding-right:100px;'>";
                        // echo "DEPOSITE(SUM)" . "=" . "" . 'NGN' . number_format($row['count_col'], 2);;
                        // echo '<br><br>';
                        // echo'</div>';
                        
                       $boom = $row['count_col'];
                       $sql ="UPDATE totals SET totalcustomer=$boom WHERE branch='Yaba'";
                       if($conn->query($sql) == TRUE){
                          
                        $data = [
                          'status'   => 200,
                          'message'  => 'Record RESECT Successfully',
                         ];
                      header("HTTP/1.0 200 Ok");
                      echo json_encode($data);
                       }
                }
                
                //---------------------------------IKEJA--------------------------------------------
                
                $some_q1 = "SELECT SUM(Ikeja) AS `count_col1` FROM Accounts WHERE Branch='Ikeja'";
                $results = mysqli_query($conn, $some_q1) or die(mysqli_error());

                while($row = mysqli_fetch_array($results)){
                        // echo"<div style='font-size:30px; float:right; padding-right:100px;'>";
                        // echo "DEPOSITE(SUM)" . "=" . "" . 'NGN' . number_format($row['count_col1'], 2);;
                        // echo '<br><br>';
                        // echo'</div>';
                        
                       $boom = $row['count_col1'];
                       $sql ="UPDATE totals SET totalcustomer=$boom WHERE branch='Ikeja'";
                       if($conn->query($sql) == TRUE){
                          
                        $data = [
                          'status'   => 200,
                          'message'  => 'Record RESECT Successfully',
                         ];
                      header("HTTP/1.0 200 Ok");
                      echo json_encode($data);
                       }
                }
                
                
                 //---------------------------------AJAH--------------------------------------------
                
                $some_q2 = "SELECT SUM(Ajah) AS `count_col2` FROM Accounts WHERE Branch='Ajah'";
                $results = mysqli_query($conn, $some_q2) or die(mysqli_error());

                while($row = mysqli_fetch_array($results)){
                        // echo"<div style='font-size:30px; float:right; padding-right:100px;'>";
                        // echo "DEPOSITE(SUM)" . "=" . "" . 'NGN' . number_format($row['count_col2'], 2);;
                        // echo '<br><br>';
                        // echo'</div>';
                        
                       $boom = $row['count_col2'];
                       $sql ="UPDATE totals SET totalcustomer=$boom WHERE branch='Ajah'";
                       if($conn->query($sql) == TRUE){
                          
                        $data = [
                          'status'   => 200,
                          'message'  => 'Record RESECT Successfully',
                         ];
                      header("HTTP/1.0 200 Ok");
                      echo json_encode($data);
                       }
                }
                
            
                  
                 //---------------------------------IKORODU--------------------------------------------
                
                $some_q3 = "SELECT SUM(Ikorodu) AS `count_col3` FROM Accounts WHERE Branch='Ikorodu'";
                $results = mysqli_query($conn, $some_q3) or die(mysqli_error());

                while($row = mysqli_fetch_array($results)){
                        // echo"<div style='font-size:30px; float:right; padding-right:100px;'>";
                        // echo "DEPOSITE(SUM)" . "=" . "" . 'NGN' . number_format($row['count_col3'], 2);;
                        // echo '<br><br>';
                        // echo'</div>';
                        
                       $boom = $row['count_col3'];
                       $sql ="UPDATE totals SET totalcustomer=$boom WHERE branch='Ikorodu'";
                       if($conn->query($sql) == TRUE){
                          
                        $data = [
                          'status'   => 200,
                          'message'  => 'Record RESECT Successfully',
                         ];
                      header("HTTP/1.0 200 Ok");
                      echo json_encode($data);
                       }
                }
}
?>