<?php
// header('Access-Control-Allow-Origin:*');
// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin:*');
// header('Access-Control-Allow-Method: GET');
// header('Access-Control-Allow-Method: POST');
// header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');


 $host      = "127.0.0.1";
 $username  = "becnouco_land";
 $password  = "$.AYV?_caQQC";
 $dbname    = "becnouco_land";
 $conn = mysqli_connect($host, $username, $password, $dbname);
 
   
try
{
    $con=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}

$sql = "SELECT * FROM track1 WHERE id='1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      
          $data = [
                'status'   => 200,
                'message'  => 'Staff Info Fetch Successfully',
                'data'     => $valued
                ];
                header("HTTP/1.0 200 Ok");
                echo json_encode($data);
      
      $day = date('d');
      $dates = $row["datetimes"];
      if($dates == $day){
          
                    //get the last record from the database using timestamp
                    $stmt = $con->query("SELECT * FROM Smsalerts ORDER BY id DESC LIMIT 1");
                    $stmt->execute();
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                     foreach($rows as $row){
                         $id = $row['id'] + 1;
                    
                            
                             $i = 1;
                             while ($i < $id) {
                                // echo $i;
                                
                                    $sql = "SELECT * FROM Smsalerts WHERE id='$i'";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                          
                                            $count = $row["SmsAlertCount"];
                                            $balT  = $row["AccountBalance"];
                                            $acctno  = $row["AccountNumber"];
                                            
                                            $valued = $balT - $count;
                                    
                                            $sql = "UPDATE Accounts SET AccountBalance='$valued' WHERE AccountNo='$acctno'";
                                            if (mysqli_query($conn, $sql)) {
                                                
                                                //   $data = [
                                                //         'status'   => 200,
                                                //         'message'  => 'Staff Info Fetch Successfully',
                                                //         'data'     => $valued
                                                //         ];
                                                //         header("HTTP/1.0 200 Ok");
                                                //         echo json_encode($data);
                                            }
                                            
                                                
                                                $sqls = "UPDATE Smsalerts SET SmsAlertCount='0',AccountBalance='$valued' WHERE id='$i' AND AccountNumber='$acctno'";
                                                if (mysqli_query($conn, $sqls)) {}
                                                $sqlsx = "UPDATE track1 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsx)) {}
                                                $sqlsxx = "UPDATE track2 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsxx)) {}
                                                $sqlsxxx = "UPDATE track3 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsxxx)) {}
                                            
                                                    
                                      }
                                    
                                    } else {
                                      echo "Error updating record: " . mysqli_error($conn);
                                    }
                            
                            $i++;
                      
                        }
                      }
          
      }else{}
   
  }
} else {
 //echo "0 results";
}

//----------SECOND DATE---------------------------------
$sql = "SELECT * FROM track2 WHERE id='1'";
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
                    
                     foreach($rows as $row){
                         $id = $row['id'] + 1;
                    
                            
                             $i = 1;
                             while ($i < $id) {
                                // echo $i;
                                
                                    $sql = "SELECT * FROM Smsalerts WHERE id='$i'";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                          
                                            $count = $row["SmsAlertCount"];
                                            $balT  = $row["AccountBalance"];
                                            $acctno  = $row["AccountNumber"];
                                            
                                            $valued = $balT - $count;
                                    
                                            $sql = "UPDATE Accounts SET AccountBalance='$valued' WHERE AccountNo='$acctno'";
                                            if (mysqli_query($conn, $sql)) {
                                                
                                                //   $data = [
                                                //         'status'   => 200,
                                                //         'message'  => 'Staff Info Fetch Successfully',
                                                //         'data'     => $valued
                                                //         ];
                                                //         header("HTTP/1.0 200 Ok");
                                                //         echo json_encode($data);
                                            }
                                            
                                                
                                                
                                                $sqls = "UPDATE Smsalerts SET SmsAlertCount='0',AccountBalance='$valued' WHERE id='$i' AND AccountNumber='$acctno'";
                                                if (mysqli_query($conn, $sqls)) {}
                                                $sqlsx = "UPDATE track1 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsx)) {}
                                                $sqlsxx = "UPDATE track2 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsxx)) {}
                                                $sqlsxxx = "UPDATE track3 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsxxx)) {}
                                            
                                                    
                                          
                                      }
                                    
                                    } else {
                                      echo "Error updating record: " . mysqli_error($conn);
                                    }
                            
                            $i++;
                      
                        }
                      }
          
      }else{}
   
  }
} else {
 //echo "0 results";
}
//----------THIRD DATE---------------------------------

