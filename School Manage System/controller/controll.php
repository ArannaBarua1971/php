<?php
session_start();
include "../env.php";
$student_info=$_REQUEST;
$name=$student_info["name"];
$department=$student_info["department"];
$boardRoll=$student_info["boardRoll"];
$regRoll=$student_info["RegRoll"];
$semester=$student_info["semester"];
$cgpa=$student_info["cgpa"];
$group=$student_info["group"];

// valid value
$erros=[];

if(isset($student_info["info"])){
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
    $_SESSION["info"]=$student_info;
    header("location:../index.php");
}
else{
    $query="INSERT INTO schoolmanagementsystem(Name, Department, Group, Semester, BoardRoll, Reg.Roll, CGPA) VALUES ('$name','$department','$group','$semester','$boardRoll','$regRoll','$cgpa')";
    mysqli_query($conn,$query);
}

?>