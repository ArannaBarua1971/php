<?php

$numbers=$_GET;
$number=$numbers["number"];
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

    <!-- number checker SYSTEM start -->
     <div class='container'>
        <div class='card' >
            <div class='card-body'>
                <p class='card-text'>
                    <?php
                        function numberChecker($num){
                            echo "$num :<br>";
                            if($num>0){
                                echo"1.positive number. <br>";
                                if($num%2==0){
                                    echo "2.even number. <br>";
                                    echo "3.not prime number. <br>";
                                }
                                else{
                                    echo "3.odd number. <br>";
                                    if($num%3==0){  
                                        echo "4.not prime number. <br>";
                                    }
                                    else{
                                        echo "4.prime number. <br>";
                                    }
                                }
                            }
                            else{
                                echo "1.negative number. <br>";
                            }
                        }
                        numberChecker($number);
                    ?>            
                </p>
            </div>  
        </div>
    </div>
    <!-- number checker SYSTEM end -->

</body>
</html>