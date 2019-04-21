<?php 
session_start();
// header('location:login.php');
include 'connect.php';

// mysqli_select_db($con,'session_thapa');
$username=$_POST['username'];
$pass=$_POST['password'];




$sql="SELECT * FROM sign_up WHERE username='$username' && password='$pass'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==true){
    echo "Data duplicated";
}else{
    $qy="INSERT INTO sign_up(username,password)VALUES('$username','$pass')";
    mysqli_query($conn,$qy);
   
}


?>