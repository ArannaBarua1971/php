<?php
session_start();
include'../env.php';
$name=$_REQUEST["name"];
$department=$_REQUEST["department"];
$boardRoll=$_REQUEST["boardRoll"];
$regRoll=$_REQUEST["RegRoll"];
$semester=$_REQUEST["semester"];
$cgpa=$_REQUEST["cgpa"];
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
    if(empty($cgpa)){
        $erros['gpaError']="Enter your cgpa";
    }
    else if(strlen($cgpa)!=1){
        $erros['validGpa']="Enter valid cgpa";
    }

    
}

if(count($erros)){
    $_SESSION["errors"]=$erros;
    $_SESSION["info"]=$_REQUEST;
    header("location:../index.php");
}
else{

    $query="INSERT INTO information(NAME, Department, Board Roll, Reg.Roll, Batch, Semester, CGPA) VALUES ('$name','$department','$boardRoll','$regRoll','$group','$semester','$cgpa')";

    $response=mysqli_query($conn, $query);
    
    var_dump($query);
    echo "<br>";

    var_dump($response);

}

