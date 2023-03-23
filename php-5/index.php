<?php

    $social_services=[
        "<i class='fab fa-facebook fa-lg'></i>"=>"https://www.facebook.com/",
        "<i class='fab fa-linkedin-in fa-lg'></i>"=>"https://www.facebook.com/",
        "<i class='fab fa-twitter fa-lg'></i>"=>"https://www.facebook.com/",
    ];
    $GLOBALS['guessWord']="development";
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
    
    <style>
         ul{
            list-style-type:none;
        }
        a{
            text-decoration:none;
        }
    </style>
</head>
<body>
    
    <!-- loan system start-->
    <div class="col-lg-4 mx-auto mt-5 card p-4" >
        <h1 class="text-center bg-primary p-3 text-light">loan system</h1>
        <form action="loansystem.php" method="GET">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">income :</label>
                <input name="income" type="number" class="form-control" id="exampleInputEmail1"   aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">consume money :</label>
                <input name="consume" type="number" class="form-control" id="exampleInputEmail1"   aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">loan :</label>
                <input name="loan" type="number" class="form-control" id="exampleInputEmail1"   aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">duration :</label>
                <input name="duration" type="number" class="form-control" id="exampleInputEmail1"   aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">interest :</label>
                <input name="interest" type="number" class="form-control" id="exampleInputEmail1"   aria-describedby="emailHelp" placeholder="please enter under 100">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- loan system end-->

    <!-- LOG IN SYSTEM start -->
    <div class="login col-lg-4 mx-auto mt-4 card p-4">
        <h2 class="text-center bg-warning p-3">Log in System</h2>
        <form action="Login.php" method="GET" class="mt-5">
            <div class="mb-3 d-flex justify-content-between">
                <div class="col-lg-5">
                    <label for="Email" class="form-label">Email :</label>
                    <input name="email" type="email" class="form-control" id="Email">
                </div>
                <div class="col-lg-5">
                    <label for="Password" class="form-label">Password :</label>
                    <input name="password" type="password" class="form-control" id="Password">
                </div>
            </div>
            <div class="mb-3 d-flex">
                <div class="col-lg-6">
                    <label for="img" class="form-label">image :</label>
                    <input name="image" type="file" class="form-control" id="img">
                </div>
            </div>
            <div class="social_media d-flex justify-content-center mt-5">
                <ul class="d-flex justify-content-around col-lg-6 p-0">
                    <?php
                        foreach($social_services as $index=>$social_service){
                            echo "<li><a href='$social_service'>$index</a></li>";
                        }
                    ?>
                </ul>
            </div>
            <button type="submit" class="btn btn-warning col-sm-12">Log in</button>
        </form>
    </div>
    <!-- LOG IN SYSTEM end -->

    <!-- prime , odd and even number checker start -->
    <div class="numberChecker col-lg-4 mx-auto mt-4 card p-4">
        <h2 class="text-center bg-primary p-3 text-light">NUmber Checker</h2>
        <form action="numberChecker.php" method="GET" class="mt-5">
            <div class="col-lg-12 mb-4">
                <label for="num" class="form-label">number :</label>
                <input name="number" type="number" class="form-control" id="num">
            </div>
            <button type="submit" class="btn btn-primary ">check</button>
        </form>
    </div>
    <!-- prime , odd and even number checker end -->

    <!-- guess the word start -->
    <div class="guessWord col-lg-4 mx-auto mt-4 card p-4">
        <h2 class="text-center bg-primary p-3 text-light">Word Checker</h2>
        <form action="guessWord.php" method="GET" class="mt-5">
            <p>your guess word:
                <?php
                    echo str_shuffle($GLOBALS['guessWord']);
                ?>
            </p>
            <div class="col-lg-12 mb-4">
                <label for="word" class="form-label">word :</label>
                <input name="word" type="text" class="form-control" id="word">
            </div>
            <button type="submit" class="btn btn-primary ">check</button>
        </form>
    </div>
    <!-- guess the word end -->

    <!-- email and password validation start-->
    <div class="Account col-lg-4 mx-auto mt-4 card p-4">
        <h2 class="text-center bg-warning p-3">Create Account</h2>
        <form action="validation.php" method="GET" class="mt-5">
            <div class="mb-3 d-flex justify-content-between">
                <div class="col-lg-5">
                    <label for="fname" class="form-label">first Name :</label>
                    <input name="fname" type="text" class="form-control" id="fname">
                </div>
                <div class="col-lg-5">
                    <label for="lname" class="form-label">last Name :</label>
                    <input name="lname" type="text" class="form-control" id="lname">
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <div class="col-lg-5">
                    <label for="Email" class="form-label">Email :</label>
                    <input name="email" type="email" class="form-control" id="Email">
                </div>
                <div class="col-lg-5">
                    <label for="Password" class="form-label">Password :</label>
                    <input name="password" type="password" class="form-control" id="Password">
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <label for="CPassword" class="form-label">Confirm Password :</label>
                <input name="Cpassword" type="password" class="form-control" id="CPassword">
            </div>

            <div class="mb-3 d-flex">
                <div class="col-lg-6">
                    <label for="img" class="form-label">image :</label>
                    <input name="image" type="file" class="form-control" id="img">
                </div>
            </div>
            <div class="social_media d-flex justify-content-center mt-5">
                <ul class="d-flex justify-content-around col-lg-6 p-0">
                    <?php
                        foreach($social_services as $index=>$social_service){
                            echo "<li><a href='$social_service'>$index</a></li>";
                        }
                    ?>
                </ul>
            </div>
            <button type="submit" class="btn btn-warning col-sm-12">Log in</button>
        </form>
    </div>
    <!-- email and password validation end-->
    

</body>
</html>