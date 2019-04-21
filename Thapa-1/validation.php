

<!-- <?php 
session_start();

 
include 'connect.php';

 
$username=$_POST['username'];
$pass=$_POST['password'];




$sql="SELECT * FROM sign_up WHERE username='$username' && password='$pass'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==true){
    $_SESSION['username']=$username;
    // $_SESSION['password']=$pass;
   header('location:home.php');
}else{
    
    header('location:login.php');

    
}
// ?>


?> -->