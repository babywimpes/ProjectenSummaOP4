<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <style>
        .top-buffer{
            margin-top: 400px;
        }
    </style>
    <title>Homepage</title>


    <?php
session_start();

  
    if (isset($_GET['logout'])){
        unset($_SESSION['username']);
    }
    else{

    }

   
    ?>
    <?php include "../incl/include.php" ?>
    <?php include "../incl/connect.php" ?>
</head>

<body>
<?php


if(!isset($_SESSION['username'])) {
    echo '<a href="login.php" class="btn btn-primary btn-lg">Login</a>';
}
else{
    echo '<a href="index.php?logout" class="btn btn-secondary btn-lg">Logout</a>';
    echo '<a href="VideoUpload.php" class="btn btn-success btn-lg">Upload een video</a>';
}





?>



<!-- <a href="login.php" class="btn btn-primary btn-lg">Login</a> -->
    <div class="container top-buffer" >
        <div class="row">
            <div class="col text-center">
                <a class="btn btn-primary btn-lg" href="Beeldsessie/Users.php">Beeld Sessies</a>
                <a class="btn btn-primary btn-lg" href="Lessonslearned/lessonshome.php">Lessons Learned</a>
            </div>
        </div>
    </div>
</body>

</html>