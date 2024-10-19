<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');
require '../inc/dbcon.php';

 $host      = "127.0.0.1";
 $username  = "root";
 $password  = "";
 $dbname    = "bestwing_db";
 $conn = mysqli_connect($host, $username, $password, $dbname);
 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
$sql = "SELECT * FROM track1 WHERE allx='1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  
      $day = date('d');
      $dates = $row["datetimes"];
      if($dates == $day){
          
                    //get the last record from the database using timestamp
                    $stmt = $con->query("SELECT * FROM Smsalerts ORDER BY id DESC LIMIT 1");
                    $stmt->execute();
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    for ($x = 0; $x <= 10; $x++) {
                      echo "The number is: $x <br>";
                    }
                    
                     $data = [
                                                        'status'   => 200,
                                                        'message'  => 'Staff Successfully',
                                                        'data'     => $x,
                                                        ];
                                                        header("HTTP/1.0 200 Ok");
                                                        echo json_encode($data);

                    
                      
      }
    }
  }else{
      
  }
   
}
?>