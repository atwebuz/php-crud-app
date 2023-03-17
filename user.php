<?php
    include('./connect.php');
   
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];

        $sql="INSERT INTO `crud` (name, email,phone,password) 
        VALUES('$name','$email','$phone','$password')";

        $result=mysqli_query($conn, $sql);

        if($result){
            header('location:display.php');
            // echo 'Data inserted successfuly';
        }else{

            die(mysqli_error($conn));
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>crud app</title>
</head>
<body>
    <div class="container my-5">
    <form class="mt-3" method="post">
  <div class="mb-3">
    <label>Name address</label>
    <input type="text" class="form-control" id="name" name="name" autocomplete="off" >
  </div>
  <div class="mb-3">
    <label>Email address</label>
    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" autocomplete="off"> 
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" id="password" name="password" autocomplete="off"> 
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>