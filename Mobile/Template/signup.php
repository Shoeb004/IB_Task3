<?php
// require MySQL Connection
require ('../database/DBController.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql =  "INSERT INTO `user` (`name`, `email`,`mobile`, `password`) VALUES
    ('$name', '$email', '$mobile', '$password')";
  }
  $result= mysqli_query($con,$sql);
  if($result){
    die ;
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
     <!-- Bootstrap CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h3 class="text-center text-success mt-5">Register your self</h3>
    <div class="container  d-flex justify-content-center align-items-cente">
    <form class="w-50" action="signup.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Full name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter fulle name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address </label>
    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email address">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Mobile number</label>
    <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Enter mobile number">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm password</label>
    <input type="password" class="form-control" name="cpassword" id="cpassword"  placeholder="Enter confirm password">
  </div>
  <button type="submit" class="btn btn-success w-100" name="signup">Sign up</button>
</form>
    </div>
</body>
</html>