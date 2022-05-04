<?php
$host="localhost";
$user="root";
$password="123456";
$db = "kt2_tran_trung_ta";

$con = mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{  //echo "Connect"; 
  
   
   }

?>
