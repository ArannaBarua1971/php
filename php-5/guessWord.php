<?php

    $word="development";
    $guessword=$_GET;
   
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
                        if($word==$guessword["word"]){
                            echo "<h2 class='bg-success-subtle '>correct</h2>";
                        }
                        else {
                            echo "<h2 class='bg-danger-subtle '>correct</h2>";
                        }
                    ?>            
                </p>
            </div>  
        </div>
    </div>
    <!-- number checker SYSTEM end -->

</body>
</html>