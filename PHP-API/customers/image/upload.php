<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Allow-Headers,Authorization, X-Request-With');

echo "<form action='' method='POST'>
<input type='text' name='smsalert'>
</form>";

 $host      = "127.0.0.1";
 $username  = "zea10000_api";
 $password  = "WF&kz]k_aK(i";
 $dbname    = "zea10000_api";
 $conn = mysqli_connect($host, $username, $password, $dbname);
 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
        $smsalert=$_POST['smsalert'];
    	$que1=mysqli_query($conn,"SELECT * FROM `Person` WHERE SMSAlert = '$smsalert'");
		$count1=mysqli_num_rows($que1);
		
		if($count1>0)
		{
               $data = [
                   'status'   => 500,
                   'message'  =>$requestMethod. 'Method Not Allowed',
                   ];
                   header("HTTP/1.0 500 Method Not Allowed");
                   echo json_encode($data);
		}else{
		    
		$filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "image/" . $filename;
        
        $target_dir = "image/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $fileName = $_FILES['file']['name'];
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        $validImageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'pdf'];
        
        if ($_FILES['file']['type'] == 'png') {
            

            
              if (move_uploaded_file($tempname, $folder)) {
               // echo "<h3>  Image uploaded successfully!</h3>";
                header("Location: https://zealluckresourcesng.com/RecenthPost/dashboard/index.php");
               
            }else{
         echo "The File Not Sent";
    }
            
        }
        
		    
		
     //$target_dir ="image\\";
   
     
     
    $filename = $_FILES["file"]["name"];
    $filename1 = $_FILES["file1"]["name"];
    $folder = "images/" . $filename;
    
    $target_dir = "images/";
    $target_file = $target_dir . basename(($_FILES['file']['name']));
    $target_file1 = $target_dir  . basename(($_FILES['file1']['name']));


    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
        
        if(move_uploaded_file($_FILES['file1']['tmp_name'],$target_file1)){
            
             
        $sql = "INSERT INTO Person (image,logo,smsalert) VALUES ('$filename', '$filename1', '$smsalert')";
        
        if ($conn->query($sql) === TRUE) {
         
           $data = [
                'status'   => 200,
                'message'  => 'File Upload',
                'data'     => $sql
            ];
            header("HTTP/1.0 200 Ok");
            echo json_encode($data);
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
           $data = [
            'status'   => 500,
            'message'  => 'Internal Server Error',
        ];
        header("HTTP/1.0 Internal Server Error");
        echo json_encode($data);
        }

            
        }
                
    }else{
         echo "The File Not Sent";
    }
}
}
    
?>