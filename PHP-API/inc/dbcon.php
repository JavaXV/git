<?php

 $host      = "127.0.0.1";
 $username  = "root";
 $password  = "";
 $dbname    = "bestwing_db";
 



  $conn = mysqli_connect($host, $username, $password, $dbname);
  echo "php";
 //$conn = mysqli_connect("108.61.21.218", "bestwing_db_transaction", "", "bestwing_db_transaction", "3306");

 if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
 }


?>