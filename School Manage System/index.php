<?php
session_start();

$semesters=['1st','2nd','3rd','4th','5th','6th','7th','8th'];
$deps =['cmt','mt','pt','tt','ct'];
$groups=["A1","B1","A2","B2"];
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
        <div class="row">'
            <form action="./controller/controll.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Student Name :</label>
                    <input name="name" type="text" value="<?= empty($_SESSION['info']['name'])? '' : $_SESSION['info']['name'];?>" class="form-control" id="name" placeholder="Enter your name">
                    <?=empty($_SESSION['errors']["nameError"])? '':"<strong class='bg-danger p-2'>".$_SESSION['errors']['nameError']."</strong>";?><br>
                </div>
                <div class="mb-3">
                    <label for="Broll" class="form-label">Board Roll :</label>
                    <input name="boardRoll" type="number" value="<?= empty($_SESSION['info']['boardRoll'])? '': $_SESSION['info']['boardRoll'];?>" class="form-control" id="Broll" placeholder="Enter your Board roll">
                    <?=empty($_SESSION['errors']["brollError"])? '':"<strong class='bg-danger p-2'>".$_SESSION['errors']['brollError']."</strong>";?>
                </div>
                <div class="mb-3">
                    <label for="RegRoll" class="form-label">Reg. Roll :</label>
                    <input name="RegRoll" type="number" value="<?= empty($_SESSION['info']['RegRoll'])? '': $_SESSION['info']['RegRoll'];?>" class="form-control" id="RegRoll" placeholder="Enter your Registration roll">
                </div>
                <div class="mb-3 d-flex justify-content-around">
                    <div class="col-lg-2">
                        <label for="semester" class="form-label">Semester :</label>
                        <select name="semester">
                            <?php
                                foreach($semesters as $semester){
                                    echo "<option value=$semester>$semester</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label for="group" class="form-label">Group :</label>
                        <select name="group">
                            <?php
                                foreach($groups as $group){
                                    echo "<option value=$group>$group</option>";
                                }
                                ?>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label for="dep" class="form-label">Department :</label>
                        <select name="department">
                            <?php
                                foreach($deps as $dep){
                                    echo "<option value=$dep>$dep</option>";
                                }
                                ?>
                        </select>
                    </div>
                </div>
                <button name="info" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- student information form section end -->

    <!-- confirmation text -->
    <div class="toast <?= isset($_SESSION['success'])? 'show':'';?>" role="alert" style="position: absolute;right: 62px;" aria-live="assertive" aria-atomic="true">
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