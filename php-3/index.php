<?php

// ** guess game 
$word1="development";
printf("test 01 :%s <br>",str_shuffle($word1));
function guess_the_Word(string $str,$word1){
    
    if($str === $word1){
        echo "Test 01 passed";
        echo "<br>";
    }
    else{
        echo "your attemted is failed!!!";
        echo "<br>";
    }

}
// enter your guess number 
guess_the_Word("development",$word1);
echo "<br>";

// **img extension support(.jpg,.png);
function imgextSupport($imgNameWith_ext){
    $array=explode(".",$imgNameWith_ext);
    $ext=end($array);
    if($ext==="jpg" || $ext =="png"){
        echo "Your image is supported";
        echo "<br>";
    }
    else{
        echo ".$ext extension is not supported";
        echo "<br>";
    }
}
// enter extension
imgextSupport("img.zip");
echo "<br>";

// ** EMAIL VALIDATION
function emailvalid($email){
    $array=explode('.',$email);
    $emailext=end($array);
    if($emailext==="com"){
        if(strpos($array[0],"@gmail")==true){
            $array2=explode('@',$array[0]);
            if(strlen($array2[0])>5 && strlen($array2[0])<31){
                echo "You email format is right";
            }
            else{
                echo "Sorry, your username must be between 6 and 30 characters long.";
            }
        }
        else{
            echo "$array[0]! you entered wrong email format";
        }
    }
    else{
        echo "$emailext! you entered wrong email format";
    }
}
// enter your email
emailvalid("ara@gmail.com");
echo "<br>";

// ** password validation
function passCheck($password){
    $size=strlen($password);

    if($size>=8){
        echo "your password format is correct";
    }
    else{
        echo"Sorry, your password must be upper 8 charcters.";
    }
}
// enter your password 
passCheck("1234673");

