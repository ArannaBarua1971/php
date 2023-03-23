<?php

$info=$_GET;

$fname=$info["fname"];
$lname=$info["lname"];
$email=$info["email"];
$password=$info["password"];
$ConfirmPassword=$info["Cpassword"];
$image=$info["image"];
$GLOBALS['emailFormat']=["gmail","hotmail","yahoo"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    

</head>
<body>

    <!-- validation IN SYSTEM start -->

    <div class="mt-5 p-4 container card">
        <?php
            // ** email validation
            function emailvalid($email){
                $array1=explode('.',$email);
                $emailext=end($array1);
                if($emailext==="com"){
                    $array2=explode('@',$array1[0]);
                    $format=strtolower(end($array2));
                    $check=in_array($format,$GLOBALS['emailFormat']);
                    if($check){
                        if(strlen($array2[0]) >= 6 && strlen($array2[0]) <= 31){
                            echo "<p class='bg-success-subtle'> your  eamil : $email";
                        }
                        else{
                            echo "<p class='bg-danger-subtle'>$email! ($array2[0]) you should use for   username 6 to 31 charcters</p>";
                        }
                    }
                    else{
                        echo "< class='bg-danger-subtle'>$email! ($format) you entered wrong email format</    p>";
                    }
                
                }
                else{
                    echo "< class='bg-danger-subtle'>$email! ($emailext) you entered wrong email format</  p>";
                }
            }
            // ** password validation
            function passCheck($password){
                $size=strlen($password);
            
                if($size>=8){
                    echo "<p class='bg-success-subtle'>your password format is correct </p>";
                }
                else{
                    echo"<p class='bg-danger-subtle'>Sorry, your password must be upper 8 charcters.</p>";
                }
            }
        
            // first name check
            if(empty($fname)){
                echo "<p class='bg-danger-subtle'>Enter your First name !</p>";
            }
            else{
                echo "<p class='bg-success-subtle'>Enter your First name : $fname</p>";
            }
        
            // last name check
            if(empty($lname)){
                echo "<p class='bg-danger-subtle'>Enter your Last name !</p>";
            }
            else{
                echo "<p class='bg-success-subtle'>Enter your Last name : $lname</p>";
            }
        
            // email check
            if(empty($email)){
                echo "<p class='bg-danger-subtle'>Enter your email !</p>";
            }
            else{
                emailValid($email);
            }
        
            // password check
            if(empty($password)){
                echo "<p class='bg-danger-subtle'>Enter your password !</p>";
            }
            else{
                passCheck($password);
            }
        
            // confirmpassword check
            if(empty($ConfirmPassword)){
                echo "<p class='bg-danger-subtle'>Enter your Confirm password !</p>";
            }
            else{
                if($ConfirmPassword==$password){
                    echo "<p class='bg-success-subtle'>Correct</p>";
                }
                else{
                    echo "<p class='bg-danger-subtle'>NOt Correct</p>";
                }
            }
        ?>
    </div>
 
    <!-- validation IN SYSTEM end -->

</body>
</html>