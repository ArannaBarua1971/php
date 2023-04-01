<?php
session_start();
include '../env.php';
$name=$_REQUEST["name"];
$department=$_REQUEST["department"];
$boardRoll=$_REQUEST["boardRoll"];
$regRoll=$_REQUEST["RegRoll"];
$semester=$_REQUEST["semester"];
$group=$_REQUEST["group"];

// valid value
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
    $query="INSERT INTO information(name, department, board_roll, reg_roll, student_group, semester) VALUES ('$name','$department','$boardRoll','$regRoll','$group','$semester')";

    $response=mysqli_query($conn, $query);
    
    if($response){
        header("location: ../index.php");
        $_SESSION['success']="Yes , data of $name is saved";
    }

}

