<?php
session_start();
include '../env.php';
$name=$_REQUEST["name"];
$department=$_REQUEST["department"];
$boardRoll=$_REQUEST["boardRoll"];
$regRoll=$_REQUEST["RegRoll"];
$semester=$_REQUEST["semester"];
$group=$_REQUEST["group"];
$id=$_REQUEST['id'];
$erros=[];

if(isset($_REQUEST["info"])){
    if(empty($name)){
        $erros['nameError']="Enter your name";
    }
    if(empty($boardRoll)){
        $erros['brollError']="Enter your roll";
    }    
}

if(count($erros)){
    $_SESSION["errors"]=$erros;
    $_SESSION["info"]=$_REQUEST;
    header("location:../index.php");
}
else{
    
    $query="UPDATE information SET name='$name',department='$department',board_roll='$boardRoll',reg_roll='$regRoll',student_group='$group',semester='$semester' WHERE id=$id";

    $response=mysqli_query($conn, $query);
    
    if($response){
        $_SESSION['success']="Yes , data of $name is updated";
        header("location: ../allstudent.php");
    }

}