<?php
include ("connect.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql= "insert into crud (name, email, phone, password)
    values('$name','$email','$phone','$password')";
    $result = mysqli_query($con, $sql);
    if($result){
      header('location: display.php');
    }else{
      die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Office staffs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control"
     placeholder="Enter your name" name="name" autocomplete="off">
    </div>

    <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control"
     placeholder="Enter your email" name="email" autocomplete="off">
    </div>

    <div class="mb-3">
    <label>phone</label>
    <input type="text" class="form-control"
     placeholder="Enter your phone number" name="phone" autocomplete="off">
    </div>

    <div class="mb-3">
    <label>password</label>
    <input type="text" class="form-control"
     placeholder="Enter your phone password" name="password" autocomplete="off">
    </div>
  
  <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
</form>

  </body>
</html>