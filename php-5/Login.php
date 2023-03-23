<?php

$login=$_GET;

$email=$login["email"];
$password=$login["password"];
$image=$login["image"];

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

    <!-- LOG IN SYSTEM start -->
    <?php
        echo " <div class='container'>
                    <div class='card' style='width: 18rem;'>
                        <img src=$image class='card-img-top' alt=''>
                        <div class='card-body'>
                            <p class='card-text'>
                                your email is: $email <br>
                                your passord is: $password
                            </p>
                        </div>  
                    </div>
                </div>
            "
    ?>
    <div class="container"></div>
    <!-- LOG IN SYSTEM end -->

</body>
</html>