<?php
include "./env.php";
$id=$_GET['id'];
$query="SELECT * FROM information WHERE id='$id'";
$response=mysqli_query($conn,$query);
$getData=mysqli_fetch_assoc($response);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- main css link -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-dark">
    
    <!-- navbar section start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="allStudent.php">All Studet Details</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- navbar section end -->

    <!-- student information form section start -->
    <div class="container">
        <div class="row">
            <div class="card mt-5 bg-light">
                <div class="card_body">
                    <div class="card_title">
                        <h3 class="bg-warning text-center mt-1 p-1">Student personal info</h3>
                        <p>Student name : <?=$getData['name'];?></p>
                        <p>Department : <?=$getData['department'];?></p>
                        <p>Board roll : <?=$getData['board_roll'];?></p>
                        <p>Reg. roll : <?=$getData['reg_roll'];?></p>
                        <p>Semester : <?=$getData['semester'];?></p>
                        <p>Group : <?=$getData['student_group'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student information form section end -->

    <!-- confirmation text -->


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_unset();
?>