<?php 

include "./connect.php";

if(isset($_GET['deleteid'])){
 $id = $_GET['deleteid'];
 $sql = "DELETE FROM `crud` WHERE `id` = '$id'";
 $result = mysqli_query($connect, $sql);
 if($result){
  header("location: home.php");
  // echo "deleted successfull";
 } else {
  die(mysqli_error($connect));
 };
};



?>