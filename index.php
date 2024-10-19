<?php

 $host      = "localhost";
 $username  = "zea10000_api";
 $password  = "WF&kz]k_aK(i";
 $dbname    = "zea10000_api";


  $conn = mysqli_connect($host, $username, $password, $dbname);
 //$conn = mysqli_connect("108.61.21.218", "zea10000_api_transaction", "WF&kz]k_aK(i", "zea10000_api_transaction", "3306");

 if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
 }else{
	 echo "DB Connected";
 }


?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html> 

 

