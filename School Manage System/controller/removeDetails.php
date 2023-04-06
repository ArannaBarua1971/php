<?php
session_start();
include "../env.php";
$id=$_GET['id'];
$query1="SELECT * FROM information WHERE id='$id'";
$remove=mysqli_query($conn,$query1);
$removeData=mysqli_fetch_assoc($remove);
$name =$removeData['name'];
echo "$name";
$query2 ="DELETE FROM information WHERE id=$id";
$response = mysqli_query($conn,$query2);

if($response){
    $_SESSION['success']="Yes , data of $name is removed";
    header("location: ../allStudent.php");
}