<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');

 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";
 $conn = mysqli_connect($host, $username, $password, $dbname);
 

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    
    $sata      =$_POST['sata'];
    $sql = "SELECT id, FieldOfficer, Status FROM FieldOfficer WHERE Status='$sata' LIMIT 50";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["FieldOfficer"]. " " . $row["Status"]. "<br>";
        $res = $row["FieldOfficer"];
        
            $data = [
                'status'   => 200,
                'message'  => 'FieldOfficer product Info Fetch Successfully',
                'data'     => $res
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);
      }
    } else {
      echo "0 results";
    }
    
}
    
?>