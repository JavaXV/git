
<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');


 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
     $host      = "127.0.0.1";
     $username  = "zea10000_api";
     $password  = "WF&kz]k_aK(i";
     $dbname    = "zea10000_api";
    // $conn = mysqli_connect($host, $username, $password, $dbname);
     
   
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

      
          
                    //get the last record from the database using timestamp
                    $stmt = $con->query("SELECT * FROM Smsalerts ORDER BY id DESC LIMIT 1");
                    $stmt->execute();
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   
                         //$id = $row['id'] + 1;
                            
                             $i = 1;
                             while ($i < 5) {
                                 
                                 echo $i;
                                      
                                                   $data = [
                                                        'status'   => 200,
                                                        'message'  => 'Staff Info Fetch Successfully',
                                                        'data'     => $valued
                                                        ];
                                                        header("HTTP/1.0 200 Ok");
                                                        echo json_encode($data);
                                
                            $i++;
                      
                        }
                      
   



   
}

    
?>
