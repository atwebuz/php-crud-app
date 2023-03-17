<?php include('./connect.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>crud display</title>
</head>
<body>
    
    <div class="container">
        <button class="btn btn-primary my-5"><a class="text-light" href="./user.php">add user</a></button>


        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
        $sql="SELECT * FROM `crud`";
        $result=mysqli_query($conn,$sql);
        if($result){
         
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $phone=$row['phone'];
                $password=$row['password'];

                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$password.'</td>
                <td>
                    <button class="btn btn-primary"><a href="update.php?id='.$id.'" class="text-light">update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?id='.$id.'" class="text-light">delete</a></button>
                </td>
              </tr>';
            }

        }
  ?>
    

    
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->

   


  </tbody>
</table>
    </div>

</body>
</html>

<?php 

?>