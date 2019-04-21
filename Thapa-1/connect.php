<?php 
$host="localhost";
$user="root";
$pass="";
$dbname="session_thapa";
$conn=new mysqli($host,$user,$pass,$dbname);

if($conn->connect_error){
  die("Connection Error").$e->connect_error;
}else{
    echo "Connection establsihed successfully";
}




?>