<?php 
include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="headerpart">
<div class="container">
    <div class="row">
        
      <div class="col-md-6">
       <div class="form-group">
           
           <h2>Sign Up Here</h2>
       <form method="post" action="registration.php">
       <label for="">Username</label><br>
       <input type="text"name="username"placeholder="Enter Your username"class="form-control"><br>
       <label for="">Password</label><br>
       <input type="password"name="password"placeholder="Enter Your Password Here"class="form-control"><br>
       <button type="submit" class="btn btn-primary">Submit</button>
       </form>
       </div>
      </div>
      <div class="col-md-6">
      
           
           <h2>LogIN Here</h2>
       <form method="post" action="validation.php">
       <div class="form-group">
       <label for="">Username</label><br>
       <input type="text"name="username"placeholder="Enter Your username"class="form-control"><br>
       <label for="">Password</label><br>
       <input type="password"name="password"placeholder="Enter Your Password Here"class="form-control"><br>
       <button type="submit" class="btn btn-primary">Login</button>
       </form>
       </div>
      </div>
   
</div>
</div>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>