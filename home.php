<?php 

include "./connect.php";


?>



<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <title>Home</title>
</head>

<body>
 <div class="container m-5">
  <button class="btn btn-primary">
   <a href="user.php" class="text-light text-decoration-none">Add User</a>
  </button>


  <table class="table">
   <thead>
    <tr>
     <th scope="col">S1 no</th>
     <th scope="col">Name</th>
     <th scope="col">Email</th>
     <th scope="col">Mobile</th>
     <th scope="col">Password</th>
     <th scope="col">Operations</th>
    </tr>
   </thead>
   <tbody>




    <?php 
    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($connect, $sql);

    if($result){
     // $row = mysqli_fetch_assoc($result);
     // echo $row["name"];


     while($row = mysqli_fetch_assoc($result)){

      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $mobile = $row['mobile'];
      $password = $row['password'];

      echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>

     <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
     <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>

    </td>
      </tr>';
      
     
    };
   }
    
    
    ?>

    <!--     
    <tr>
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
    </tr>
   </tbody> -->
  </table>
 </div>
</body>

</html>