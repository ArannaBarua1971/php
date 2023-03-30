<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in -php</title>

    <!-- bootstrap css link -->
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
          /* background:black; */
        }
        .login{
          position:fixed;
          top:50%;
          left:50%;
          transform:translate(-50%,-50%);
        }
    </style>

</head>
<body>
    
    <!-- log in system start -->
        <div class="login card col-md-4 p-5 bg-dark-subtle">
            <form action="controller/login.php" method="POST">
                <div class="mb-3">
                  <label for="Email1" class="form-label">Email address : </label>
                  <input value="<?= empty($_SESSION["info"]["email"])? "":$_SESSION["info"]["email"]; ?>" name="email" type="email" class="form-control bg-white" id="Email1">
                  <?=empty($_SESSION["errors"]["emailEmpty"])? "":$_SESSION["errors"]["emailEmpty"];?>  
                  <?=empty($_SESSION["errors"]["emailValid"])? "":$_SESSION["errors"]["emailValid"];?>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">User name : </label>
                  <input value="<?= empty($_SESSION["info"]["name"])? "":$_SESSION["info"]["name"]; ?>" name="name" type="text" class="form-control bg-white" id="name">
                  <?=empty($_SESSION["errors"]["nameEmpty"])? "":$_SESSION["errors"]["nameEmpty"];?>  
                  <?=empty($_SESSION["errors"]["nameValid"])? "":$_SESSION["errors"]["nameValid"];?>
                </div>
                <div class="mb-3">
                  <label for="Password" class="form-label">Password : </label>
                  <input value="<?= empty($_SESSION["info"]["password"])? "":$_SESSION["info"]["password"]; ?>" name="password" type="password" class="form-control" id="Password">
                  <?= empty($_SESSION["errors"]["passEmpty"])? "":$_SESSION["errors"]["passEmpty"];?>
                  <?= empty($_SESSION["errors"]["passValid"])? "":$_SESSION["errors"]["passValid"];?>
                </div>
                <div class="mb-3">
                  <label for="ConfirmPassword" class="form-label">Confirm Password : </label>
                  <input value="<?= empty($_SESSION["info"]["ConfirmPassword"])? "":$_SESSION["info"]["ConfirmPassword"]; ?>" name="ConfirmPassword" type="password" class="form-control" id="ConfirmPassword">
                  <?= empty($_SESSION["errors"]["ConpassEmpty"])? "":$_SESSION["errors"]["ConpassEmpty"];?>
                  <?= empty($_SESSION["errors"]["ConpassValid"])? "":$_SESSION["errors"]["ConpassValid"];?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    <!-- log in system end -->

</body>
</html>


<?php
 session_unset();
?>