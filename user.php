<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql= "insert into form (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result = mysqli_query ($con,$sql);
    if($result){
        //echo "data inserted successfully";
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
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form method="post">
           <div class="mb-3">
    <label for="" class="form-label" >name</label>
    <input type="name" name="name" class="form-control" placeholder="Enter your name" style="width:600px;">
  </div>   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"name="email" class="form-control" placeholder="Enter your email"style="width:600px;">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">mobile</label>
    <input type="mobile"name="mobile" class="form-control" placeholder="Enter your mobile number"style="width:600px;" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter your password"style="width:600px;">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </body>
</html>