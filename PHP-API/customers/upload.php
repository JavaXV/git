<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');
require '../inc/dbcon.php';

 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";
 $conn = mysqli_connect($host, $username, $password, $dbname);
 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
   $query = mysqli_query($conn, "select * from Accounts");
   $number=1;
   while($row=mysqli_fetch_array($query)){
       $id = $row['id'];
       $sql ="UPDATE Accounts SET id=$number WHERE id=$id";
       if($conn->query($sql) == TRUE){
          
        $data = [
          'status'   => 200,
          'message'  => 'Record RESECT Successfully',
         ];
      header("HTTP/1.0 200 Ok");
      echo json_encode($data);
       }
       $number++;
   }
   
  $sql ="ALTER TABLE Accounts AUTO_INCREMENT=1";
    if($conn->query($sql) == TRUE){
          $data = [
          'status'   => 200,
          'message'  => 'Record ALTER Successfully',
         ];
      header("HTTP/1.0 200 Ok");
      echo json_encode($data);
    }else{
        echo "Error ALTER: ". $conn->error;
    }
   
}

    
?>