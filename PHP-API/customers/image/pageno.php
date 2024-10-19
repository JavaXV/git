<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');

 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";
 $conn = mysqli_connect($host, $username, $password, $dbname);
 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

      
      
      
                $token     =$_POST['token'];
               // $accountno =$_POST['accountno'];
                
                $sql = "SELECT * FROM Person where Token='$token'";
                $result1 = $conn->query($sql);
                
                if ($result1->num_rows > 0) {
                  // output data of each row
                  while($row1 = $result1->fetch_assoc()) {
                    $accountno1 =  $row1["AccountNo"];
                    
                    
                 $sql = "SELECT id, PageNo, AccountNo FROM PageNos where AccountNo='$accountno1' LIMIT 12";
                 $result = $conn->query($sql);
                
                 if ($result->num_rows > 0) {
                  // output data of each row
                  while($res = $result->fetch_assoc()) {
                      
                      
                        $res = mysqli_fetch_assoc($result);
                          $data = [
                                'status'   => 200,
                                'message'  => 'Staff Info Fetch Successfully',
                                'data'     => $res
                            ];
                            header("HTTP/1.0 200 Ok");
                            echo json_encode($data);

                  }
                } else {
                  echo "0 results";
                }
                    
                  }
                }            
                
            
            
    
		    
    
}
    
?>