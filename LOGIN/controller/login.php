<?php
session_start();

$info=$_REQUEST;

$email=$info["email"];
$password=$info["password"];
$name=$info["name"];
$ConfirmPassword=$info["ConfirmPassword"];

$erros=[];

// empty check of input
if(empty($email)){
    $erros['emailEmpty']="Enter your Email";
    goto session;
}
if(empty($name)){
    $erros['nameEmpty']="Enter your User name";
    goto session;
}
if(empty($password)){
    $erros['passEmpty']="Enter your Password";
    goto session;
}


// data validation
 // ** email validation
$GLOBALS['emailFormat']=["gmail","email","hotmail","yahoo"];
$array1=explode('.',$email);
$emailext=end($array1);
if($emailext==="com"){
    $array2=explode('@',$array1[0]);
    $format=strtolower(end($array2));
    $check=in_array($format,$GLOBALS['emailFormat']);
    if($check){
        if(strlen($array2[0]) >= 6 && strlen($array2[0]) <= 31){
            // nothing
        }
        else{
            $erros['emailValid']="Enter right email!";
        }
    }
    else{
        $erros['emailValid']="Enter right email!";
    }

}
else{
    $erros['emailValid']="Enter right email!";
}

//**  username validation
if($name<7){
    $errors["nameValid"]="Enter user name upper 7 charcter";
}


// ** password validation
$size=strlen($password);
if($size>=8){
    // nothing
}
else{
    $erros['passValid']="Enter password above 8 character";
    goto session;
}

if(empty($ConfirmPassword)){
    $erros['ConpassEmpty']="Enter your Confirm Password";
    goto session;
}
// ** confirm password validation
if($password!=$ConfirmPassword){
    $erros['ConpassValid']="Enter enter wrong password";
}

if(count($erros)){
    session:
    $_SESSION["errors"]=$erros;
    $_SESSION["info"]=$info;
    header("location:../index.php");
}
?>