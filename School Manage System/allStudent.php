<?php
session_start();
include './env.php';
$query="SELECT * FROM information";
$tableinfo=mysqli_query($conn,$query);
$studentInfos=mysqli_fetch_all($tableinfo,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System-student details</title>

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

    <!-- all student information section start -->
    <div class="container mt-5 text-center">
        <h3 class="text-light bg-primary p-2 mb-5">Student Details</h3>
        <table class="table text-light">
            <tr>
                <th>sl. no</th>
                <th>name</th>
                <th>department</th>
                <th>board roll</th>
                <th>reg. roll</th>
                <th>semester</th>
                <th>group</th>
                <th>remove/edit</th>
            </tr>
            <?php
                foreach($studentInfos as $index => $studentInfo){

            ?>
                <tr>
                    <td><?=$index++;?></td>
                    <td><?=$studentInfo['name'];?></td>
                    <td><?=$studentInfo['department'];?></td>
                    <td><?=$studentInfo['board_roll'];?></td>
                    <td><?=$studentInfo['reg_roll'];?></td>
                    <td><?=$studentInfo['semester'];?></td>
                    <td><?=$studentInfo['student_group'];?></td>
                    <td>
                        <a href="viewPage.php?id=<?=$studentInfo['id']?>" class="btn btn-warning btn-sm">veiw</a>
                        <a href="editData.php?id=<?=$studentInfo['id']?>" class="btn btn-primary btn-sm">edit</a>
                        <a href="controller/removeDetails.php?id=<?=$studentInfo['id']?>" class="btn btn-danger btn-sm">remove</a>
                    </td>
                </tr>
                <?php
                    };
                ?>
        </table>
    </div>
    <!-- all student information section end -->

    <!-- confirmation text -->
    <div class="toast <?= isset($_SESSION['success'])? 'show':'';?>" role="alert" style="position: absolute;right: 62px;bottom:40px" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Success</strong>
            <small>1 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-dark">
            <?= isset($_SESSION['success'])? $_SESSION['success']:'';?>
        </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_unset();
?>