$sql = "SELECT * FROM track3 WHERE id='1'";
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
                    
                     foreach($rows as $row){
                         $id = $row['id'] + 1;
                    
                            
                             $i = 1;
                             while ($i < $id) {
                                // echo $i;
                                
                                    $sql = "SELECT * FROM Smsalerts WHERE id='$i'";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                          
                                            $count = $row["SmsAlertCount"];
                                            $balT  = $row["AccountBalance"];
                                            $acctno  = $row["AccountNumber"];
                                            
                                            $valued = $balT - $count;
                                    
                                            $sql = "UPDATE Accounts SET AccountBalance='$valued' WHERE AccountNo='$acctno'";
                                            if (mysqli_query($conn, $sql)) {
                                                
                                                  
                                                //   $data = [
                                                //         'status'   => 200,
                                                //         'message'  => 'Staff Info Fetch Successfully',
                                                //         'data'     => $valued
                                                //         ];
                                                //         header("HTTP/1.0 200 Ok");
                                                //         echo json_encode($data);
                                                
                                                 
                                            }
                                            
                                             
                                                
                                                $sqls = "UPDATE Smsalerts SET SmsAlertCount='0',AccountBalance='$valued' WHERE id='$i' AND AccountNumber='$acctno'";
                                                if (mysqli_query($conn, $sqls)) {}
                                                $sqlsx = "UPDATE track1 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsx)) {}
                                                $sqlsxx = "UPDATE track2 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsxx)) {}
                                                $sqlsxxx = "UPDATE track3 SET datetimes='0' WHERE id='1'";
                                                if (mysqli_query($conn, $sqlsxxx)) {}
                                           
                                              
                                         
                                      }
                                    
                                    } else {
                                      echo "Error updating record: " . mysqli_error($conn);
                                    }
                            
                            $i++;
                      
                        }
                      }
          
      }else{}
   
  }
} else {
 //echo "0 results";
}


   
      $dayy = date('d');
      if($day == "10"){
            $sqlsx = "UPDATE track1 SET datetimes='27' WHERE id='1'";
            if (mysqli_query($conn, $sqlsx)) {}
            $sqlsxx = "UPDATE track2 SET datetimes='28' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxx)) {}
            $sqlsxxx = "UPDATE track3 SET datetimes='29' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxxx)) {}
      }
      if($day == "11"){
            $sqlsx = "UPDATE track1 SET datetimes='27' WHERE id='1'";
            if (mysqli_query($conn, $sqlsx)) {}
            $sqlsxx = "UPDATE track2 SET datetimes='28' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxx)) {}
            $sqlsxxx = "UPDATE track3 SET datetimes='29' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxxx)) {}
      }
      if($day == "12"){
          
           $sqlsx = "UPDATE track1 SET datetimes='27' WHERE id='1'";
            if (mysqli_query($conn, $sqlsx)) {}
            $sqlsxx = "UPDATE track2 SET datetimes='28' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxx)) {}
            $sqlsxxx = "UPDATE track3 SET datetimes='29' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxxx)) {}
          
      }
      if($day == "13"){
          
            $sqlsx = "UPDATE track1 SET datetimes='27' WHERE id='1'";
            if (mysqli_query($conn, $sqlsx)) {}
            $sqlsxx = "UPDATE track2 SET datetimes='28' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxx)) {}
            $sqlsxxx = "UPDATE track3 SET datetimes='29' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxxx)) {}
      }
      if($day == "14"){
          
            $sqlsx = "UPDATE track1 SET datetimes='27' WHERE id='1'";
            if (mysqli_query($conn, $sqlsx)) {}
            $sqlsxx = "UPDATE track2 SET datetimes='28' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxx)) {}
            $sqlsxxx = "UPDATE track3 SET datetimes='29' WHERE id='1'";
            if (mysqli_query($conn, $sqlsxxx)) {}
          
      }
    
?>


