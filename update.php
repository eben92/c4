<?php 

include "./connect.php";
 $id = $_GET['updateid'];
 $sql = "SELECT * FROM `crud` WHERE id = '$id'";
 $result = mysqli_query($connect, $sql);
 $row = mysqli_fetch_assoc($result);
 $name = $row['name'];
 $email = $row['email'];
 $mobile = $row['mobile'];
 $password = $row['password'];





if(isset($_POST['submit'])){

 $name = $_POST['name'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $password = $_POST['password'];

 $sql = "UPDATE `crud` SET `id`='$id', `name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' where id='$id'"; ; 
 $result = mysqli_query($connect,$sql);
 if($result){
 	// echo "Data Updated";
  header("location:home.php");
 }
 else{
 	echo "Data Not Updated";
 };
}

 // $name = $_POST['name'];


 




?>



<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <title>Crud App</title>
</head>

<body>
 <div class="container m-5">
  <form method="post">
   <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="your name" value="<?php echo $name; ?>" autocomplete="off>

   </div>
   <div class=" mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="your email address" value="<?php echo $email; ?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
   </div>
   <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter your mobile number" value="<?php echo $mobile ?>">
   </div>
   <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password" required value="<?php echo $password; ?>">
   </div>

   <button type="submit" class="btn btn-primary" name="submit">Update</button>
  </form>
 </div>



</body>

</html>